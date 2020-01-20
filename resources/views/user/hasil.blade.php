@extends('layouts.user.main')
@section('title','Product')
@section('main')
<div class="container-fluid mt-2">
    <div class="card">
        <div class="row">
            @foreach ($tas as $tas)
            <div class=" col col-sm-4">
                <div class="card ml-5 mr-5 mt-5 mb-5" style="width: 20rem;">
                        <img src="assets/{{ $tas->image }}" class=" img-thumbnail"  style="height:300px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tas-> nama }}</h5>
                            <p class="card-text">{{ $tas->deskripsi }}</p>
                        <a href="belanja/{{$tas->id}}" class="btn btn-primary">Rp. {{ $tas->harga }}</a>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

