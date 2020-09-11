<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Societe;
class SocietesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $societes=Societe::all();
        return view('pages.societe.list',compact('societes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pages.societe.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $societe=new Societe();
        $societe->nomste=$request->nomste;
        $societe->services=$request->services;
        $societe->adresse=$request->adresse;
        $societe->siteweb=$request->siteweb;
        $societe->email=$request->email;
        $societe->telephone=$request->tel;
        $societe->save();
        return redirect('societe');
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
       $societe=Societe::find($id);
        return view('pages.societe.edit',compact('societe'));
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
        $societe=Societe::find($id);
        $societe->nomste=$request->nomste;
        $societe->services=$request->services;
        $societe->adresse=$request->adresse;
        $societe->siteweb=$request->siteweb;
        $societe->email=$request->email;
        $societe->telephone=$request->tel;
        $societe->save();
        return redirect('societe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $societe=Societe::find($id);
        $societe->delete();
        return redirect('societe');
    }
}
