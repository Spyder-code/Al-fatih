    <!doctype html>
    <html lang="en">
    <head>
                <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156549225-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-156549225-1');
            </script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Required meta tags -->

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/logo1.png')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        {{--  awal crousel  --}}

        <div class="jumbotron jumbotron-fluid bg-primary">
                <div class="container text-center">
                    <img src="{{asset('assets/img/logo1.png')}}" width="320" height="250" class="rounded-circle">
                <p  style="color:white;">Toko sepatu Al-fatih adalah toko sepatu online yang menjual
                    produk sepatu grosiran. Toko ini merupakan reseller
                    produk sepatu di Kota Mojokerto, Propinsi Jawa Timur.</p>
                </div>
            </div>

        {{--  akhir crousel  --}}
                    <nav class="navbar navbar-expand-lg navbar-light" style="color:white">
                            <a class="navbar-brand" href="#">Toko Al Fatih</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item  ml-5 mr-5">
                                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown ml-5 mr-5">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kategori
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('pria/') }}">Pria </a>
                                        <a class="dropdown-item" href="{{ url('wanita/') }}">Wanita</a>
                                        <a class="dropdown-item" href="{{ url('anak/') }}">Anak-anak</a>
                                    </div>
                                </li>
                                <li class="nav-item ml-5 mr-5">
                                <a class="nav-link" href="{{ url('about/') }}">Pembayaran</a>
                                </li>
                                <li class="nav-item ml-5 mr-5">
                                <a class="nav-link" href="{{ url('help/') }}" >Kontak Kami</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0" method="get" action="{{ url('hasil-pencarian') }}">
                                <input class="form-control mr-sm-2" type="search" placeholder="Cari Berdasarkan (Merk, Warna, Kode barang)" name="cari" style="width:330px;">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            </div>
                        </nav>
        @yield('main')

        <footer class="bg-primary">
                <div class="mt-5 pt-5 pb-5 footer">
                        <div class="container">
                        <div class="row" style="color:white;">
                            <div class="col-lg-6 col-xs-12 about-company">
                                <h2>Produk Sepatu Mojokerto</h2>
                                <p class="pr-5 text-white-50">Penjualan Produk Sepatu Grosiran maupun eceran. </p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.9383687307532!2d112.42210202913911!3d-7.49244847000745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7813086548b7a5%3A0x958432f3cc11b80f!2sToko%20sepatu%20Al%20fatih!5e0!3m2!1sen!2sid!4v1579158688351!5m2!1sen!2sid"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                            <div class="col-lg-6 col-xs-12 location">
                                <h2 class="mt-lg-0 mt-5">Location</h2>
                                <p>Toko Alfatih</p>
                                <p>Pekuncen Gg 2 no 23, Kelurahan Surodinawan, Kecamatan Prajurit Kulon, Kota Mojokerto, Jawa Timur</p>
                                <p> Tlp. 085731240971</p>
                                <p> Wa. 085731240971</p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col copyright">
                            <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                            </div>
                        </div>
                        </div>
                        </div>
    </footer>

        <!-- Optional JavaScript -->
        <script src="{{asset('assets/js/image.js')}}"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
