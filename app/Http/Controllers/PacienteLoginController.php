<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteLoginController extends Controller
{
    public function index(){
        return view('pacienteLogin.index');
    }

    public function create(){
        return view('pacienteLogin.create');
    }

    public function authPaciente(Request $request)
    {
        return dd($request);
    }
}
