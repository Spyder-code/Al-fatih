@extends('layouts.admin.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

            <div class="card">

                    @foreach ($product as $product)

                    @if ($product->merk == 'Armas')
                    <div class="card-header">
                        {{ $product->nama }}
                    </div>
                        <img alt="{{$product->nama}}" src="assets/img/{{ $product->image }}" class=" img-thumbnail" style="height:300px;">
                        <div class="card-body">
                            <h3 class="card-title text-center">{{$product->merk}}</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>{{$product->deskripsi}}</b></li>
                                <li class="list-group-item"><b>Bahan {{$product->bahan}}</b></li>
                                <li class="list-group-item"><b>Ukuran {{ $product->ukuran }}   (Rp. {{ number_format($product->harga_satuan,2) }}) /Lusin</b></li>
                                    @if ($product->ukuran2 !='')
                                    <li class="list-group-item mb-3"><b>Ukuran {{ $product->ukuran2 }}   (Rp. {{ number_format($product->harga_kodi,2) }}) /Lusin</b></li>
                                    @endif
                                    @if ($product->ukuran3 !='')
                                    <li class="list-group-item mb-3"><b>Ukuran {{ $product->ukuran3 }}   (Rp. {{ number_format($product->harga_lusin,2) }}) /Lusin</b></li>
                                    @endif
                                </ul>
                    @else

                <div class="card-header">
                    {{ $product->nama }}
                </div>
                    <img alt="{{$product->nama}}" src="assets/img/{{ $product->image }}" class=" img-thumbnail" style="height:300px;">
                    <div class="card-body">
                        <h3 class="card-title text-center">{{$product->merk}}</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>{{$product->deskripsi}}</b></li>
                            <li class="list-group-item"><b>Bahan {{$product->bahan}}</b></li>
                            <li class="list-group-item"><b>Sol {{$product->sol}}</b></li>
                            <li class="list-group-item"><b>Ukuran {{ $product->ukuran }}</b></li>
                            <li class="list-group-item"><b>Rp. {{ number_format($product->harga_satuan,2) }} /10 Pasang</b></li>
                            <li class="list-group-item mb-3"><b>Rp. {{ number_format($product->harga_kodi,2) }} /Kodi</b></li>
                        </ul>
                        @endif
                        @endforeach
            </div>

        </div>
        <a href="{{ url('home/product') }}" class="btn btn-primary mt-2 mb-5">Kembali</a>
        </div>
    </div>
@endsection
