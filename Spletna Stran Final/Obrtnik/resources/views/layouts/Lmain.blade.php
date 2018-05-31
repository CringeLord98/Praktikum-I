<html>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('Title')
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Francois+One|Indie+Flower|Kaushan+Script|Open+Sans|Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/materialize.min.css') }}" />
        <script src="{{ asset('js/app.js') }}" defer></script>

    
        <link rel="stylesheet" type="text/css" media="screen" href="{{ url('/css/styles.css') }}" />
</head>

<body class="white ">
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="green darken-3">
                        <div class="nav-wrapper">
                                <a class="brand-logo logo-razmik">@yield('Logo')</a>
                            <ul id="nav-mobile" class="left hide-on-med-and-down" style="margin-left:20em;">
                            <li><a href="{{ url('/') }}">Domov</a></li>
                            <li><a href="{{ url('/iskanje') }}">Iskanje</a></li>
                            @guest
                            @else
                            
                            <li style="border-left:1px solid white;"><a class="nav-link" href="{{ url('/storitve') }}">{{ __('Moje Storitve') }}</a></li>
                            <li><a class="nav-link" href="{{ url('/narocila') }}">{{ __('Naročila') }}</a></li>
                            @endguest
                            </ul>
                            <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right:2em;">
                                @guest
                                    
                                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Prijava') }}</a></li>
                                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registracija') }}</a></li>
                                @else
                                    
                                    <li><a class="nav-link" href="{{ url('/profile') }}"> {{ Auth::user()->name }} <span class="caret"></span></a></li>


                                    <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
                         
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form></li>
                                   
                                @endguest
                              </ul>
                        </div>
                </div>
            </nav>
        </div>
                
    </header>
    @yield('Slika')
    <div class="container white" id="mainContainer">
        @yield('Content')
    </div>
    
</body>
@yield('Footer')

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</html>


