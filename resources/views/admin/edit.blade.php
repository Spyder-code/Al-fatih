@extends('layouts.admin.main')

@section('content')
<form method="POST">
        @method('patch')
        @csrf

       <div class="form-group row mt-5">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Nama barang</label>

            <div class="col mr-2">
            <input id="name" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$product->nama}}" >

                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Merk</label>

            <div class="col mr-2">
                <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{$product->merk}}">

                @error('merk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Ukuran</label>
            <div class="col mr-2">
                <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="ukuran" value="{{$product->ukuran}}" >

                @error('ukuran')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Bahan</label>
            <div class="col mr-2">
                <select class="form-control" name="bahan">
                    <option value="Kulit">Kulit</option>
                    <option value="Mitasi">Mitasi</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Sol</label>
            <div class="col mr-2">
                <select class="form-control" name="sol">
                    <option value="PVC">PVC</option>
                    <option value="Smile (Balet)">Smile</option>
                    <option selected value="TPR">TPR</option>
                    <option value="Matis">Matis</option>
                    <option value="Wadges">Wadges</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Kategori</label>
            <div class="col mr-2">
                <select class="form-control" name="kategori" value="{{$product->kategori}}">
                    <option value="Pria">Pria</option>
                    <option selected value="Wanita">Wanita</option>
                    <option value="Anak-anak">Anak-anak</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Stock</label>
            <div class="col mr-2">
                <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="stock" value="{{$product->stock}}" >

                @error('stok')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Harga /Pasang</label>
            <div class="col mr-2">
                <input type="text" class="form-control @error('hargaPasang') is-invalid @enderror" name="hargaPasang" value="{{$product->harga_satuan}}" >

                @error('hargaPasang')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-4 col-form-label text-md-right ml-2">Harga /Kodi</label>
            <div class="col mr-2">
                <input type="text" class="form-control @error('hargaKodi') is-invalid @enderror" name="hargaKodi" value="{{$product->harga_kodi}}" >

                @error('hargaKodi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label  class="col-4 col-form-label text-md-right ml-2">Deskripsi</label>
            <div class="col mr-2">
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" cols="70">{{$product->deskripsi}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="float-right mr-2">
                <button type="submit" class="btn btn-primary">
                Ubah
                </button>
            </div>
        </div>
    </form>

@endsection
