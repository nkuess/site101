<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditeur;
use App\Models\Formation;

class auditeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aud = Auditeur::all();
        return view('vestiaire.auditeur.listeAuditeur',compact('aud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$aud=Auditeur::all();
        return view('vestiaire.auditeur.addAuditeur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aud = Auditeur::create($request->all());
        return redirect('auditeur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aud = Auditeur::findOrFail($id);
        return view('vestiaire.auditeur.detailAuditeur',compact('aud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aud = Auditeur::findOrFail($id);
        return view('vestiaire.auditeur.modAuditeur',compact('aud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aud = Auditeur::findOrFail($id);
        $aud->update($request->all());
        return redirect('auditeur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aud = Auditeur::findOrFail($id);
        $aud->delete();
        return redirect('auditeur');
    }

    public function set_inscription(){
        $forma = Formation::all();
        return view('inscriptions.inscription',compact('forma'));
    }
    public function giveMessage(Request $request){
        //dd("envoyé ",$request);
        $request->validate([
            "nomAud" => ['required', 'max:20'],
            "prenAud" => ['required','max:20'],
            "mailAud" => ['required','email'],
            "contactAud" => ['required','max:10'],
            "payAud" => ['required'],  
            "maFormation" => ['required'],  
        ]);
        Auditeur::create($request->all());
        dd("mail envoyé à ".$request['mailAud']." et a sapphyre-rd. Merci", $request);
    }
}
