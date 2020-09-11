@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')

    <div class="row">
      <div class="col-sm-12">
       <h4>Formulaire de projet</h4>
     </div>
     
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                     <form action="{{ url('projet')}}" method="post" enctype="multipart/form-data">
                                <div class="row">
                                     <div class="form-group col-md-6">
                                            <label for="nom">Projet</label>
                                            <input type="text" class="form-control" name="nom" id="nom"
                                                placeholder="Ex:">
                                        </div>
                                     <div class="form-group col-md-6">
                                            <label for="date_debut">Date_debut</label>
                                            <input type="date" class="form-control" name="date_debut" id="date_debut"
                                                placeholder="Ex:">
                                        </div>
                                  <div class="form-group col-md-6">
                                            <label for="date_fin">Date_fin</label>
                                            <input type="date" class="form-control" name="date_fin" id="date_fin"
                                                placeholder="Ex:">
                                        </div>
                                   <div class="form-group col-md-6">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" name="status" id="status"
                                                placeholder="Ex:">
                                        </div>
                                  
                                   
                               
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                   <div class="form-group col-md-12">
                                            <button type="submit"
                                                class="btn btn-outline-primary btn-block">Ajouter</button>
                                        </div>
                                </div>
                            </form>
    
  </div>

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush