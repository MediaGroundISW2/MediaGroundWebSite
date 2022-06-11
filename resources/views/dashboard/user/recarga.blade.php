<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="/css/theme.min.css" rel="stylesheet" id="style-default">
    <script src="{{ asset('js/app.js') }}" defer></script>  
    <style>
        .navbar-google
        {
          box-shadow: 0 2px 6px 0 rgb(0 0 0 / 12%), inset 0 -1px 0 0 #dadce0; 
          background-color: #fff;
        }
        
        </style>
        <script>
            var isRTL = JSON.parse(localStorage.getItem('isRTL'));
            if (isRTL) {
              var linkDefault = document.getElementById('style-default');
              var userLinkDefault = document.getElementById('user-style-default');
              linkDefault.setAttribute('disabled', true);
              userLinkDefault.setAttribute('disabled', true);
              document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
              var linkRTL = document.getElementById('style-rtl');
              var userLinkRTL = document.getElementById('user-style-rtl');
              linkRTL.setAttribute('disabled', true);
              userLinkRTL.setAttribute('disabled', true);
            }
          </script>
</head>
<body>

    <nav class="navbar fixed-top navbar-google">
        <a class="mx-3" href="{{ route('user.home') }}">
            <img src="{{asset('img/mg_logo.png')}}" alt="" width="170" height="40" >
        </a>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('user.recarga') }}" class="btn btn-outline-primary">Recarga</a>
             
            <a href="{{ route('user.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-primary me-2">
                        {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
       
        </div>
    </nav>

    <main class="main my-7" id="top">
        <div class="container" data-layout="container">
          <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
              var container = document.querySelector('[data-layout]');
              container.classList.remove('container');
              container.classList.add('container-fluid');
            }
          </script>
         
          <div class="content">
            
            <div class="card mb-3">
              <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(/img/user/corner-4.png);">
              </div>
  
              <div class="card-body position-relative">
                <div class="row">
                  <div class="col-lg-8">
                    <h3>Todo comienza con su recarga</h3>
                    <p class="mt-2">Todo tipo de contenidos disponibles<br/>Imágenes - Audio - Video</p>
                    
                  </div>
                </div>
              </div>
              
            </div>
            @if (Session::get('fail'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy {{Auth::user()->nombre}}!</strong> {{ Session::get('fail')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (Session::get('fail_ins'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy {{Auth::user()->nombre}}!</strong> {{ Session::get('fail_ins')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hola  {{Auth::user()->nombre}}!</strong> {{Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="POST" action="{{ route('user.make_recarga') }}">
                @csrf
            <div class="row g-3 mb-3">
              <div class="col-lg-8">
                <div class="card h-100">
                  <div class="card-header">
                    <h5 class="mb-0">Detalles de Pago</h5>
                  </div>
                  <div class="card-body bg-light">
                    <div class="form-check mb-0">
                      <input class="form-check-input" type="radio" value="" id="credit-card" checked="checked" name="billing" />
                      <label class="form-check-label d-flex align-items-center mb-0" for="credit-card"><span class="fs-1 text-nowrap">Tarjetas de Credito</span><img class="d-none d-sm-inline-block ms-2 mt-lg-0" src="/img/user/icon-payment-methods.png" height="20" alt="" />
                      </label>
                    </div>
                    <p class="fs--1 mb-4">Transferencia segura de dinero utilizando sus cuentas bancarias. Visa, maestro, discover, american express.</p>
                    
                    <div class="row gx-3 mb-3">
                      <div class="col">
                        <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cardNumber">Número de Tarjeta</label>
                        <input class="form-control" id="numero_tarjeta" name="numero_tarjeta" placeholder="XXXX XXXX XXXX XXXX" type="text" required/>
                      </div>
                      <div class="col">
                        <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cardName">Nombre del Propietario</label>
                        <input class="form-control" id="nombre_propietario" name="nombre_propietario" type="text" required/>
                      </div>
                    </div>
                    <div class="row gx-3">
                      
                      
                      
                      <div class="col-6 col-sm-3">
                        <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="expDate">Exp Date</label>
                        <input class="form-control" id="fecha_expiracion" name="fecha_expiracion" placeholder="15/2024" type="date" required/>
                      </div>
                      <div class="col-6 col-sm-3">
                        <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cvv">CVV<span class="ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Card verification value"><span class="fa fa-question-circle"></span></span></label>
                        <input class="form-control" id="CVV" name="CVV" placeholder="123" maxlength="3" pattern="[0-9]{3}" type="text" required/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card h-100">
                  <div class="card-header">
                    <h5 class="mb-0">Monto</h5>
                  </div>
                  <div class="card-body bg-light">
                    <label class="form-label ls text-uppercase text-600 fw-semi-bold mb-0 fs--1" for="cardName">Monto de la Recarga</label>
                    <input class="form-control" id="saldo" name="saldo" type="number" required/>
                    
                    <hr />
                    <h5 class="d-flex justify-content-between"><span>Total</span><span>$0.00</span></h5>
                    <p class="fs--1 text-600">Una vez que confirme los datos, se realizará el descuenta de su cuenta bancaria y recibira un ticket de pago en su correo electrónico</p>
                    <button class="btn btn-primary d-block w-100" type="submit"><span class="fa fa-lock me-2"></span>Pagar</button>
                    <div class="text-center mt-2"><small class="d-inline-block">Al continuar, está aceptando nuestras condiciones y términos de pago.</small></div>
                  </div>
                </div>
              </div>
            </div>
            </form>
            
        </div>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center   border-top">
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
      </main>
      <script src="/js/vendors/fontawesome/all.min.js"></script>
</body>
</html>