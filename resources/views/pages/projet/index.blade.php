@extends('layout.master')
@push('plugin-styles')
@endpush
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">List Projets</h4>
        <div class="table-responsive">
          <table  id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              
              <tr>
                <th>Projet</th>
                <th>date_debut</th>
                <th>date_fin</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($projets as $entr)
              <tr>
                
                <td>{{ $entr->nom }}</td>
                <td>{{ $entr->date_debut }}</td>
                <td>{{ $entr->date_fin }}</td>
                <td>{{ $entr->status }}</td>
                <td>
                  <form action="{{ url('projet/'.$entr->id) }}" method="post">
                    <a href="{{ url('projet/'.$entr->id.'/edit')}}" class="btn btn-warning">Modifier</a>
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
@push('plugin-scripts')
@endpush
@push('custom-scripts')
@endpush