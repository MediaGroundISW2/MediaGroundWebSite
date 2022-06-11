<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    
        <link href="{{ asset('css/display.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>   
    </head>
    <body>
    
    <nav class="navbar fixed-top navbar-google">
        <a class="mx-3" href="{{ route('admin.home') }}">
            <img src="{{asset('img/mg_logo.png')}}" alt="" width="170" height="40" >
        </a>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('admin.home') }}" class="btn btn-outline-primary">Regresar</a>
             
            <a href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-primary me-2">
                        {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
       
        </div>
    </nav>

    <div class="main-content">

        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url(/img/admin/profile-cover.jpg); background-size: cover; background-position: center top;">
            <span class="mask bg-gradient-default opacity-8"></span>
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Hola {{$admin->nombre}}!</h1>
                        <p class="text-white mt-0 mb-5">
                            Esta es la página para agregar usuarios. Verifica que la información sea la correcta antes de realizar el envio de los datos.
                        </p>
                    </div>
                    
                </div>
                @if (Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hola {{$admin->nombre}}!</strong> Datos guardados correctamente e invitación enviada.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hola {{$admin->nombre}}!</strong> Verifica los datos ingresados.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

            </div>
            
        </div>

       
            
        <div class="container-fluid mt--7">
              
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="{{ asset('img/admin/profile.jpg') }}" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-info mr-4">Invitación</a>
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                </div>
                            </div>
                        </div>
        
                        <div class="text-center">
                            <h3>Nombre y Apellido </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Arequipa, Perú
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>MediaElements - Inc
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Administrador MediaGround
                            </div>
                            <hr class="my-4" />
                            <p>Nombre — has sido invitado para formar parte del grupo de administradores de MediaGround, accede con tus credenciales y no olvides cambiar la contraseña</p>
                            <a href="#">Usuario: ----</a> <br>
                            <a href="#">Contraseña: ----</a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Añadir Administrador</h3>
                            </div>
                        </div>
                    </div>
        
                    <div class="card-body">
                    
                        <form method="POST" action="{{ route('admin.create') }}">
                           
                            
                            
                            
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Información personal</h6>
                                
                            <div class="pl-lg-4">                                    
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Nombre</label>

                                            <input id="nombre" type="text" class="form-control form-control-alternative @error('nombre') is-invalid @enderror" name="nombre" required>

                                            @error('nombre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Correo electronico</label>

                                            <input id="email" type="text" class="form-control form-control-alternative @error('email') is-invalid @enderror" name="email" required placeholder="admin@example.com">
                                            <!-- VALIDATION --> 
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Apellido Paterno</label>

                                            <input id="apellido_paterno" type="text" class="form-control form-control-alternative @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" required>
                                            <!-- VALIDATION --> 
                                            @error('apellido_paterno')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Apellido Materno</label>
                                            <input id="apellido_materno" type="text" class="form-control form-control-alternative @error('apellido_materno') is-invalid @enderror" name="apellido_materno" required>
                                            <!-- VALIDATION --> 
                                            @error('apellido_materno')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">DNI</label>
                                            <input id="dni" type="text" class="form-control form-control-alternative @error('dni') is-invalid @enderror" name="dni" required >
                                            <!-- VALIDATION --> 
                                            @error('dni')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Telefono</label>
                                            <input id="telefono" type="tel" class="form-control form-control-alternative @error('telefono') is-invalid @enderror" name="telefono" required >
                                            <!-- VALIDATION --> 
                                            @error('telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">Información de la cuenta</h6>
                                
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Nombre de Usuario</label>
                                            
                                            <input id="nombre_usuario" type="text" class="form-control form-control-alternative @error('nombre_usuario') is-invalid @enderror" name="nombre_usuario" value="{{ old('nombre_usuario') }}" required autocomplete="nombre_usuario" >

                                            @error('nombre_usuario')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Salario</label>
                                            
                                            <input id="salario" type="number" class="form-control form-control-alternative @error('salario') is-invalid @enderror" name="salario" required >

                                            @error('salario')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Contraseña</label>
                                            <input id="password" type="password" class="form-control form-control-alternative @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" >
                                            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Repetir Contraseña</label>
                                            <input id="password-confirm" type="password" class="form-control form-control-alternative" name="password_confirmation" required autocomplete="new-password" >
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <hr class="my-4" />
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-info">Guardar Información</button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">MediaGround&copy; 2022</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="{{asset('img/me_logo.png')}}" alt="" width="70" height="50" >
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
        </footer>
      </div>
    </body>

</html>


<!-- <div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $admin->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $admin->email, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

-->