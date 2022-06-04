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
                                <img src="{{ asset('img/login/registrarse_portada.png') }}" class="image">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <h2 class="text-center fw-bold">{{ __('Registrarse') }}</h2>

                            <form method="POST" action="{{ route('user.create') }}">
                                @if (Session::get('success'))
                                <div class="alert alert-success">{{ Session::get('success')}}</div>
                                @endif
                                @if (Session::get('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail')}}</div>
                                @endif
                            @csrf
                            <div class="px-2">
                                <label class="mb-1" for="nombre"><h6 class="mb-0 fw-bold">{{ __('Nombre') }}</h6></label>
                                <input id="nombre" type="text" class="mb-4 input_text @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" >

                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="px-2">
                                <label for="apellido_paterno" class="mb-1"><h6 class="mb-0 fw-bold">{{ __('Apellido Paterno') }}</h6></label>
                                <input id="apellido_paterno" type="text" class="mb-4 input_text @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{ old('apellido_paterno') }}" required autocomplete="apellido_paterno">
                                <!-- VALIDATION --> 
                                @error('apellido_paterno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="px-2">
                                <label for="apellido_materno" class="mb-1"><h6 class="mb-0 fw-bold">{{ __('Apellido Materno') }}</h6></label>
                                <input id="apellido_materno" type="text" class="mb-4 input_text @error('apellido_materno') is-invalid @enderror" name="apellido_materno" value="{{ old('apellido_materno') }}" required autocomplete="apellido_materno" >
                                <!-- VALIDATION --> 
                                @error('apellido_materno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="px-2">
                                <label for="dni" class="mb-1"><h6 class="mb-0 fw-bold">{{ __('DNI') }}</h6></label>
                                <input id="dni" type="text" class="mb-4 input_text @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" >
                                <!-- VALIDATION --> 
                                @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="px-2">
                                <label for="email" class="mb-1"><h6 class="mb-0 fw-bold">{{ __('Correo Electrónico') }}</h6></label>
                                <input id="email" type="text" class="mb-4 input_text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                <!-- VALIDATION --> 
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="px-2">
                                <label for="nombre_usuario" class="mb-1"><h6 class="mb-0 fw-bold">{{ __('Nombre de Usuario') }}</h6></label>

                                <input id="nombre_usuario" type="text" class="mb-4 input_text @error('nombre_usuario') is-invalid @enderror" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autocomplete="nombre_usuario" >

                                @error('nombre_usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="px-2">
                                <label for="password" class="mb-1"><h6 class="mb-0 fw-bold">{{ __('Contraseña') }}</h6></label>
                                <input id="password" type="password" class="mb-4 input_text @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" >
                                <!-- VALIDATION --> 
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="px-2">
                                <label for="password-confirm" class="mb-1"><h6 class="mb-0 fw-bold">{{ __('Confirmar Contraseña') }}</h6></label>
                                <input id="password-confirm" type="password" class="mb-4 input_text" name="password_confirmation" required autocomplete="new-password" >
                                <!-- VALIDATION --> 
                            </div>

                            <div class="mb-1 px-3">
                                <button type="submit" class="btn btn-blue text-center">Registrarse</button>
                            </div>

                          
                            <div class="row mb-1 px-3">
                                <small class="fw-bold col-3"><a class="text-danger" href="{{ route('user.login') }}">Iniciar Sesión</a></small>
                            </div>
                            
                            <div class="row px-3 mb-3">
                                <div class="line"></div>
                                <small class="or text-center">Or</small>
                                <div class="line"></div>
                            </div>

                            <div class="row align-items-start px-3">
                                <h6 class="col-md-4 mr-4 mt-2 fw-bold">Registrarse con: </h6>
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

                <div class="bg-blue py-3">
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