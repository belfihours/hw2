<?php

use Illuminate\Routing\Controller as BaseController;
use App\Models\Cliente;
use App\Models\Recensione;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;

class SignupController extends BaseController
{
    public function signUp(Request $request){    
        $utente = Cliente::where('nome_utente', $request->old('nome_utente'))->first();
        if(session('user_id')!=null){
            return redirect('home');
        }
        else{
            $old_name=$request->old('nome');
            $old_surname=$request->old('cognome');
            $old_username=$request->old('nome_utente');
            $error_message=null;
            
            if($request->old('password')!=$request->old('password_c')){
                $error_message="Le password non corrispondono";
            }
            else if(isset($utente)){
                $error_message="Nome utente già registrato";
            }
            else{
                $error_message="La password deve contenere almeno 8 caratteri alfanumerici, una lettera minuscola ed una maiuscola";
            }
            return view('signup')
              ->with('csrf_token', csrf_token())
              ->with('old_name', $old_name)
              ->with('old_surname', $old_surname)
              ->with('old_username', $old_username)
              ->with('errore', $error_message);
        }
    }

    public function subscribe(Request $request){
        $utente = Cliente::where('nome_utente', request('nome_utente'))->first();
        if(request('password')!=request('password_c')){
            return redirect('signup')->withInput();
        }
        if(isset($utente)){
            return redirect('signup')->withInput();
        }
        if(!$this->checkPassword($request)){
            return redirect('signup')->withInput();
        }
        else{
            $newCliente= new Cliente;
            $newCliente->nome=request('nome');
            $newCliente->cognome=request('cognome');
            $newCliente->nome_utente=request('nome_utente');
            $newCliente->password=request('password');
            $newCliente->save();
            return redirect('login');
        }
    }


    public function checkPassword(Request $request){
    
    $validator = Validator::make($request->all(), [
    'password' => [
        Password::min(8)
        ->letters()
        ->mixedCase()
        ->numbers()],
        ]);

    if($validator->passes()){
        return true;
        }
    else return false;
    }
}





