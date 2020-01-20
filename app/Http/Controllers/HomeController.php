<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Tran;
use App\Help;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = DB::table('products')->paginate(10);
        return view('admin.home', compact('product'));
    }
    public function customer()
    {
        $product = Help::paginate(10);
        return view('admin.customer', compact('product'));
    }
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('home');
    }
    public function edit(Product $product)
    {
        return view('admin.edit', compact('product'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($files = $request->file('image')) {
            $lokasi = public_path('assets/img');
            $profil = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($lokasi, $profil);
            $insert['image'] = "$profil";

            $data = new Product;
            $data->nama = $request->nama;
            $data->harga_satuan = $request->hargaPasang;
            $data->harga_kodi = $request->hargaKodi;
            $data->harga_lusin = $request->hargaLusin;
            $data->merk = $request->merk;
            $data->kategori = $request->kategori;
            $data->ukuran = $request->ukuran;
            $data->ukuran2 = $request->ukuran2;
            $data->ukuran3 = $request->ukuran3;
            $data->stock = $request->stock;
            $data->deskripsi = $request->deskripsi;
            $data->image = "$profil";
            $data->status = 0;
            $data->save();
        }

        return redirect('home');
    }
    public function create()
    {
        return view('admin.tambah');
    }
    public function update(Request $request, Product $product)
    {
        Product::where('id', $product->id)
            ->update([
                'nama' => $request->nama,
                'harga_satuan' => $request->hargaPasang,
                'harga_kodi' => $request->hargaKodi,
                'merk' => $request->merk,
                'kategori' => $request->kategori,
                'ukuran' => $request->ukuran,
                'stock' => $request->stock,
                'deskripsi' => $request->deskripsi,
            ]);
        return redirect('home');
    }
    public function Adminindex()
    {
        //SELECT trans.nama, products.nama FROM `trans` JOIN products on products.id=trans.produk_id
        $tran = Tran::all();
        $barang = DB::table('trans')
            ->join('products', 'products.id',  '=',  'trans.produk_id')
            ->select('trans.*', 'products.nama as bar', 'products.image')
            ->paginate(10);
        return view('admin.transaksi', [
            'tran' => $tran,
            'barang' => $barang
        ]);
    }

    public function updateTrans(Request $request, Tran $tran)
    {
        Tran::where('id', $tran->id)
            ->update([
                'status' => '1'
            ]);
        return redirect('home/transaksi');
    }
    public function destroyTrans(Tran $tran)
    {
        Tran::destroy($tran->id);
        return redirect('home/transaksi');
    }
}
