@extends('layouts.admin.main')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sepatu Kodi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sepatu Lusin</a>
    </li>
</ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            {{-- awal --}}
<form method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group row mt-5">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Nama barang</label>

        <div class="col mr-2">
            <input id="name" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required >

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
            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" required>

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
            <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="ukuran" required >

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
            <select class="form-control" name="kategori">
                <option value="Pria">Pria</option>
                <option selected value="Wanita">Wanita</option>
                <option value="Anak-anak">Anak-anak</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Stock</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="stock" required >

            @error('stok')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Harga /10 Pasang</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('hargaPasang') is-invalid @enderror" name="hargaPasang" required >

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
            <input type="text" class="form-control @error('hargaKodi') is-invalid @enderror" name="hargaKodi" required >

            @error('hargaKodi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Deskripsi</label>
        <div class="col mr-2">
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" cols="70"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Image</label>
        <div class="col mr-2">
            <input id="image" type="file" class="form-control-file" name="image">
        </div>
    </div>

    <div class="form-group row mb-5">
        <div class="col mr-2">
            <button type="submit" class="btn btn-primary float-right" >Tambah</button>
        </div>
    </div>
</form>
{{-- akhir --}}
        </div>
        {{-- akhir kodi --}}
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        {{-- awal lusin --}}
<form method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group row mt-5">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Nama barang</label>

        <div class="col mr-2">
            <input id="name" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required >

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
            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="Armas" required>

            @error('merk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Ukuran 1</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('ukuran1') is-invalid @enderror" name="ukuran">

            @error('ukuran1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Harga 1</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('hargaKodi') is-invalid @enderror" name="hargaKodi">

            @error('hargaKodi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Ukuran 2</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('ukuran2') is-invalid @enderror" name="ukuran2">

            @error('ukuran2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Harga 2</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('hargaPasang') is-invalid @enderror" name="hargaPasang">

            @error('hargaPasang')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Ukuran 3</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('ukuran3') is-invalid @enderror" name="ukuran3">

            @error('ukuran3')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Harga 3</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('hargaLusin') is-invalid @enderror" name="hargaLusin" >

            @error('hargaLusin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Kategori</label>
        <div class="col mr-2">
            <select class="form-control" name="kategori">
                <option value="Pria">Pria</option>
                <option selected value="Wanita">Wanita</option>
                <option value="Anak-anak">Anak-anak</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Stock</label>
        <div class="col mr-2">
            <input type="text" class="form-control @error('ukuran') is-invalid @enderror" name="stock" required >

            @error('stok')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Deskripsi</label>
        <div class="col mr-2">
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" cols="70"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-4 col-form-label text-md-right ml-2">Image</label>
        <div class="col mr-2">
            <input id="image" type="file" class="form-control-file" name="image">
        </div>
    </div>

    <div class="form-group row mb-5">
        <div class="col mr-2">
            <button type="submit" class="btn btn-primary float-right" >Tambah</button>
        </div>
    </div>
</form>
{{-- akhir --}}
        </div>
        {{-- akhir lusin --}}
        </div>
    </div>

{{-- akhir --}}



@endsection
