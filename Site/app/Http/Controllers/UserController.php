<?php

namespace App\Http\Controllers;

use App\Models\Reponses;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertion(Request $request){
        //dd($request->all());
        $request->validate([
            'age'=>"numeric"
        ]);
        Reponses::create([
            "email"=>$request->email,
            "question2"=>$request->age,
            "question3"=>$request->sexe,
            "question4"=>$request->personne,
            "question5"=>$request->profession,
            "question6"=>$request->marque,
            "question7"=>$request->store,
            "question8"=>$request->casque,
            "question9"=>$request->VR,
            "question10"=>$request->utilisation,
            "question11"=>$request->qualité,
            "question12"=>$request->confort,
            "question13"=>$request->point,
            "question14"=>$request->graph,
            "question15"=>$request->audio,
            "question16"=>$request->notif,
            "question17"=>$request->ami,
            "question18"=>$request->enregister,
            "question19"=>$request->exlusifs,
            "question20"=>$request->fonctionnalité,
        ]);
        session(['email'=>$request->email]);
        return back()->with('success','ok');
    }



    public function fin(Request $request){
        $retour = Reponses::where('email', session('email'))->first();
        //dd($retour);


        //retour à la vue créée
        return view("Utilisateurs/RetourReponses",compact('retour'));

    }
}
