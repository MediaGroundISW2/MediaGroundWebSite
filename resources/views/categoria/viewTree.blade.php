
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
                        <h1 class="display-2 text-white">Hola 
                            
                            !</h1>
                        <p class="text-white mt-0 mb-5">
                            Esta es la página para agregar usuarios. Verifica que la información sea la correcta antes de realizar el envio de los datos.
                        </p>
                    </div>
                    
                </div>
         

            </div>
            
        </div>

       
        <div class="container-fluid mt-4">

@foreach ($categories as $category)
    <x-category-item :category="$category" />
@endforeach
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