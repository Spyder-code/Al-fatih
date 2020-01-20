@extends('layouts.user.main')
@section('title','Belanja')
@section('main')
<div class="card mt-5">
    <div class="container mt-5 mb-5" >
        <div class="row">
                <div class="col">
                    <div class="card text-center" >
                            <h4 class="mt-3">{{$product->merk}} {{$product->nama}}</h4>
                            <p>{{$product->deskripsi}}</p>
                            <img class="img-thumbnail" src="{{asset('assets/img/'.$product->image)}}" alt="">
                    </div>
                </div>
                <div class="col" >
                    @if ($product->merk=='Armas')
                    <div class="card">
                        <form method="post" action="{{$product->id}}" class="mt-2 mb-2">
                                @csrf
                                <li class="list-group-item text-center"><b>Ukuran {{ $product->ukuran }}   (Rp. {{ number_format($product->harga_satuan,2) }}) /Lusin</b></li>
                                        @if ($product->ukuran2 !='')
                                        <li class="list-group-item text-center"><b>Ukuran {{ $product->ukuran2 }}   (Rp. {{ number_format($product->harga_kodi,2) }}) /Lusin</b></li>
                                        @endif
                                        @if ($product->ukuran3 !='')
                                        <li class="list-group-item text-center"><b>Ukuran {{ $product->ukuran3 }}   (Rp. {{ number_format($product->harga_lusin,2) }}) /Lusin</b></li>
                                        @endif
                                    </ul>
                                <div class="row text-center">
                                    <div class="col ml-5 mr-5 mt-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Ukuran</label>
                                            <select class="form-control" name="ukuran">
                                                <option value="Pria">{{$product->ukuran}}</option>
                                                @if ($product->ukuran2 !='')
                                                <option value="Pria">{{$product->ukuran2}}</option>
                                                @endif
                                                @if ($product->ukuran3 !='')
                                                <option value="Pria">{{$product->ukuran3}}</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="row text-center">
                                <div class="col ml-5 mr-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Jumlah /Lusin</label>
                                        <input type="number" class="form-control  @error ('jumlah') is-invalid @enderror" name="jumlah" placeholder="0">
                                        @error('jumlah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="harga" value="{{$product->harga_satuan}}">
                            <input type="hidden" name="id_produk" value="{{$product->id}}">
                            <input type="hidden" name="ukuran" value="{{$product->ukuran}}">
                                <hr>
                                <div class="row">
                                        <div class="col ml-2 mr-2">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nama Lengkap*</label>
                                                <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" id="nama">
                                                @error('nama') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="col ml-2 mr-2">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="text" class="form-control  @error ('email') is-invalid @enderror" name="email" id="email">
                                            @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col ml-2 mr-2">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nomor Telp. (WhatsApp)*</label>
                                                <input type="text" class="form-control  @error ('nomor') is-invalid @enderror" name="nomor" id="nomor">
                                                @error('nomor') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col ml-2 mr-2">
                                            <div class="form-group">
                                                    <label for="exampleFormControlInput1">Alamat*</label>
                                                    <input type="text" class="form-control  @error ('alamat') is-invalid @enderror" name="alamat" id="alamat">
                                                    @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </div>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-success mt-2 btn-block">Pesan</button>
                            </form>
                        </div>
                    @else


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">10 Pasang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">20 Pasang</a>
                        </li>
                    </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card">
                                    <form method="post" action="{{$product->id}}" class="mt-2 mb-2">
                                            @csrf
                                        <p class="text-center">Rp. {{ number_format($product->harga_satuan,2) }} /10 Pasang</p>
                                        <div class="row text-center">
                                            <div class="col ml-5 mr-5">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Jumlah</label>
                                                    <input type="number" class="form-control  @error ('jumlah') is-invalid @enderror" name="jumlah" placeholder="0">
                                                    @error('jumlah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="harga" value="{{$product->harga_satuan}}">
                                        <input type="hidden" name="id_produk" value="{{$product->id}}">
                                        <input type="hidden" name="ukuran" value="{{$product->ukuran}}">
                                            <hr>
                                            <div class="row">
                                                    <div class="col ml-2 mr-2">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Nama Lengkap*</label>
                                                            <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" id="nama">
                                                            @error('nama') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="row">
                                                <div class="col ml-2 mr-2">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Email</label>
                                                        <input type="text" class="form-control  @error ('email') is-invalid @enderror" name="email" id="email">
                                                        @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="row">
                                                    <div class="col ml-2 mr-2">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Nomor Telp. (WhatsApp)*</label>
                                                            <input type="text" class="form-control  @error ('nomor') is-invalid @enderror" name="nomor" id="nomor">
                                                            @error('nomor') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col ml-2 mr-2">
                                                        <div class="form-group">
                                                                <label for="exampleFormControlInput1">Alamat*</label>
                                                                <input type="text" class="form-control  @error ('alamat') is-invalid @enderror" name="alamat" id="alamat">
                                                                @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                            </div>
                                                    </div>
                                                </div>
                                            <button type="submit" class="btn btn-success mt-2 btn-block">Pesan</button>
                                        </form>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card">
                                    <form method="post" action="{{$product->id}}" class="mt-2 mb-2">
                                            @csrf
                                        <p class="text-center">Rp. {{ number_format($product->harga_kodi,2) }} /20 Pasang</p>
                                        <div class="row text-center">
                                            <div class="col ml-5 mr-5">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Jumlah</label>
                                                    <input type="number" class="form-control  @error ('jumlah') is-invalid @enderror" name="jumlah" placeholder="0">
                                                    @error('jumlah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="harga" value="{{$product->harga_kodi}}">
                                        <input type="hidden" name="id_produk" value="{{$product->id}}">
                                        <input type="hidden" name="ukuran" value="{{$product->ukuran}}">
                                            <hr>
                                            <div class="row">
                                                    <div class="col ml-2 mr-2">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Nama Lengkap*</label>
                                                            <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" id="nama" >
                                                            @error('nama') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="row">
                                                <div class="col ml-2 mr-2">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlInput1">Email</label>
                                                        <input type="text" class="form-control  @error ('email') is-invalid @enderror" name="email" id="email" >
                                                        @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="row">
                                                    <div class="col ml-2 mr-2">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Nomor Telp. (WhatsApp)*</label>
                                                            <input type="text" class="form-control  @error ('nomor') is-invalid @enderror" name="nomor" id="nomor">
                                                            @error('nomor') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col ml-2 mr-2">
                                                        <div class="form-group">
                                                                <label for="exampleFormControlInput1">Alamat*</label>
                                                                <input type="text" class="form-control  @error ('alamat') is-invalid @enderror" name="alamat" id="alamat">
                                                                @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                                            </div>
                                                    </div>
                                                </div>
                                            <button type="submit" class="btn btn-success mt-2 btn-block">Pesan</button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                        @endif
                    {{-- akhir --}}

                </div>
    </div>
</div>

@endsection
