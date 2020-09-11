<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('/storage/'.Auth::user()->image) }}" >
          </div>
          <div class="text-wrapper">
            <p class=" mt-2 profile-name">{{Auth::user()->name}}</p>
          </div>
        </div>
        <a href="{{url('client/create')}}" class="btn btn-success btn-block">Nouveau Client <i class="mdi mdi-plus"></i>
        </a>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
 @if(auth::user()->role=="Admin")
    <li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">Utilisateurs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('utilisateur/create') }}">Ajouter</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('utilisateur') }}">List</a>
          </li>
        </ul>
      </div>
    </li>
@endif
      <li class="nav-item {{ active_class(['user-pages/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#client-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
          <i class="menu-icon mdi mdi-account-circle"></i>
          <span class="menu-title">Clients</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ show_class(['user-pages/*']) }}" id="client-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ active_class(['client/create']) }}">
              <a class="nav-link" href="{{ url('client/create') }}">Ajouter</a>
            </li>
            <li class="nav-item {{ active_class(['client']) }}">
              <a class="nav-link" href="{{ url('client') }}">List</a>
            </li>
          
          </ul>
        </div>
      </li>
      <li class="nav-item {{ active_class(['user-pages/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#societe-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
          <i class="menu-icon mdi mdi-bulldozer"></i>
          <span class="menu-title">Sociétés</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ show_class(['user-pages/*']) }}" id="societe-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ active_class(['societe/creat']) }}">
              <a class="nav-link" href="{{ url('societe/create') }}">Ajouter</a>
            </li>
            <li class="nav-item {{ active_class(['societe']) }}">
              <a class="nav-link" href="{{ url('societe') }}">List</a>
            </li>
          
          </ul>
        </div>
      </li>
      <li class="nav-item {{ active_class(['user-pages/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#projet-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
          <i class="menu-icon mdi mdi-box-shadow"></i>
          <span class="menu-title">Projets</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ show_class(['user-pages/*']) }}" id="projet-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ active_class(['projet/create']) }}">
              <a class="nav-link" href="{{ url('projet/create') }}">Ajouter</a>
            </li>
            <li class="nav-item {{ active_class(['projet']) }}">
              <a class="nav-link" href="{{ url('projet') }}">List</a>
            </li>
          </ul>
        </div>
      </li>
  </ul>
</nav>