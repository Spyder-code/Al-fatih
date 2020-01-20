@extends('layouts.user.main')
@section('title','Transaksi')
@section('main')
    <div class="card text-white bg-success mb-3 text-center" style="max-width: 30rem;">
        <div class="card-header">Transaksi</div>
        <div class="card-body">
        <h5 class="card-title">{{$tran->nama}}</h5>
        <ul>
            <li>Alamat           : {{ $tran->alamat }}</li>
            <li>Total Pembayaran :{{ $tran->total }}</li>
        </ul>
        </div>
        <a class="btn btn-success" href="user.berhasil"></a>
    </div>
@endsection

