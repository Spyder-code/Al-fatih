    @extends('layouts.admin.main')

    @section('content')
    <div class="card-header float-right">
        <h3>Tanggal sekarang {{date("d, F Y ")}}</h3>
        <h6>Jumlah data {{$product->total()}}</h6>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form class="form-inline my-2 my-lg-0" method="get" action="{{ url('home/cari') }}">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cari Berdasarkan (Merk, Warna, Kode barang)" name="cari" style="width:330px;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($product as $pro)
                <tr>
                <td>{{ $pro->nama }}</td>
                <td><img class="img-thumbnail" src="assets/img/{{ $pro->image }}" style="height:150px; width:150px;"></td>
                <td>
                    <a href="{{ $pro->id }}/edit" class="badge badge-primary">Edit</a>
                    <a href="detail/{{ $pro->id }}" class="badge badge-success">detail</a>
                    <form action="{{ $pro->id }}" class="d-inline"  method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge badge-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-12 ml-5">
                    {{ $product->links() }}
                </div>
            </div>
        </div>
        <hr>
    <a href="{{url('home/tambah')}}" class="btn btn-primary">Tambah</a>




    @endsection
