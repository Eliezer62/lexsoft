<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidarPermissoes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $usuario = Auth::user();
        $rota = $request->route()->action['prefix'];
        //Nao permite que estagiarios vejam atendimento
        if($rota=='api/atendimentos' && $usuario?->grupo == 'estagiario')
        {
            return response()->json(['msg'=>'Não permitido'], 403);
        }
        //Nao permite que usuarios nao administradores manipulem usuarios
        if($rota=='api/advogados' && $usuario?->grupo != 'administrador')
            return response()->json(['msg'=>'Não permitido'], 403);

        return $next($request);
    }
}
