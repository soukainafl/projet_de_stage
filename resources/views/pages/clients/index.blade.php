@extends('layout.master')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h4 class="card-title">List Clients</h4>

        <div class="table-responsive">
          <table  id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th> Foto </th>
                <th> Nom </th>
                <th> Prenom</th>
                <th> Email </th>
                <th> Télephone </th>
                <th> adresse </th>
                <th> ville </th>
                <th> Payé </th>
                <th> Site_web </th>
                <th> Function </th>
                <th> Date_né </th>
                <th> Services </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($clients as $client)
              <tr>
                <td class="py-1">
                <img src="{{ url('/storage/'.$client->image) }}"  /> </td>
                <td> {{$client->nom}} </td>
                <td> {{$client->prenom}} </td>
                <td> {{$client->email}}</td>
                <td> {{$client->telephone}}</td>
                <td> {{$client->adresse}} </td>
                <td> {{$client->ville}} </td>
                <td> {{$client->pays}} </td>
                <td> {{$client->site_web}} </td>
                <td> {{$client->function}} </td>
                <td> {{$client->datenaissance}} </td>
                <td> {{$client->services}} </td>
                  <td>
                  <form action="{{ url('client/'.$client->id) }}" method="post">
                    <a href="{{ url('client/'.$client->id.'/edit')}}" class="btn btn-warning">Modifier</a>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Supprimer</button>
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