@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="text-left text-monospace">Just for Admin <i class="mdi mdi-language-php text-danger"></i></h1>
        
    </div>
    @if (session('succes'))
        <div class="alert alert-success col-sm-12 text-center text-monospace mt-4">
            {{ session('succes') }}
        </div>
    @endif
    <div class="col-12 mt-4">
    <form class="row" action="{{ url('utilisateur') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group col-md-6">
              <label for="nom">Nom utilisateur</label>
              <input type="text" class="form-control" id="nom" placeholder="Nom utilisateur" name="nom_utilisateur">
            </div>
            <div class="form-group col-md-6">
              <label for="password">Mot de pass</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
            </div>
            <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
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
                <label for="photo_profile">Télécharger photo</label>
                <input type="file" class="form-control-file" id="photo_profile" name="photo_profile">
            </div>
            <div class="form-group col-md-6">
                <label for="admin">Rôle</label>
                <select name="role" id="admin" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-fw w-25">Ajouter</button>
            </div>
            </form>
    </div>
    
</div>
@endsection