@extends('layouts.admin.main')

@section('content')
<div class="card-header float-right">
    <h3>Tanggal sekarang {{date("d, F y ")}}</h3>
    <h6>Jumlah data {{$barang->total()}}</h6>
</div>
<div class="table-responsive">
<table class="table">
        <thead class="thead-light">
        <tr>
        <th scope="col">Nama</th>
        <th scope="col">Barang</th>
        <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($barang as $tran)
            <tr>
            <td>{{ $tran->nama }}
                <div class="card-header float-right">Upload on {{date("d, F y",strtotime($tran->created_at))}}</div>
            </td>
            <td>{{ $tran->bar }}
                <img class="img-thumbnail" src="{{asset('assets/img/'.$tran->image)}}" style="height:150px; width:150px;">
            </td>
                <td>
                    <form action="transaksi/{{ $tran->id }}" class="d-inline"  method="post">
                        @method('put')
                        @csrf
                        @if ( $tran->status==0 )
                        <button class="badge badge-danger" type="submit" onclick="return confirm('Are you sure?')">Belum</button>
                        @else
                        <button disabled class="badge badge-success">Sudah</button>
                        @endif
                    <a class="badge badge-success" href="https://wa.me/62{{$tran->nomor}}?text=Konfirmasi+pemesanan+Sepatu+Al+Fatih%3A%0D%0A%0D%0AAtas+nama%3A+{{$tran->nama}}%0D%0AAlamat%3A+{{$tran->alamat}}%0D%0ABarang%3A+{{$tran->bar}}%0D%0AHarga%3A+{{$tran->harga}}%0D%0AJumlah%3A+{{$tran->jumlah}}%0D%0ATotal+biaya%3A+{{$tran->total}}%0D%0A%0D%0AJika+data+sudah+benar%2C+balas+pesan+untuk+konfirmasi+pembayaran%21%0D%0A%20https://www.sepatualfatih.online/detail/{{$tran->id}}">
                            Whatsapp
                        </a>
                        <a href="{{ url('detail/'.$tran->id) }}" class="badge badge-primary">Detail</a>

                    </form>
                    {{-- <form action="{{ $tran->id }}" class="d-inline"  method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                    </form> --}}
                </td>
            @endforeach
            </tr>
        </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 ml-5">
                {{ $barang->links() }}
            </div>
        </div>
    </div>
    <hr>





@endsection
