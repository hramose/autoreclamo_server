<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Autoreclamos</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.css" type="text/css" />
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Auto-Reclamos
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                @if (!Auth::guest())
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="{{ url('/reclamo') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Reclamos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/reclamo') }}">Reclamos Pendientes</a></li>
                          <li><a href="{{ url('/reclamo/atendidos') }}">Reclamos Atendidos</a></li>
                          <li><a href="{{ url('/reclamo/anulados') }}">Reclamos Anulados</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="{{ url('/reportes') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Reportes <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/reportes') }}">Obtener Reportes</a></li>
                        </ul>
                      </li>
                </ul>
                @endif
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
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
    <script src="{{ asset('/js/moment.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        $(document).ready(function(){
              $('.info-auto').click(function(){
                  $('#marca-auto').text($(this).attr('marca'));
                  $('#modelo-auto').text($(this).attr('modelo'));
                  $('#anio-auto').text($(this).attr('anio'));
                  $('#placa-auto').text($(this).attr('placa'));
              })
              $('.atender-reclamo').click(function(){
                  $('.id-reclamo').val($(this).attr('id-reclamo'));
              })
              $('.anular-reclamo').click(function(){
                  $('.id-reclamo').val($(this).attr('id-reclamo'));
              })
              $('.date').datetimepicker({
                format: 'DD-MM-YYYY'
              });
               $('.date_report').datetimepicker({
                format: 'MM/DD/YYYY'
              });
        });
        
    </script>
</body>
</html>
