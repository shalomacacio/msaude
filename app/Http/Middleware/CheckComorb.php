<?php

namespace App\Http\Middleware;

use App\Entities\Paciente;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckComorb
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
            'message' => 'Ops! As COMORBIDADES precisam estar preenchidas!'
        ];

        $paciente = Paciente::where('cpf', Auth::user()->cpf)->first();;
        if(count($paciente->comorbidades) <= 0 ){
            return redirect()->back()->with('message', $response['message']);  
        }
        return $next($request);
    }
}
