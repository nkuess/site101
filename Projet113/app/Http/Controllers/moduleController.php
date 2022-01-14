<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Module;

class moduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$forma = Formation::all();
        $mod = Module::all();
        return view('vestiaire.module.listeModule',compact('mod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forma = Formation::all();
        $mod = Module::all();
        return view('vestiaire.module.addModule',compact('mod','forma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forma = Formation::all();
        $mod = Module::create($request->all());
        return redirect('module');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forma = Formation::all();
        $mod = Module::findOrFail($id);
        return view('vestiaire.module.detailModule',compact('mod','forma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forma = Formation::all();
        $mod = Module::findOrFail($id);
        return view('vestiaire.module.modModule',compact('mod','forma'));
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
        $forma = Formation::all();
        $mod = Module::findOrFail($id);
        $mod->update($request->all());
        return redirect('mdoule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mod = Module::findOrFail($id);
        $mod->delete();
        return redirect('module');
    }
}
