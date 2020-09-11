<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets=Projet::all();
        return view('pages.projet.index',compact('projets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.projet.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $societe=new Projet();
        $societe->nom=$request->nom;
        $societe->date_debut=$request->date_debut;
        $societe->date_fin=$request->date_fin;
        $societe->status=$request->status;
        $societe->save();
        return redirect('projet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $projet=Projet::find($id);
        return view('pages.projet.edit',compact('projet'));
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
        $societe= Projet::find($id);
        $societe->nom=$request->nom;
        $societe->date_debut=$request->date_debut;
        $societe->date_fin=$request->date_fin;
        $societe->status=$request->status;
        $societe->save();
        return redirect('projet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $societe= Projet::find($id);
        $societe->delete();
        return redirect('projet');
    }
}
