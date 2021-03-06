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
                        'cns' => 'required|unique:users|min:15|max:15',
                        'celular' => 'required|min:11|max:11 ',
                    ],
                    [
                        'nome.required'=>'Este campo é obrigatório',
                        'cns.required'=>'Este campo é obrigatório',
                        'cns.unique'=>'Este usuário já existe',
                        'cns.min'=>'mínimo 15 dígitos',
                        'cns.max'=>'máximo 15 dígitos',
                        'celular.min'=>'celular invalido',
                        'celular.max'=>'celular invalido',
                    ]
                );

                User::create([
                    'nome' => $request->nome,
                    'cns' => $request->cns,
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
                'cns' => $request->get('cns'),
                'celular' => $request->get('celular'),
            ];
      
            try {

                $user = User::where('cns', $request->cns)->first();
                
                if(!$user){
                    return Redirect::back()->withErrors(['cns' => 'CNS não encontrado!']);
                }
                if($user->celular != $request->get('celular')){
                    return Redirect::back()->withErrors(['celular' => 'Celular não encontrado!']);
                }

                $paciente = Paciente::where('cns', $user->cns)->first();

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
