

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="{{route('pageAcceuil')}}">home</a>
   <a class="navbar-brand" href="{{route('ajouter_Livre')}}">livre</a>
   <a class="navbar-brand" href="{{route('ajouterCateg')}}">categ</a>
   <a class="navbar-brand" data-toggle="dropdown" href="{{route('ajouterCateg')}}" role="button" aria-haspopup="true" aria-expanded="true">ajouter category</a>

    <div class="dropdown-menu">
    @foreach($categories as $categorie)
      <a class="dropdown-item" href="{{route('par_Livre',$categorie)}}">{{$categorie->name}}--({{$categorie->livres->count()}})</a>
      @endforeach
      <div class="dropdown-divider"></div>

     <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </nav>