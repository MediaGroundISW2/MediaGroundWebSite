<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    
    <link href="/css/theme.min.css" rel="stylesheet" id="style-default">
    
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
          
          
          <div class="content">
            
            <div class="row g-3 mb-3">
              <div class="col-md-6 col-xxl-3">
                <div class="card h-md-100 ecommerce-card-min-width">
                  <div class="card-header pb-0">
                    <h6 class="mb-0 mt-2 d-flex align-items-center">Saldo Disponible</h6>
                  </div>
                  <div class="card-body d-flex flex-column justify-content-end">
                    <div class="row">
                      <div class="col">
                        <p class="font-sans-serif lh-1 mb-1 fs-4">S/. {{Auth::user()->saldo}}</p><span class="badge badge-soft-success rounded-pill fs--2">+9.09%</span>
                      </div>
                      <div class="col-auto ps-0">
                        <div class="echart-bar-weekly-sales h-100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-6 col-xxl-3">
                <div class="card h-md-100">
                  <div class="card-body">
                    <div class="row h-100 justify-content-between g-0">
                      <div class="col-5 col-sm-6 col-xxl pe-2">
                        <h6 class="mt-1">Productos</h6>
                        <div class="fs--2 mt-3">
                          <div class="d-flex flex-between-center mb-1">
                            <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Imágenes</span></div>
                            <div class="d-xxl-none">100%</div>
                          </div>
                          <div class="d-flex flex-between-center mb-1">
                            <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Audio</span></div>
                            <div class="d-xxl-none">0%</div>
                          </div>
                          <div class="d-flex flex-between-center mb-1">
                            <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Video</span></div>
                            <div class="d-xxl-none">0%</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto position-relative">
                        <div class="echart-market-share"></div>
                        <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">1</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="row g-0">
              <div class="col-lg-6 pe-lg-2 mb-3">
                <div class="card h-lg-100 overflow-hidden">
                  <div class="card-header bg-light">
                    <div class="row align-items-center">
                      <div class="col">
                        <h6 class="mb-0">Últimas descargas</h6>
                      </div>
                      <div class="col-auto text-center pe-card">
                        <select class="form-select form-select-sm">
                          <option>Ayer</option>
                          <option>Semana Pasada</option>
                          <option>Mes Pasado</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                      <div class="col ps-card py-1 position-static">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl me-3">
                            <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span class="fs-0 text-primary">M</span></div>
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Mario Clásico</a></h6>
                          </div>
                        </div>
                      </div>
                      <div class="col py-1">
                        <div class="row flex-end-center g-0">
                          <div class="col-auto pe-2">
                            <div class="fs--1 fw-semi-bold">S/. 10</div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                      <div class="col ps-card py-1 position-static">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl me-3">
                            <div class="avatar-name rounded-circle bg-soft-success text-dark"><span class="fs-0 text-success">#</span></div>
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">####</a></h6>
                          </div>
                        </div>
                      </div>
                      <div class="col py-1">
                        <div class="row flex-end-center g-0">
                          <div class="col-auto pe-2">
                            <div class="fs--1 fw-semi-bold">####</div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                      <div class="col ps-card py-1 position-static">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl me-3">
                            <div class="avatar-name rounded-circle bg-soft-info text-dark"><span class="fs-0 text-info">#</span></div>
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">###</a></h6>
                          </div>
                        </div>
                      </div>
                      <div class="col py-1">
                        <div class="row flex-end-center g-0">
                          <div class="col-auto pe-2">
                            <div class="fs--1 fw-semi-bold">###</div>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="#!">Mostrar todas las descargas<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                </div>
              </div>

              <div class="col-lg-6 ps-lg-2 mb-3">
                <div class="card h-lg-100 overflow-hidden">
                  <div class="card-body p-0">
                    <div class="table-responsive scrollbar">
                      <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                        <thead class="bg-light">
                          <tr class="text-900">
                            <th>Productos más vendidos</th>
                            <th class="text-end">Precio</th>
                            <th class="pe-card text-end" style="width: 8rem">Preferencia (%)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="border-bottom border-200">
                            <td>
                              <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/12.png" width="60" alt="" />
                                <div class="flex-1 ms-3">
                                  <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">###</a></h6>
                                  <p class="fw-semi-bold mb-0 text-500">###</p>
                                </div>
                              </div>
                            </td>
                            <td class="align-middle text-end fw-semi-bold">###</td>
                            <td class="align-middle pe-card">
                              <div class="d-flex align-items-center">
                                <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                  <div class="progress-bar rounded-pill" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="fw-semi-bold ms-2">###</div>
                              </div>
                            </td>
                          </tr>
                          <tr class="border-bottom border-200">
                            <td>
                              <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/10.png" width="60" alt="" />
                                <div class="flex-1 ms-3">
                                  <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">###</a></h6>
                                  <p class="fw-semi-bold mb-0 text-500">###</p>
                                </div>
                              </div>
                            </td>
                            <td class="align-middle text-end fw-semi-bold">###</td>
                            <td class="align-middle pe-card">
                              <div class="d-flex align-items-center">
                                <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                  <div class="progress-bar rounded-pill" role="progressbar" style="width: 26%;" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="fw-semi-bold ms-2">###</div>
                              </div>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer bg-light py-2">
                    <div class="row flex-between-center">
                      <div class="col-auto">
                        <select class="form-select form-select-sm">
                          <option>Últimos 7 dias</option>
                          <option>Último mes</option>
                          <option>Último año</option>
                        </select>
                      </div>
                      <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">Ver más</a></div>
                    </div>
                  </div>
                </div>
              </div>
  
            </div>
          
            
          </div>
          
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
      


        <script src="/js/vendors/popper/popper.min.js"></script>
        <script src="/js/vendors/bootstrap/bootstrap.min.js"></script>
        <script src="/js/vendors/anchorjs/anchor.min.js"></script>
        <script src="/js/vendors/echarts/echarts.min.js"></script>
        <script src="/js/vendors/lodash/lodash.min.js"></script>
        <script src="/js/theme.js"></script>
  
</body>
</html>