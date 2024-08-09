<?php

namespace App\Http\Controllers;

use App\Models\Advogado;
use App\Notifications\TokenEsqueciMinhaSenha;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'check', 'tokenEsqueci', 'alterarSenha']]);
    }

    /**
     * Realiza Login pela API JWT
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        try{
            $request->validate([
                'email' => 'sometimes|string|email',
                'cpf'=>'sometimes|string|max:11|min:11',
                'password' => 'required|string',
            ]);

            $credenciais = $request->only(['email', 'password', 'cpf']);


            $token = Auth::attempt($credenciais);

            if (!$token)
            {
                return response()->json([
                    'msg' => 'Login inválido',
                ], 401);
            }

            $tempo = Carbon::now()->add('seconds', 900)->timezone('America/Sao_Paulo');
            $user = Auth::user();
            return response()->json([
                'user'=>$user,
                'token'=>$token,
                'expired'=>$tempo->format('Y-m-d H:i:s')
            ], 200)->withCookie(cookie('token', $token, 55, secure: true, sameSite: 'lax'));
        }
        catch (ValidationException $e)
        {
            return response()->json(['msg'=>'Login inválido'], 401);
        }

    }


    public function logout()
    {
        Auth::logout();
        return response()->json(['msg'=>'Deslogado com sucesso']);
    }

    /**
     * Checa se o login ainda é valido
     * @return \Illuminate\Http\JsonResponse
     */
    public function check()
    {
        return response()->json(['valido'=>Auth::check()]);
    }

    public function tokenEsqueci(Request $request)
    {
        try{
            $validados = $request->validate(['email' => 'required|email']);

            $advogado = Advogado::firstWhere('email', $validados['email']);
            if ($advogado) {
                $token = Str::random(255);
                DB::table('password_reset_tokens')
                    ->where('email', $validados['email'])->delete();

                DB::table('password_reset_tokens')->insert([
                    'email' => $validados['email'],
                    'token' => $token,
                    'created_at' => Carbon::now('America/Sao_Paulo')
                ]);
                $advogado->notify(new TokenEsqueciMinhaSenha($advogado, $token));
            }
            return response(status: 200);
        }catch (\Exception $e)
        {
            return response(status: 200);
        }
    }

    public function alterarSenha(Request $request)
    {
        $validate = $request->validate([
            'token'=>'required',
            'password'=>'required|min:8',
        ]);

        $email = DB::select("SELECT email
                FROM password_reset_tokens
                WHERE created_at + INTERVAL '30 minutes' >= CURRENT_TIMESTAMP AND
                token = :token", ['token' => $validate['token']]);

        DB::table('password_reset_tokens')->where('token', $validate['token'])->delete();
        if($email !== [])
        {
            $email = $email[0]->email;
            $advogado = Advogado::firstWhere('email', $email);
            $advogado->update(['password'=>Hash::make($validate['password'])]);
        }
        return response(status: 200);
    }
}
