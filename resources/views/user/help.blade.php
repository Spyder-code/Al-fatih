@extends('layouts.user.main')
@section('title','Help')
@section('main')

<div class="container mt-2">
    <div class="row text-center">
        <div class="col">
            <div class="alert alert-secondary">
                <h2>Tulis sesuatu yang ingin anda tanyakan atau anda sarankan pada form dibawah!</h2>
            </div>
        </div>
    </div>
        <div class="card bg-gradient-primary mt-5 mb-5 ml-5 mr-5" style="height:500px;">
    <div class="row">
        <div class="col col-sm-12">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form class="mt-5 mb-5 ml-5 mr-5" method="post">
                    @csrf
                        <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Subjek</label>
                        <input type="text" class="form-control @error ('subjek') is-invalid @enderror" id="subjek" name="subjek" placeholder="Asking">
                        @error('subjek') <div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pesan</label>
                        <textarea class="form-control @error ('pesan') is-invalid @enderror" id="pesan" name="pesan" rows="3" placeholder="Isi pesan"></textarea>
                        @error('pesan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                        <button type="submit" class="btn btn-success">Kirim</button>
                        </form>
        </div>
    </div>
</div>
</div>
@endsection

