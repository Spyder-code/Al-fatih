@extends('layouts.user.main')
@section('title','Detail Transaksi')
@section('main')
<div class="card mt-5">
    <div class="container mt-5 mb-5" >
        <div class="row">
                <div class="col">
                    <div class="card text-center" >
                        @foreach ($tran as $tran)
                        <h3 class="mt-3"> {{$tran->merk}}</h3>
                        <h4 class="mt-3"> {{$tran->bar}}</h4>
                        <p>{{$tran->deskripsi}}</p>
                        <img class="img-thumbnail" style="height:350px" src="{{asset('assets/img/'.$tran->image)}}" alt="">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Ukuran {{ $tran->ukuran }}</b></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header"><h4>Detail Transaksi</h4></div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Atas nama :</b> {{ $tran->nama }}</li>
                                <li class="list-group-item"><b>Email :</b> {{ $tran->email }}</li>
                                <li class="list-group-item"><b>Nomor :</b> {{ $tran->nomor }}</li>
                                <li class="list-group-item"><b>Alamat :</b> {{ $tran->alamat }}</li>
                            </ul>
                            <div class="card-footer">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>Harga :</b> Rp. {{ number_format($tran->harga,2) }}</li>
                                    <li class="list-group-item"><b>Jumlah :</b>   {{$tran->jumlah}}</li>
                                    <li class="list-group-item"><b>Total :</b> Rp. {{ number_format($tran->total,2) }}</li>
                                </ul>
                            </div>
                            @endforeach
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
