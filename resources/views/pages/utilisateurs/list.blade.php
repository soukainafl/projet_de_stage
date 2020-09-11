@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        
        <div class="card">
          <div class="card-body">
            @if (session('succes'))
              <div class="alert alert-success col-sm-12 text-center text-monospace mt-4">
                {{ session('succes') }}
              </div>
            @endif
            <h4 class="card-title">List Utilisateurs</h4>
            <div class="table-responsive">
              <table  id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th> Utilisateur </th>
                    <th> Nom d'utilisateur </th>
                    <th> Email </th>
                    <th> Télephone </th>
                    <th> Rôle </th>
                    <th> Modifier </th>
                    <th> Supprimer </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="py-1">
                            <img src="{{ url('assets/images/faces-clipart/pic-1.png') }}" alt="image" /> </td>
                            <td> {{$user->name}} </td>
                            <td> {{$user->email}}</td>
                            <td> {{$user->telephone}}</td>
                            <td> {{$user->role}} </td>
                            <td>  <a href="{{url('utilisateur/'.$user->id.'/edit')}}" class="btn btn-outline-warning">Modifier</a> </td>
                            <td> 
                              <form action="{{ url('utilisateur/'.$user->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                              </form>
                            </td>
                        </tr>                  
                    @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    
</div>
@endsection