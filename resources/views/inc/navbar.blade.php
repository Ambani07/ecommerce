<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="{{route('home')}}" >
            <strong class="blue-text">
                <img src="{{ asset('img/logo-2.png') }}" alt="Logo" style="max-width: 60%;">
            </strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav ml-2">
            <li class="nav-item ">
            <a class="nav-link waves-effect" href="{{ route('home') }}">Home
                
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link waves-effect" href="{{ route('shop.index') }}" >
                Products </a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link waves-effect" href="#" >
                About </a>
            </li> --}}
            <li class="nav-item">
            <a class="nav-link waves-effect" href="{{ route('contact') }}" >
                Contuct Us</a>
            </li>

            </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav ml-auto ">
            
            {{-- <li class="nav-item">
            <a href="#" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f text-muted"></i>
            </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter text-muted"></i>
            </a>
            </li> --}}
            <li class="nav-item dropdown">

                {{-- @if (Auth::check())
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link waves-effect">
                    <i class="fa fa-user mr-2 text-muted"></i> Logout</i>
                </a>

                @else
                    
                <a href="{{ route('login') }}" class="nav-link waves-effect "
                    target="_blank" data-toggle="modal" data-target="#modalLRForm">
                    <i class="fa fa-user mr-2 text-muted"></i>
                </a>
                @endif --}}

                
                      
                
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false"><i class="fa fa-user mr-2 text-muted"></i></a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            
                            @if(Auth::check())
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            @else
                                <a class="dropdown-item" href="{{ route('login') }}">Sign in</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Sign up</a>
                            @endif
                          
                        </div>
                    
                      
            

            {{-- <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;" >
                {{ csrf_field() }}
            </form> --}}


            {{-- <a href="" class="btn btn-default btn-rounded my-3" >Launch
                Modal LogIn/Register</a> --}}
            </li>
            <li class="nav-item">
                <a href="{{ route('cart.index') }}" class="nav-link waves-effect">
                    
                    @if (Cart::instance('default')->count() > 0)
                        <span class="badge red z-depth-1 mr-1"> {{Cart::instance('default')->count()}}</span>
                    @endif
                    
                    <i class="fas fa-shopping-cart text-muted"></i>
                    <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                </a>
                </li>
        </ul>

        </div>

    </div>
    </nav>
    <!-- Navbar -->



