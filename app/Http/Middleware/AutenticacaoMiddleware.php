<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$medoto_autenticacao,$perfil)

    {
        echo $medoto_autenticacao.' - '.$perfil.'<br>';

        if($medoto_autenticacao=='padrao'){
            echo 'verificar o usuario e senha no banco de dados'.$perfil.'<br>';
        }

        if($medoto_autenticacao == 'ldap'){
            echo 'Verificar o usuário e senha no AD'.$perfil.'<br>';
        }


        if(false){
            return $next($request);
        }else{
            return response('Acesso negado, rota precisa de autenticação');
        }
        
    }
}
