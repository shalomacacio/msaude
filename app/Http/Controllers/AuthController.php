<?php

namespace App\Http\Controllers;

use App\Entities\User;
use App\Entities\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;


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

        public function auth(Request $request){

            $data =
            [
                'cpf' => $request->get('cpf'),
                'celular' => $request->get('celular'),
            ];
      
            try {

                $user = User::where('cpf', $request->cpf)->first();
                
                if(!$user){
                    throw new Exception("CPF inválido");
                    return redirect()->back()->with(['message'=> "CPF não cadastrado"]);
                }
                if($user->celular != $request->get('celular')){
                    throw new Exception("Celular não cadastrado");
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
