<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('meta')
    <title>@yield('title')</title>
    @laravelPWA
    
</head>
<body>

    @guest
    <div class="navbar-fixed">
        <nav style="background-color: #6C341B;" >
            <div class="nav-wrapper">
                <a href="{{ route('home')}}" class="brand-logo center white-text">ChocoDeli</a>
                <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down" style="padding-right:20px">
                    <li><a  href="{{ route('home')}}" style="<?php if(request()->Is('/')) echo 'background-color: #EFB194; color:#6C341B;';?>" class=""><b>Inicio</b></a></li> 
                    <li>
                        <a class="" href="{{ route('productos.show') }}" style="<?php if(request()->Is('productos/*') or request()->Is('productos')) echo 'background-color: #D1CFD1; color:#6C341B;'; ?>">
                            <b>Productos</b>
                            <i class="material-icons left">
                            cake
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="id_sesiones" style="<?php if (request()->Is('login') or request()->Is('registro')) echo 'background-color: #EFB194; color:#6C341B;'; ;?>">
                            <b>Cuenta</b>
                            <i class="material-icons left">
                                account_circle
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" style="background-color: #fff"  id="menu-responsive">
        <li><a  href="{{ route('home')}}" style="<?php if(request()->Is('/')) echo 'background-color: #EFB194; color:#6C341B;';?>" class=""><b>Inicio</b></a></li> 
        <li>
            <a class="" href="{{ route('productos.show') }}" style="<?php if(request()->Is('productos/*') or request()->Is('productos')) echo 'background-color: #EFB194; color:#6C341B;'; ?>">
                <b>Productos</b>
                <i class="material-icons left">
                cake
                </i>
            </a>
        </li>
        <li>
            <a class="dropdown-trigger" href="#" data-target="id_sesionResp" style="<?php if (request()->Is('login') or request()->Is('registro')) echo 'background-color: #EFB194; color:#6C341B;'; ;?>">
                <b>Cuenta</b>
                <i class="material-icons left">
                    account_circle
                </i>
            </a>
        </li>
    </ul>

    @endguest

    @auth
    <div class="navbar-fixed">
        <nav style="background-color: #6C341B;" >
            <div class="nav-wrapper">
                <a href="{{ route('home')}}" class="brand-logo center white-text">ChocoDeli</a>
                <a href="#" data-target="menu-responsiveA" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down" style="padding-right:20px">
                    <li><a  href="{{ route('home')}}" style="<?php if(request()->Is('/')) echo 'background-color: #EFB194; color:#6C341B;';?>" class=""><b>Inicio</b></a></li> 
                    <li>
                        <a class="" href="{{ route('productos.show') }}" style="<?php if(request()->Is('productos/*') or request()->Is('productos')) echo 'background-color: #EFB194; color:#6C341B;'; ?>">
                            <b>Productos</b>
                            <i class="material-icons left">
                            cake
                            </i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="id_sesionesA" style="<?php if (request()->Is('login') or request()->Is('registro')) echo 'background-color: #EFB194; color:#6C341B;'; ;?>">
                            <b>{{Auth::user()->name}}</b>
                            <i class="material-icons left">
                                account_circle
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" style="background-color: #fff"  id="menu-responsiveA">
        <li><a  href="{{ route('home')}}" style="<?php if(request()->Is('/')) echo 'background-color: #EFB194; color:#6C341B;';?>" class=""><b>Inicio</b></a></li> 
        <li>
            <a class="" href="{{ route('productos.show') }}" style="<?php if(request()->Is('productos/*') or request()->Is('productos')) echo 'background-color: #EFB194; color:#6C341B;'; ?>">
                <b>Productos</b>
                <i class="material-icons left">
                cake
                </i>
            </a>
        </li>
        <li>
            <a class="dropdown-trigger" href="#" data-target="id_sesionRespA" style="<?php if (request()->Is('login') or request()->Is('registro')) echo 'background-color: #EFB194; color:#6C341B;'; ;?>">
                <b>{{Auth::user()->name}}</b>
                <i class="material-icons left">
                    account_circle
                </i>
            </a>
        </li>
    </ul>

    @endauth


    <ul id="id_sesiones" class="dropdown-content">
        <li>
            <a class="black-text" href="{{ route('user.login') }}">
                Login
                <i class="material-icons left">
                    person
                </i>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="black-text" href="{{ route('user.registro') }}">
                Registrarse
                <i class="material-icons left">
                    person_add
                </i>
            </a>
        </li>
    </ul>

    <ul id="id_sesionResp" class="dropdown-content">
        <li>
            <a class="black-text" href="{{ route('user.login') }}">
                Iniciar sesion
                <i class="material-icons left">
                    person
                </i>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="black-text" href="{{ route('user.registro') }}">
                Registrarse
                <i class="material-icons left">
                    person_add
                </i>
            </a>
        </li>
    </ul>

    <ul id="id_sesionesA" class="dropdown-content">
        <li>
            <a class="black-text" href="#">
                Mi cuenta
                <i class="material-icons left">
                    person
                </i>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="black-text" href="{{ route('user.logout') }}">
                Salir
                <i class="material-icons left">
                    logout
                </i>
            </a>
        </li>
    </ul>

    <ul id="id_sesionRespA" class="dropdown-content">
        <li>
            <a class="black-text" href="#">
                Mi cuenta
                <i class="material-icons left">
                    person
                </i>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="black-text" href="{{ route('user.logout') }}">
                Salir
                <i class="material-icons left">
                    logout
                </i>
            </a>
        </li>
    </ul>


    
    <div class="container section">
        @yield('content')
    </div>
    
    

    <footer class="page-footer" style="background-color: #6C341B;">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">Nosotros</h5>
            <ul>
                <li><a class="grey-text text-lighten-3" href="{{route('quienessomos')}}">¿Quienes somos?</a></li>
                <li><p>Ubicacion: Colonia centro #1</p></li>
            </ul>
            </div>
            <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Legal</h5>
            <ul>
                <li><a class="grey-text text-lighten-3" href="{{route('politica')}}">Politica de privacidad</a></li>
                <li><a class="grey-text text-lighten-3" href="{{route('quienessomos')}}">Terminos y condiciones</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        © 2023 ChocoDeli 
        </div>
        </div>
    </footer>
    

    <script src="{{asset('js/notificaciones.js')}}"></script>
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>

    @yield('scripts')
</body>
</html>