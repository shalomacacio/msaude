<?php

namespace App\Http\Controllers;

use Exception;
use App\Entities\User;
use App\Entities\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{
         /**Diret to login page */
         public function login(){
            return view('auth.login');
        }
      
        /**Diret to login page if logout */
        public function logout(){
            Auth::logout();
            return redirect()->route('login');
        }
      
        /**Diret to register page */
        public function register(){
            return view('auth.register');
        }

        protected function create(Request $request)
        {
            try{
                
                $dados = $request->validate(
                    [
                        'nome' => 'required',
                        'cpf' => 'required|numeric|unique:users|cpf',
                        'celular' => 'required|min:11|max:11 ',
                    ],
                    [
                        'nome.required'=>'Este campo é obrigatório',
                        'cpf.numeric'=>'Digite apenas números',
                        'cpf.unique'=>'Este cpf já existe',
                        'cpf.required'=>'Este campo é obrigatório',
                        'celular.min'=>'celular invalido',
                        'celular.max'=>'celular invalido',
                    ]
                );

                User::create([
                    'nome' => $request->nome,
                    'cpf' => $request->cpf,
                    'celular' => $request->celular
                ]);

                return redirect()->route('login');  
        
            } catch (\Illuminate\Validation\ValidationException $e) {
                // dd($e->errors());
                return redirect()->back()->withErrors($e->errors())->withInput();
            }

        }

        public function auth(Request $request){

            $data =
            [
                'cpf' => $request->get('cpf'),
                'celular' => $request->get('celular'),
            ];
      
            try {

                $user = User::where('cpf', $request->cpf)->first();
                
                if(!$user){
                    return Redirect::back()->withErrors(['cpf' => 'CPF não encontrado!']);
                }
                if($user->celular != $request->get('celular')){
                    return Redirect::back()->withErrors(['celular' => 'Celular não encontrado!']);
                }

                $paciente = Paciente::where('cpf', $user->cpf)->first();

                Auth::login($user);
                
                if(!$paciente){
                    return redirect()->route('pacientes.create');
                }
                return redirect()->route('pacientes.index');
            } catch (Exception $e) {
                //throw $th;
                return redirect()->back()->with(['message'=> $e->getMessage()]);
            }
        }
}
