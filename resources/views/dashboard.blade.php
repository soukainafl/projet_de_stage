@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-cube text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Projets</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{count(App\Projet::all())}}</h3>
            </div>
          </div>
        </div>
        <!--p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth </p-->
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Societés</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{count(App\Societe::all())}}</h3>
            </div>
          </div>
        </div>
        <!--p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales </p-->
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Clients</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{count(App\Client::all())}}</h3>
            </div>
          </div>
        </div>
        <!--p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales </p-->
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Utilisateurs</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{count(App\User::all())}}</h3>
            </div>
          </div>
        </div>
        <!--p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales </p-->
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Projets</h4>
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
           
                <th>Projet  </th>
                <th> Date_debut </th>
                <th> Date_fin </th>
                <th> Status </th>
              </tr>
            </thead>
            <tbody>
            
          @foreach($projets as $projet)
          <tr>
            <td>{{$projet->nom}}</td>
            <td>{{$projet->date_debut}}</td>
            <td>{{$projet->date_fin}}</td>
            <td>{{$projet->status}}</td>
          </tr>
          @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!--div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Manage Tickets</h5>
        <div class="fluid-container">
          <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
            <div class="col-md-1">
              <img class="img-sm rounded-circle mb-4 mb-md-0 d-block mx-md-auto" src="{{ url('assets/images/faces/face1.jpg') }}" alt="profile image"> </div>
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James :</p>
                <p class="text-primary mr-1 mb-0">[#23047]</p>
                <p class="mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
              </div>
              <p class="text-gray ellipsis mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim vivamus. </p>
              <div class="row text-gray d-md-flex d-none">
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                </div>
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                </div>
              </div>
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Manage </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-history fa-fw"></i>Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
            <div class="col-md-1">
              <img class="img-sm rounded-circle mb-4 mb-md-0 d-block mx-md-auto" src="{{ url('assets/images/faces/face2.jpg') }}" alt="profile image"> </div>
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Stella :</p>
                <p class="text-primary mr-1 mb-0">[#23135]</p>
                <p class="mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
              </div>
              <p class="text-gray ellipsis mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl. </p>
              <div class="row text-gray d-md-flex d-none">
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted">Last responded :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                </div>
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted">Due in :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                </div>
              </div>
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Manage </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-history fa-fw"></i>Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row ticket-card mt-3">
            <div class="col-md-1">
              <img class="img-sm rounded-circle mb-4 mb-md-0 d-block mx-md-auto" src="{{ url('assets/images/faces/face3.jpg') }}" alt="profile image"> </div>
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">John Doe :</p>
                <p class="text-primary mr-1 mb-0">[#23246]</p>
                <p class="mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
              </div>
              <p class="text-gray ellipsis mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
              <div class="row text-gray d-md-flex d-none">
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted">Last responded :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                </div>
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted">Due in :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                </div>
              </div>
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Manage </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-history fa-fw"></i>Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div-->
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush