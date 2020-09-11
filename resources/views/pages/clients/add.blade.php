@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="text-left text-monospace">Formulaire d'ajouter </h1>
        
    </div>
   
    @if (session('succes'))
        <div class="alert alert-success col-sm-12 text-center text-monospace mt-4">
            {{ session('succes') }}
        </div>
    @endif

   
    <div class="col-12 mt-4">
    <form class="row" action="{{ url('client') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group col-md-6">
              <label for="nom">Nom </label>
              <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
            </div>
             <div class="form-group col-md-6">
              <label for="prenom">Prénom </label>
              <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
            </div>

               <div class="form-group col-md-6">
              <label for="adresse">Adresse </label>
              <input type="text" class="form-control" id="adresse" placeholder="adresse" name="adresse">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
          
            <div class="form-group col-md-6">
                <label for="date">Date de naissance</label>
                <input type="date" class="form-control" id="date" placeholder="Date" name="date">
            </div>
            <div class="form-group col-md-6">
                <label for="tel">Télephone</label>
                <input type="tel" class="form-control" id="tel" placeholder="Télephone" name="tel">
            </div>
             <div class="form-group col-md-6">
                <label for="function">Function</label>
                <input type="text" class="form-control" id="function" placeholder="function" name="function">
            </div>
                <div class="form-group col-md-6">
                <label for="site_web">Site_Web</label>
                <input type="text" class="form-control" id="site_web" placeholder="site_web" name="site_web">
            </div>
              <div class="form-group col-md-6">
                <label for="services">Services</label>
                <input type="text" class="form-control" id="services" placeholder="services" name="services">
            </div>
            <div class="form-group col-md-6">
                <label for="image">Télécharger photo</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group col-md-6">
                <label for="ville">Ville</label>
                <select name="ville" id="ville" class="form-control">
                    <option value="Safi">Safi</option>
                    <option value="Jadida">Jadida</option>
                    <option value="Casa">Casa</option>
                </select>
            </div>
     
               <div class="form-group col-md-6">
                <label for="projet_id">Projet</label>
                <select name="projet_id" id="projet_id" class="form-control">
              
                    @foreach($projets as $projet)
                    <option value="{{$projet->id}}">{{$projet->nom}}</option>
                    @endforeach
                </select>
            </div>
               <div class="form-group col-md-6">
                <label for="societe_id">Societe</label>
                <select name="societe_id" id="societe_id" class="form-control">
                     
                    @foreach($societes as $societe)
                    <option value="{{$societe->id}}">{{$societe->nomste}}</option>
                    @endforeach
                </select>
            </div>
                   <div class="form-group col-md-6">
                <label for="pays">Payé</label>
                <input type="text" class="form-control" id="pays" placeholder="pays" name="pays">
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-fw w-25">Ajouter</button>
            </div>
            </form>
    </div>
    
</div>
@endsection