<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
     <link href="/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
   
    <link href="{{ asset('css/display.css') }}" rel="stylesheet">
</head>
<body>

    <nav class="navbar fixed-top navbar-google">
        <a class="mx-3" href="{{ route('admin.home') }}">
            <img src="{{asset('img/mg_logo.png')}}" alt="" width="170" height="40" >
        </a>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
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

    <!-- Header -->
    <div class="header pb-8 pt-5 pt-md-8" >
        
        <div class="container-fluid">
          <div class="header-body">
            <!-- Card stats -->
            <div class="row">
              <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Contenidos</h5>
                        <span class="h2 font-weight-bold mb-0">10</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                          <i class="fas fa-chart-bar"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 2.05 %</span>
                      <span class="text-nowrap">Desde el último mes</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Ventas</h5>
                        <span class="h2 font-weight-bold mb-0">0</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                          <i class="fas fa-chart-pie"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 0 %</span>
                      <span class="text-nowrap">Desde la última semana</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Nuevos usuarios</h5>
                        <span class="h2 font-weight-bold mb-0">1</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                      <span class="text-nowrap">Desde ayer</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Rendimiento</h5>
                        <span class="h2 font-weight-bold mb-0">1 %</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                          <i class="fas fa-percent"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 0%</span>
                      <span class="text-nowrap">Desde el último mes</span>
                    </p>
                  </div>
                </div>

                
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container-fluid mt--7">

        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <h3 class="mb-0">Explorar</h3>
                    </div>
                    <div class="card-body">
                        <div class="row icon-examples">
                            <div class="col-lg-3 col-md-6">
                                <a  href="{{ route('admin.edit',Auth::guard('admin')->user()->id) }}" type="button" class="btn-icon-clipboard">
                                <div>
                                    <i class="ni ni-circle-08"></i>
                                    <span>Invitar Administradores</span>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <button type="button" class="btn-icon-clipboard">
                                <div>
                                    <i class="ni ni-archive-2"></i>
                                    <span>Administrar de Contenidos</span>
                                </div>
                                </button>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <button type="button" class="btn-icon-clipboard" >
                                <div>
                                    <i class="ni ni-collection"></i>
                                    <span>Categorías</span>
                                </div>
                                </button>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <button type="button" class="btn-icon-clipboard">
                                <div>
                                    <i class="ni ni-trophy"></i>
                                    <span>Administrar de Promociones</span>
                                </div>
                                </button>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <button type="button" class="btn-icon-clipboard">
                                <div>
                                    <i class="ni ni-badge"></i>
                                    <span>Autores</span>
                                </div>
                                </button>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <button type="button" class="btn-icon-clipboard">
                                <div>
                                    <i class="ni ni-folder-17"></i>
                                    <span>Información Clientes</span>
                                </div>
                                </button>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <button type="button" class="btn-icon-clipboard">
                                <div>
                                    <i class="ni ni-like-2"></i>
                                    <span>Calificaciones de los contenidos</span>
                                </div>
                                </button>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <button type="button" class="btn-icon-clipboard">
                                <div>
                                    <i class="ni ni-chart-bar-32"></i>
                                    <span>Rankings</span>
                                </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br><br>

        <div class="row">
          <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card bg-gradient-default shadow">
              <div class="card-header bg-transparent">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="text-uppercase text-light ls-1 mb-1">Resumen</h6>
                    <h2 class="text-white mb-0">Ingresos</h2>
                  </div>
                  <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                      <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="S/." data-suffix="">
                        <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                          <span class="d-none d-md-block">Mes</span>
                          <span class="d-md-none">M</span>
                        </a>
                      </li>
                      <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="S/." data-suffix="">
                        <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                          <span class="d-none d-md-block">Semana</span>
                          <span class="d-md-none">W</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                  <!-- Chart wrapper -->
                  <canvas id="chart-sales" class="chart-canvas"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card shadow">
              <div class="card-header bg-transparent">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Contenidos Comprados</h6>
                    <h2 class="mb-0">Total</h2>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                  <canvas id="chart-orders" class="chart-canvas"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card shadow">
              <div class="card-header border-0">
                <div class="row align-items-center">
                  <div class="col">
                    <h3 class="mb-0">Ranking de contenidos comprados</h3>
                  </div>
                  <div class="col text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Ver más<samp></samp></a>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Nombre del contenido</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">Ganancias</th>
                      <th scope="col">Porcentaje</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <tr>
                      <th scope="row">
                        mario.jpg
                      </th>
                      <td>
                        1
                      </td>
                      <td>
                        1
                      </td>
                      <td>
                        <i class="fas fa-arrow-down text-danger mr-3"></i> 0%
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card shadow">
              <div class="card-header border-0">
                <div class="row align-items-center">
                  <div class="col">
                    <h3 class="mb-0">Compras por categoría</h3>
                  </div>
                  <div class="col text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Ver más</a>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Contenido</th>
                      <th scope="col">Compras</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        Imágenes
                      </th>
                      <td>
                        1
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="mr-2">1%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        Música
                      </th>
                      <td>
                        0
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="mr-2">0%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        Video
                      </th>
                      <td>
                        0
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="mr-2">0%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                   
                  </tbody>
                </table>
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

    <script src="/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <!--   Optional JS   -->
    <script src="/js/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="/js/plugins/chart.js/dist/Chart.extension.js"></script>
    <script src="/js/plugins/clipboard/dist/clipboard.min.js"></script>
    <!--   Argon JS   -->
    <script src="/js/plugins/argon-dashboard.min.js"></script>
</body>
</html>

