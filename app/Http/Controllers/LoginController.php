<?php

use Illuminate\Routing\Controller as BaseController;
use App\Models\Cliente;
use App\Models\Recensione;

class LoginController extends BaseController
{
    public function login(){
        if(session('user_id')!=null){
            return redirect('home');
        }
        else{
            //verifichiamo che ci sia stato un errore
            $old_username=Request::old('username');
            return view('login')
              ->with('csrf_token', csrf_token())
              ->with('old_username', $old_username);
        }
    }

    public function checkLogin(){
    
        $utente = Cliente::where('nome_utente', request('username'))->where('password', request('password'))->first();
    
        if(isset($utente)>0){
            Session::put('user_id', $utente->ID);   
            return redirect('home');
        }
        else{
            return redirect('login')->withInput();
        }
    }

    public function logOut(){
        Session::flush();
        return redirect('home');
    }

    public function signUp(){
        
    }
}
