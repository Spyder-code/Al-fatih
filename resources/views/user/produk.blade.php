@extends('layouts.user.main')
@section('title','Product')
@section('main')
<div class="container-fluid mt-2"><br>
    @if(session('status'))
    <div class="alert alert-success text-center"><h1>Terima Kasih</h1><br>
        <h2>{{ session('status') }}</h2>
    </div>
    @endif
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="alert alert-primary">
                    <h3>Temukan produk sepatu yang anda cari disini!</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
    <div class="col">
        <div class="card" style="background-color:aliceblue">
            <div class="row mt-2">
                @foreach ($tas as $pro)
                @if ($pro->merk == 'Armas')
                        <div class="col col-lg-3">
                            <div class="card ml-2 mb-5 mr-2" >
                                <div class="card-header float-right bg-primary" style="color:white">Upload on {{date("d, F Y",strtotime($pro->created_at))}}</div>
                                <img src="assets/img/{{ $pro->image }}" class=" img-thumbnail" style="height:300px;">
                                <div class="card-body">
                                    <h3 class="card-title text-center">{{$pro->merk}}</h3>
                                    <h4 class="card-title text-center">{{ $pro->nama }}</h4>
                                    <p class="card-text text-center">({{ $pro->deskripsi }})</p>
                                    <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>Ukuran {{ $pro->ukuran }}   (Rp. {{ number_format($pro->harga_satuan,2) }}) /Lusin</b></li>
                                        @if ($pro->ukuran2 !='')
                                        <li class="list-group-item mb-3"><b>Ukuran {{ $pro->ukuran2 }}   (Rp. {{ number_format($pro->harga_kodi,2) }}) /Lusin</b></li>
                                        @endif
                                        @if ($pro->ukuran3 !='')
                                        <li class="list-group-item mb-3"><b>Ukuran {{ $pro->ukuran3 }}   (Rp. {{ number_format($pro->harga_lusin,2) }}) /Lusin</b></li>
                                        @endif
                                    </ul>
                                    <a href="belanja/{{$pro->id}}" class="btn btn-primary">Beli</a>
                                    <a href="https://wa.me/6285731240971?text=Saya%20mau%20pesan%20sepatu%20{{$pro->nama}}%20http://www.sepatualfatih.online/assets/img/{{$pro->image}}" class="btn btn-success d-inline">WhatsApp</a>
                                </div>
                            </div>
                        </div>
                        @else

                <div class="col col-lg-3">
                    <div class="card ml-2 mb-5 mr-2">
                        <div class="card-header float-right bg-primary">Upload on {{date("d, F y",strtotime($pro->created_at))}}</div>
                        <img src="assets/img/{{ $pro->image }}" class=" img-thumbnail" style="height:300px;">
                        <div class="card-body">
                            <h3 class="card-title text-center">{{$pro->merk}}</h3>
                            <h4 class="card-title text-center">{{ $pro->nama }}</h4>
                            <p class="card-text text-center">({{ $pro->deskripsi }})</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Ukuran {{ $pro->ukuran }}</b></li>
                                <li class="list-group-item"><b>Rp. {{ number_format($pro->harga_satuan,2) }} /10 Pasang</b></li>
                                <li class="list-group-item mb-3"><b>Rp. {{ number_format($pro->harga_kodi,2) }} /Kodi</b></li>
                            </ul>
                        <a href="belanja/{{$pro->id}}" class="btn btn-primary">Beli</a>
                        <a href="https://wa.me/6285731240971?text=Saya%20mau%20pesan%20sepatu%20{{$pro->nama}}%20http://www.sepatualfatih.online/assets/img/{{$pro->image}}" class="btn btn-success d-inline">WhatsApp</a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col col-12">
                            <h3> {{ $tas->links() }}</h3>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
@endsection

