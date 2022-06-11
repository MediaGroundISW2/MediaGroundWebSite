<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    
<style>
    figure {
    display: inline-block;
    height: 100px;
    margin: 25px;
}
figcaption {
    font-style: oblique;
    text-align: center;
    margin: 10px 0px;
    color: hsl(0, 0%, 67%);
}
.imagen img {
    max-width: 100%;
    cursor: pointer;
}
.modalImg {
    cursor: pointer;
    border-radius: 0.4rem;
    max-height: 200px;
}
.imodalImg:hover {
    opacity: 0.8;
}
.modal {
    display: none;
    /* ocultar por defecto */
    position: fixed;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    border: solid 1px;
    background: rgba(0, 0, 0, 0.9);
    padding-top: 5%;
    overflow: hidden;
}
#modalImg {
    display: block;
    position: fixed;
    width: auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);   
}
#modalClose {
    position: absolute;
    cursor: pointer;
    top: 30px;
    right: 50px;
    color: #fff;
    transition: all;
    font-weight: bold;
    font-size: 5rem;
}
#modalText {
    margin: auto;
    display: block;
    text-align: center;
    color: #ccc;
}
/* animaciones */
#modalText {
    animation-name: zoom;
    animation-duration: 0.5s;
}

@keyframes zoom {
    from {
        transform: scale(0)
    }
    to {
        transform: scale(1)
    }
}
</style>

<script>
    /* Modal Images 0.1
 * add modal Images to you page
 * To use this script, only need add attribute class="modalImg" to img elements and add this script into your <head>  
 * @author Jose Luis Rojo <jose@artegrafico.net> */

window.addEventListener('load', () => {

// create the parent element <div id="modal">
let modal = document.createElement("div");
modal.setAttribute('id', 'modal');
modal.setAttribute('class', 'modal');

// create the child element <div id="modalClose">
let modalClose = document.createElement('div');
modalClose.setAttribute('id', 'modalClose');
modalClose.innerHTML = "&times;";

// create the child element <img>
let modalImg = document.createElement('img');
modalImg.setAttribute('id', 'modalImg');

// create the child element <div id="modalText"
let modalText = document.createElement('div');
modalText.setAttribute('id', 'modalText');

// open node elements
document.body.append(modal);
modal.appendChild(modalClose);
modal.appendChild(modalImg);
modal.appendChild(modalText);

// find all elements with class modalImg
let imgList = document.querySelectorAll(".modalImg"),
  i;
for (const img of imgList) {
  // add event click to show modal and add src attribute
  img.addEventListener('click', () => {
    modal.style.display = "block";
    modalImg.src = img.src;
    modalText.innerHTML = img.alt;
  });
}

// event, hide modal if user click modalClose "x"
modalClose.addEventListener("click", function() {
  modal.style.display = "none";
})
// event, hide modal if user click on the modal 
modal.addEventListener("click", function() {
  modal.style.display = "none";
})
})
</script>
</head>
<body>
    <div id="app">
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
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url(/img/admin/profile-cover.jpg); background-size: cover; background-position: center top;">
        <span class="mask bg-gradient-default opacity-8"></span>
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Hola !</h1>
                    <p class="text-white mt-0 mb-5">
                        Esta es la página del administrador. Verifica que la información sea la correcta antes de realizar el envio de los datos.
                    </p>
                </div>
                
            </div>
            @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hola !</strong> Datos guardados correctamente e invitación enviada.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hola !</strong> Verifica los datos ingresados.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

        </div>
        
    </div>
        <main class="py-4 my--7">
            @yield('content')
        </main>
    </div>
</body>
</html>
