<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PacienteRepository;

class PacienteLoginController extends Controller
{

    protected $pacienteRepository;

    public function __construct( PacienteRepository $pacienteRepository)
    {
        $this->pacienteRepository = $pacienteRepository;
    }

    public function index(){
        return view('pacienteLogin.index');
    }

    public function create(){
        return view('pacienteLogin.create');
    }

    public function authPaciente(Request $request)
    {
        $cns = $request->cns;
        $celular = $request->celular;

        $paciente = $this->pacienteRepository->findByField('cns', $cns);

        $response = [
            'message' => 'Comorbidade created.',
            'data'    => $paciente->toArray(),
        ];

        if($paciente){
            return redirect()->route('pacientes.create');  
        }

        return redirect()->back()->with('message', $response['message']);
    }
}
