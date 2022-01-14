<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditeur;
use App\Models\Formation;
use App\Models\Module;

class formationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aud = Auditeur::all();
        $forma = Formation::all();
        return view('vestiaire.formation.listeFormation',compact('forma','aud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aud = Auditeur::all();
        $forma=Formation::all();
        return view('vestiaire.formation.addFormation',compact('forma','aud'));
        //return view('vestiaire.formation.addFormation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aud = Auditeur::all();
        $forma = Formation::create($request->all());
        
        //return redirect('/journal.index');
        return redirect('/formation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aud = Auditeur::all();
        $forma = Formation::findOrFail($id);
        return view('vestiaire.formation.detailFormation',compact('forma','aud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aud = Auditeur::all();
        $forma = Formation::findOrFail($id);
        return view('vestiaire.formation.modFormation',compact('forma','aud'));
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
        $aud = Auditeur::all();
        $forma = Formation::findOrFail($id);
        $forma->update($request->all());
        return redirect('/journal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forma = Formation::findOrFail($id);
        $forma->delete();
        return redirect('/journal.index');
    }

    public function alapage(){
        //faire une jointure entre module et formation
        $data = Formation::join('modules','formations.id','=','modules.form_id')
         ->select('*')
         ->get();
        
         $form = Formation::all();
        return view('Saph_Perf.Formations',compact('data','form'));
    }
}
