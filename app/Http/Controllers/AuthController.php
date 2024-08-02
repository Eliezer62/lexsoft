<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
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

            $user = Auth::user();
            return response()->json([
                'user'=>$user,
                'token'=>$token,
                'expired'=>Carbon::now()->add('seconds', 900)->timezone('America/Sao_Paulo')->format('Y-m-d H:i:s')
            ], 200);
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
}
