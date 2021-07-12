<?php

use Illuminate\Routing\Controller as BaseController;
use App\Models\Cliente;
use App\Models\Recensione;

class FeedbackController extends BaseController
{
    public function allFeedbacks(){
        $recensioni=Recensione::all();
        return view('feedbacks')->with('recensioni', $recensioni);
    }

    public function writeFeedback(){
        return view('writefeedback')
            ->with('csrf_token', csrf_token());
    }

    public function exportFeedback(){
        $utente=Cliente::find(session('user_id'));
		$id=$utente->ID;
        
		$recensione = Recensione::find($id);
        if(isset($recensione)){
            $recensione->delete();

        }
        
        $newRecensione=new Recensione;
        $newRecensione->id_cliente=$id;
        $newRecensione->stelle=request('stelle_r');
        $newRecensione->testo=request('text_r');
        $newRecensione->data=date('Y-m-d');
        $newRecensione->save();
        return redirect('home');
    }

}
