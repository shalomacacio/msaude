<?php

namespace App\Http\Middleware;

use App\Entities\Paciente;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPaciente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = [
            'message' => 'Ops!, Por favor, SALVES OS DADOS PESSOAIS antes de preencher COMORBIDADES!'
        ];

        $paciente = Paciente::where('cpf', Auth::user()->cpf)->first();;
        if(!$paciente){
            return redirect()->back()->with('message', $response['message']);
        }
        return $next($request);
    }
}
