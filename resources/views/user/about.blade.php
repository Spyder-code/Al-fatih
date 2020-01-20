@extends('layouts.user.main')
@section('title','About')
@section('main')

<div class="container text-center mt-5">
    <div class="row">
        <div class="col col-12">
            <h1>PEMBAYARAN</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card" style="height:470px;">
                <div class="card-header">
                    <h3>Bayar</h3>
                    <h3> Langsung</h3>
                </div>
                <div class="card-body">
                    <p>Setelah anda melakukan transaksi akan ada konfirmasi pembayaran, anda dapat
                        membayar atas persetujuan bersama atau anda dapat langsung berkunjung ke toko kami.
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.9383687307532!2d112.42210202913911!3d-7.49244847000745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7813086548b7a5%3A0x958432f3cc11b80f!2sToko%20sepatu%20Al%20fatih!5e0!3m2!1sen!2sid!4v1579158688351!5m2!1sen!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="height:470px;">
                <div class="card-header">
                    <h3>Transfer</h3>
                    <h3>Bank</h3>
                </div>
                <div class="card-body">
                    <p>Anda dapat melakukan transaksi pembayaran online lewat bank. Setelah konfirmasi pembayaran
                        anda akan dapat nomor rekening tujuan. </p>
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('assets/img/bri.jpg')}}">
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/img/bni.jpg')}}">
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/img/bca.jpg')}}">
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/img/mandiri.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

