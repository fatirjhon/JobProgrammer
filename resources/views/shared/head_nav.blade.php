<header>
  <nav class="navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand">
          <img src="{{{ asset('img/geeks.png') }}}" alt="gf" width="110">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">

          <li>{!! link_to(route('home'), 'Home') !!}</li>
        @if(Sentinel::check())
        @if(Sentinel::getUser()->hasAccess('admin'))
          <li>{!! link_to(route('olah.index'), 'Dashboard') !!}</li>
          <li>{!! link_to(route('logout'), 'Logout') !!}</li>
          <li><a>Wellcome {!! Sentinel::getUser()->email !!}</a></li>
        @else
          <li>{!! link_to(route('DataUsers.index'), 'Dashboard') !!}</li>
          <li>{!! link_to(route('logout'), 'Logout') !!}</li>
          <li><a>Wellcome {!! Sentinel::getUser()->email !!}</a></li>
        @endif
        @else
          <li>{!! link_to(route('signup'), 'Register') !!}</li>
          <li>{!! link_to(route('login'), 'Login') !!}</li>
        @endif

      </ul>
      </div>
    </div>
  </nav>
</header>