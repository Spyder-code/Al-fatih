
    <!DOCTYPE html>
    <html lang="en">

    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('vendor/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('assets/img/admin.png')}}">
    </head>

    <body id="page-top">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="">
                        Toko Al Fatih
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

            <main>
                <hr>
                    <!-- Page Wrapper -->
        <div id="wrapper">

                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->


                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Fitur
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('home/') }}"><i class="fas fa-fw fa-cog"></i>
                    <span>Laporan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('home/product') }}"><i class="fas fa-fw fa-cog"></i>
                    <span>Product</span>
                    </a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url('home/transaksi/') }}" ><i class="fas fa-fw fa-folder"></i>
                    <span>Transaksi</span>
                    </a>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('home/customer/') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Customer servis</span></a>
                </li>
                <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                </li>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content  ">
                    <div class="container mt-5">
                            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengunjung</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total}}</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Transaksi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tran}}</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Product</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$sepatu}}</div>
                            </div>
                        </div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Pesan Masuk</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$help}}</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Content Row -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                            </div>
                            <div class="card-body">
                                @if ($product<=20 && $product>1)
                            <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    @elseif ($product<=40 && $product>20)
                                    <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        @elseif ($product<=60 && $product>40)
                                        <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            @elseif ($product<=80 && $product>60)
                                        <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            @elseif ($product<=100 && $product>80)
                                        <h4 class="small font-weight-bold">Memori <span class="float-right">{{number_format($product)}}%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{$product}}%" aria-valuenow="{{$product}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                @endif


                            </div>

                    </div>
                                    <!-- Bar Chart -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Grafik Pengunjung</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="myBarChart"></canvas>
                                </div>
                            <hr>Jumlah pengunjung dihitung berdasakan bulan.
                            </div>
                        </div>

                </div>
        </div>



                <script>
                var jan={{ $jan }};
                var feb={{ $feb }};
                var mar={{ $mar }};
                var apr={{ $apr }};
                var mei={{ $mei }};
                var jun={{ $jun }};
                var jul={{ $jul }};
                var aug={{ $aug }};
                var sep={{ $sep }};
                var okt={{ $okt }};
                var nov={{ $nov }};
                var des={{ $des }};

                </script>






    <script src="{{ asset('vendor/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('vendor/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('vendor/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('vendor/js/demo/chart-pie-demo.js') }}"></script>
            <script src="{{asset('assets/js/chart.js')}}"></script>
    {{-- <script src="{{asset('vendor/js/demo/chart-bar-demo.js')}}"></script> --}}

    </body>

    </html>
