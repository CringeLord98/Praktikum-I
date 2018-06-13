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
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

        
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
                                <li><a href="{{ url('/') }}"><i class="material-icons left">home</i>Domov</a></li>
                                
                                <li><a href="{{ url('/iskanje') }}"><i class="material-icons left">search</i>Iskanje</a></li>
                                @guest
                                @else
                                
                                <li style="border-left:1px solid white;"><a class="nav-link" href="{{ url('/storitve') }}"><i class="material-icons left">work</i>{{ __('Moje Storitve') }}</a></li>
                                <li><a class="nav-link" href="{{ route('n_index') }}"><i class="material-icons left">assignment</i>{{ __('Naročila') }}</li></a>
                                @endguest
                            </ul>
                            <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right:2em;">
                                @guest
                                    
                                    <li><a class="nav-link" href="{{ route('login') }}"><i class="material-icons left">person</i>{{ __('Prijava') }}</a></li>
                                    <li><a class="nav-link" href="{{ route('register') }}"><i class="material-icons left">person_add    </i>{{ __('Registracija') }}</a></li>
                                @else
                                
                                    <li><a class="nav-link" href="{{ url('/profile') }}"><i class="material-icons left">person</i> {{ Auth::user()->name }} <span class="caret"></span></a></li>


                                    <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();"><i class="material-icons left">arrow_forward</i>
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
    
    @yield('Content')
    
</body>
@yield('Footer')

    <script>
(function($){
  
  $(function(){

     $('select').material_select();
     
  }); })(jQuery);
    </script>



</html>

