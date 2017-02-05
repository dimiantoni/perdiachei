<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PerdiAchei') }}</title>

    <!-- Styles -->
    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="http://bootswatch.com/flatly/bootstrap.min.css"> --}}
    <link href="{{ asset('assets/flat-ui/dist/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/flat-ui/dist/css/flat-ui.css') }}" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/system/vendor/html5shiv.js"></script>
      <script src="assets/system//vendor/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body{
            background-color: #eff3f6;
        }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56eee80db16008fe73d48eb0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <div id="app">
        <nav class="navbar navbar-inverse navbar-lg navbar-embossed" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-01">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="{{ url('/home') }}" class=" navbar-brand compressed"><img src="assets/img/logo.png" alt="" data-src="assets/img/logo.png" data-src-retina="assets/img/logo.png" width="132" height="28"/></a></li>
                    <li><a href="{{ url('/home') }}" >Estatísticas</a></li>
                    <li class="dropdown">
                        <a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown">
                            Usuários
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#fakelink">Cadastrar Usuários</a></li>
                            <li> <a href="#fakelink">Gerenciar Usuários</a></li>
                        </ul> <!-- /Sub menu -->
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Achados<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/home') }}">Action</a></li>
                            <li><a href="{{ url('/home') }}">Another action</a></li>
                            <li><a href="{{ url('/home') }}">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/home') }}">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/home') }}">One more separated link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Perdidos<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/home') }}">Action</a></li>
                            <li><a href="{{ url('/home') }}">Another action</a></li>
                            <li><a href="{{ url('/home') }}">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/home') }}">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/home') }}">One more separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/home') }}">Suporte</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Configurações</a></li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!--/.nav -->
        </nav>

        @yield('content')

    </div>

    <!-- Scripts -->
    {{-- <script src="/js/app.js"></script> --}}
    <script src="{{ asset('assets/flat-ui/dist/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/flat-ui/dist/js/flat-ui.min.js') }}"></script>
    <script src="{{ asset('assets/flat-ui/dist/js/prettify.js') }}"></script>
    <script src="{{ asset('assets/flat-ui/dist/js/application.js') }}"></script>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
</body>
</html>
