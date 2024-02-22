<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);

        //recuperar o ip de requisição
        $ip = $request->server->get('REMOTE_ADDR');
    

        //recuperar a rota acessada 
        $rota = $request->getRequestUri();

        LogAcesso::create(['log'=>"IP: $ip requisitou a rota: $rota"]);

        $resposta = $next($request);

        

        $resposta->setStatusCode(201,'O status da resposta e o texto foram modificado');
       
        return $resposta;
    }
}
