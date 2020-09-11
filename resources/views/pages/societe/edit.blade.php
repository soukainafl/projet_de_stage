@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
      <div class="col-sm-12">
      <h4>Formulaire de modification</h4>
    </div>
            
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                     <form action="{{ url('societe',$societe->id)}}" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="_method" value="PUT" >
                        <div class="row">
                                         <div class="form-group col-md-6">

                                            <label for="nomste">Societe</label>
                                            <input type="text" class="form-control"  name="nomste" id="nomste"
                                                value="{{$societe->nomste}}">
                                        </div>
                                   <div class="form-group col-md-6">
                                            <label for="adresse">Adresse</label>
                                            <input type="text" class="form-control" name="adresse" id="adresse"
                                               value="{{$societe->adresse}}">
                                        </div>
                                 <div class="form-group col-md-6">
                                            <label for="services">Services</label>
                                            <input type="text" class="form-control" name="services" id="services"
                                                 value="{{$societe->services}}">
                                        </div>
                                   <div class="form-group col-md-6">
                                            <label for="siteweb">site_web</label>
                                            <input type="text" class="form-control" name="siteweb" id="siteweb"
                                                 value="{{$societe->siteweb}}">
                                        </div>
                               <div class="form-group col-md-6">
                                            <label for="lat">Maps</label>
                                            <input type="text" class="form-control" name="lat" id="lat"
                                                 value="{{$societe->lat}}">
                                                  <input type="text" class="form-control" name="lng" id="lng"
                                                value="{{$societe->lng}}">
                                        </div>
                                 <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                 value="{{$societe->email}}">
                                        </div>
                               <div class="form-group col-md-6">
                                            <label for="tel">Telephone</label>
                                            <input type="text" class="form-control" name="tel" id="tel"
                                                 value="{{$societe->telephone}}">
                                        </div>
                            
                                 
                                  
                                   
                               
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-md-12">
                                            <button type="submit"
                                                class="btn btn-outline-primary btn-fw w-25">Modifier</button>
                                        </div>
                                
                                </div>
                            </form>
</div>

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush