<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/login.css') }}" rel="stylesheet">

        <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>      
    </head>
    
    <body>
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-4 mx-auto">
            <div class="card card0 border-0">
                
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <div class="row">
                                <a href=""{{ url('/home') }}">
                                    <img src="{{ asset('img/mg_logo.png') }}" class="logo">
                                </a>
                            </div>
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                                <img src="{{ asset('img/login/portada.webp') }}" class="image">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <h2 class="text-center fw-bold">{{ __('Iniciar Sesión Admin') }}</h2>

                            <form method="POST" action="{{ route('admin.check') }}">
                            @if (Session::get('fail'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{ Session::get('fail')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                            @endif
                            @csrf
                            <div class="px-2">
                                <label class="mb-1" for="nombre_usuario"><h6 class="mb-0 fw-bold">{{ __('Nombre de Usuario') }}</h6></label>
                                <input id="nombre_usuario" type="text" class="mb-4 input_text @error('nombre_usuario') is-invalid @enderror" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autocomplete="nombre_usuario" >
                                
                                @error('nombre_usuario')
                                    <span class="mb-0 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="px-2">
                                <label class="mb-1"><h6 class="mb-0 fw-bold">{{ __('Contraseña') }}</h6></label>
                                <input id="password" type="password" class=" input_text form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="px-3 mb-1">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Recordar</label>

                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    
                                </div>
                            </div>

                            <div class="mb-1 px-3">
                                <button type="submit" class="btn btn-blue text-center">Login</button>
                            </div>

                          
                            <div class="row mb-1 px-3">
                                <a href="{{ route('password.request') }}" class="col">Olvido su contraseña?</a>
                                <small class="fw-bold col-3"><a class="text-danger" href="{{ route('user.register') }}">Registrarse</a></small>
                            </div>
                            
                            <div class="row px-3 mb-3">
                                <div class="line"></div>
                                <small class="or text-center">Or</small>
                                <div class="line"></div>
                            </div>

                            <div class="row align-items-start px-3">
                                <h6 class="col-md-3 mr-4 mt-2 fw-bold">Acceda con: </h6>
                                <div class="facebook text-center ms-2">
                                    <div class="fab fa-facebook-f"></div>
                                </div>
                                <div class="twitter text-center ms-2">
                                    <div class="fab fa-twitter"></div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="bg-blue py-3 footer">
                    <div class="row px-3">
                        <small class="col ml-4 ml-sm-5 mb-2">Copyright &copy; 2022. MediaGround | MediaElements</small>
                        <div class="col-1 social-contact ml-4 ml-sm-auto">
                            <span class="fab fa-facebook mr-4 text-sm"></span>
                            <span class="fab fa-google-plus mr-4 text-sm"></span>
                            <span class="fab fa-twitter mr-4 mr-sm-5 text-sm"></span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>

</html>