@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')

    <div class="row">
      <div class="col-sm-12">
         <h4>Formulaire d'ajouter</h4>
     </div>
      
      @if (session('succes'))
        <div class="alert alert-success col-sm-12 text-center text-monospace mt-4">
            {{ session('succes') }}
        </div>
    @endif
    <div class="col-12 mt-4">
                     <form action="{{ url('societe')}}" method="post" enctype="multipart/form-data">
                                <div class="row">
                                         <div class="form-group col-md-6">
                                            <label for="nomste">Societe</label>
                                            <input type="text" class="form-control" name="nomste" id="nomste"
                                                placeholder="Ex:">
                                        </div>
                                         <div class="form-group col-md-6">
                                            <label for="adresse">Adresse</label>
                                            <input type="text" class="form-control" name="adresse" id="adresse"
                                                placeholder="Ex:">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="services">Services</label>
                                            <input type="text" class="form-control" name="services" id="services"
                                                placeholder="Ex:">
                                        </div>
                                         <div class="form-group col-md-6">
                                            <label for="siteweb">site_web</label>
                                            <input type="text" class="form-control" name="siteweb" id="siteweb"
                                                placeholder="Ex:">
                                        </div>
                                         <div class="form-group col-md-6">
                                            <label for="lat">Maps</label>
                                            <input type="text" class="form-control" name="lat" id="lat"
                                                placeholder="Ex:3321453">
                                                  <input type="text" class="form-control" name="lng" id="lng"
                                                placeholder="Ex:123232">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Ex:">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tel">Telephone</label>
                                            <input type="text" class="form-control" name="tel" id="tel"
                                                placeholder="Ex:">
                                        </div>
                                    
                                  
                                   
                               
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                       <div class="form-group  col-md-12">
                                            <button type="submit"
                                                class="btn btn-outline-primary btn-fw w-25">Ajouter</button>
                                        </div>
                                    </div>
                               
                            </form>
            </div>
  </div>



@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush