<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Projet;
use App\Societe;
class ClientController extends Controller
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
      $clients=Client::all();
      $projets=Projet::all();
      $societes=Societe::all();
       return view('pages.clients.index',compact('clients','projets','societes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $projets=Projet::all();
      $societes=Societe::all();
       return view('pages.clients.add',compact('projets','societes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $client = new Client();

        if($request->hasFile('image')){
            $path = $request->file('image')->store('clients');
             $client->image = $path;
        }

        $client->nom = $request['nom'];
        $client->prenom =$request['prenom'];
        $client->email = $request['email'];
        $client->datenaissance = $request['date'];
        $client->telephone = $request['tel'];
       
        $client->fonction = $request['function'];
        $client->ville = $request['ville'];
        $client->services = $request['services'];
        $client->adresse = $request['adresse'];
        $client->site_web = $request['site_web'];
        $client->projet_id = $request['projet_id'];
        $client->societe_id = $request['societe_id'];
        $client->pays = $request['pays'];

        $client->save();
        session()->flash('succes','Client ajouter avec succéss');
        return redirect()->back();
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
       $client=Client::find($id);
            $projets=Projet::all();
      $societes=Societe::all();
       return view('pages.clients.edit',compact('client','projets','societes'));
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
         $client =Client::find($id);

        if($request->hasFile('image')){
            $path = $request->file('image')->store('clients');
             $client->image = $path;
        }

         $client->nom = $request['nom'];
        $client->prenom =$request['prenom'];
        $client->email = $request['email'];
        $client->datenaissance = $request['date'];
        $client->telephone = $request['tel'];
       
        $client->fonction = $request['function'];
        $client->ville = $request['ville'];
        $client->services = $request['services'];
        $client->adresse = $request['adresse'];
        $client->site_web = $request['site_web'];
        $client->projet_id = $request['projet_id'];
        $client->societe_id = $request['societe_id'];
        $client->pays = $request['pays'];

        $client->save();
        session()->flash('succes','Client modifier avec succéss');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        session()->flash('succes','Client supprimer avec succéss');
        return redirect()->back();
    }
}
