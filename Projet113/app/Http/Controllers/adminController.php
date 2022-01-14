<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function accueil(){
        if(auth()->guest()){
            return redirect('/connexion')->withErrors([
                'email' =>" vous devez etre connecte pour voir cette page",
            ]);
        }
        return view('vestiaire.admin');
    }

    public function deconnexion(){
        auth()->logout();
        return redirect('/connexion');
    }
}
