@extends('layout.master')
@push('plugin-styles')
@endpush
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List societés</h4>
                <div class="table-responsive">
                    <table  id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Societe</th>
                                <th>Service</th>
                                <th>SiteWeb</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($societes as $entr)
                            <tr>
                                
                                <td>{{ $entr->nomste }}</td>
                                <td>{{ $entr->services }}</td>
                                <td>{{ $entr->siteweb }}</td>
                                <td>{{ $entr->telephone }}</td>
                                <td>{{ $entr->email }}</td>
                                <td>
                                    <form action="{{ url('societe/'.$entr->id) }}" method="post">
                                        <a href="{{ url('societe/'.$entr->id.'/edit')}}" class="btn btn-warning">Modifier</a>
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