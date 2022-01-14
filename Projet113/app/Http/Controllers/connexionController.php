<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexionController extends Controller
{
   
    public function formulaire(){
        return view('inscriptions.connexion');
    }

    public function traitement(Request $request){
        $request->validate([
            "email" => ['required', 'email'],
            'password' => ['required','min:4','max:20'],
            
        ]);
      /*   dd(
            $request->validate([
                "email" => ['required', 'email'],
                'password' => ['required','min:4','max:20'],
                
            ])
        ); */
// verifier la connexion
        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);
        
// rediriger si vrai
        if($resultat) {
            $tri = $request->all();
            return view('vestiaire.admin');
        }
       
        return back()->withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrects',
            'password' => 'le mot de pas est incorrect',
        ]);
    }
}
