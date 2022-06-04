<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles  -->
            <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>      
    </head>

    <body class="antialiased">
        <nav class="navbar bg-light fixed-top" style="box-shadow: 0 2px 6px 0 rgb(0 0 0 / 12%), inset 0 -1px 0 0 #dadce0; background-color: #fff">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/mg_logo.png')}}" alt="" width="200" height="50" >
                </a>
            </div>

            @if (Route::has('login'))
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('user.login') }}" class="btn btn-outline-primary">Log in</a>

                        @if (Route::has('user.register'))
                            <a href="{{ route('user.register') }}" class="btn btn-primary" >Register</a>
                        @endif
                    @endauth
                    </div>
            @endif
         
        </nav>


        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('img/welcome/11.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('img/welcome/2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
              
                <div class="carousel-item">
                    <img src="{{ asset('img/welcome/3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </body>
</html>
