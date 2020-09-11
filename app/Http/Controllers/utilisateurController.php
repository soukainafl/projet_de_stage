<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Validator;
use Image;
use Auth;

class utilisateurController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        // $this->middleware('auth');
       
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('pages.utilisateurs.list',['users'=>$users]);
    }


    public function profile(){
        $user = Auth::user();
        return view('pages.utilisateurs.profile',['user'=>$user]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.utilisateurs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        if($request->hasFile('photo_profile')){
            $path = $request->file('photo_profile')->store('users');
        }
        $user->name = $request['nom_utilisateur'];
        $user->password = Hash::make($request['password']);
        $user->email = $request['email'];
        $user->prenom = $request['prenom'];
        $user->nom = $request['nom'];
        $user->datenaissance = $request['date'];
        $user->telephone = $request['tel'];
        $user->image = $path;
        $user->role = $request['role'];
        $user->save();
        session()->flash('succes','Utilisateur ajouter avec succéss');
        return redirect()->back();
    }

  public function register(Request $request)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->password = Hash::make($request['password']);
        $user->email = $request['email'];
        $user->save();

        return redirect('/');
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
        $user = User::find($id);
        return view('pages.utilisateurs.edit',['user'=>$user]);
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
        $user = User::find($id);
        if($request->hasFile('photo_profile')){
            $path = $request->file('photo_profile')->store('users');
            $user->image = $path;
        }


        $user->name = $request['nom_utilisateur'];
        $user->email = $request['email'];
        $user->prenom = $request['prenom'];
        $user->nom = $request['nom'];
        $user->datenaissance = $request['date'];
        $user->telephone = $request['tel'];
        if($request->role)
        {
            $user->role = $request['role'];
        }
       

        $user->save();
        session()->flash('succes','Utilisateur Modifie avec succéss');
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
        $user = User::find($id);
        $user->delete(); 

        session()->flash('succes','Utilisateur Supprimer avec succéss');
        return redirect()->back();
    }
}
