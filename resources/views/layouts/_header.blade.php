<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="{{route('home')}}" id="logo">Sample App</a>
            <nav>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                  <li><a href="#">User list</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          {{ Auth::user()->name }}<b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="{{ route('users.show', Auth::user()->id) }}">ID center</a></li>
                          <li><a href="#">Edit profile</a></li>
                          <li class="divider"></li>
                          <li>
                              <a href="#" id="logout">
                                  <form class="" action="{{ route('logout') }}" method="post">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                      <button type="submit" class="btn btn-block btn-danger" name="button">logout</button>
                                  </form>
                              </a>
                          </li>
                      </ul>
                  </li>
                @else
                <li><a href="{{ route('help') }}">help</a></li>
                <li><a href="{{ route('login') }}">login</a></li>
                @endif
            </ul>
        </nav>
        </div>
    </div>
</header>
