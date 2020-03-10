<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font for Site-->
    <link href="{{ asset('css/fontSite.css') }}" rel="stylesheet" >

    <style type="text/css">
        #footerCoral{
            color: #fff;
            background-color: #ff6a28;
            /*height: 300px;*/
        }
        #textCategoryFooter{
            text-decoration: none;
            color: #fff;
            font-size: 15px;
        }
        #textCategoryFooter:hover{
            color: #D8D8D8;
        }
        #footerGray{
            background-color: #E6E6E6;
            height: 50px;
            margin-top: -14px;
            margin-bottom: -14px;
        }

        /* Index */
        #headerSpotlight{
            background-color: #ff6a28; 
            color: #fff;
        }
        #imageSpotlight{
            border: 1px solid #BDBDBD;
            width: 200px;
            height: 150px;
            border-radius: 3px;
            margin-left: 3px;
        }

        #heartIcon{
            width: 19px;
        }
        .heartIconAndText {
            margin-top: -15px;
            margin-left: 20px;
            margin-bottom: 10px;
        }
        .textIconFavorito{
            margin-left: 2px;
        }

        /* Enviar Receita */
        #headerGray{
            background-color: #BDBDBD;
            color: #fff;
            font-size: 18px;
            height: 30px;
        }
        #bodyContainer{
            background-color: #F2F2F2;
        }
        #buttonSendRecipe{
            background-color: #ff6a28;
            color: #fff;
        }

        /* View Bolos Footer */
        #imgFooterCategory{
            border-radius: 25px;
        }
        
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }}-->
                    <img src="{{ URL::asset('/imagens/avatarLogo.png') }}" class="img-fluid" width="90px" style="margin-bottom: -13px" title="Home Page">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="margin-bottom: -20px">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ URL::asset('/icons/png/32px/0039-file-text2.png') }}" width="23px" class="img-fluid" alt="Enviar Receita">
                                <b>
                                    <a class="nav-link" href="{{ url('/menu/contato') }}">{{ __('CONTATO') }}</a>
                                </b>
                            </li>








                            <li class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ URL::asset('/icons/png/32px/0039-file-text2.png') }}" width="23px" class="img-fluid" alt="Enviar Receita">
                                <b>
                                    <a class="nav-link" href="{{ url('/menu/enviarReceita') }}">{{ __('ENVIA SUA RECEITA') }}</a>
                                </b>
                            </li>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <li class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ URL::asset('/icons/png/32px/0276-enter.png') }}" width="23px" class="img-fluid" alt="home">
                                <b>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ENTRAR') }}</a>
                                </b>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="{{ URL::asset('/icons/png/32px/0006-pencil.png') }}" width="23px" class="img-fluid" alt="home">
                                    <b>
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('CADASTRE-SE') }}</a>
                                    </b>
                                </li>
                            @endif
                        @else

                            <li class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ URL::asset('/icons/png/32px/0039-file-text2.png') }}" width="23px" class="img-fluid" alt="Enviar Receita">
                                <b>
                                    <a class="nav-link" href="{{ url('/menu/contato') }}">{{ __('CONTATO') }}</a>
                                </b>
                            </li>

                            <li class="nav-item">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ URL::asset('/icons/png/32px/0039-file-text2.png') }}" width="23px" class="img-fluid" alt="Enviar Receita">
                                <b>
                                    <a class="nav-link" href="{{ url('/menu/enviarReceita') }}">{{ __('ENVIA SUA RECEITA') }}</a>
                                </b>
                            </li>
                            
                            <li class="nav-item dropdown">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{{ URL::asset('/icons/png/32px/0114-user.png') }}" width="23px" class="img-fluid" alt="Enviar Receita">

                                    
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b>{{ strtoupper(Auth::user()->name) }}</b> <span class="caret"></span>
                                    </a>
                                                                    

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <!--   
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="{{ URL::asset('/icons/png/32px/0277-exit.png') }}" width="23px" class="img-fluid" alt="home">
                                -->
                                    
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            @include('footer')
        </footer>
    </div>
</body>
</html>
