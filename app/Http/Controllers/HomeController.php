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
        $product = Product::orderByRaw('updated_at DESC')
            ->paginate(5);
        return view('admin.home', compact('product'));
    }
    public function customer()
    {
        $product = Help::orderByRaw('updated_at DESC')
            ->paginate(10);
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
            $lokasi = 'assets/img';
            $profil = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($lokasi, $profil);
            $insert['image'] = "$profil";

            $data = new Product;
            $data->nama = $request->nama;
            $data->sol = $request->sol;
            $data->bahan = $request->bahan;
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
                'bahan' => $request->bahan,
                'sol' => $request->sol,
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
            ->orderByRaw('updated_at DESC')
            ->paginate(10);
        return view('admin.transaksi', [
            'tran' => $tran,
            'barang' => $barang
        ]);
    }

    public function cari(Request $request)
    {
        $search = $request->cari;
        $product = Product::orderByRaw('updated_at DESC')
            ->where('nama', 'like', "%" . $search . "%")
            ->orWhere('merk', 'like', "%" . $search . "%")
            ->orWhere('deskripsi', 'like', "%" . $search . "%")
            ->paginate(5);

        return view('admin.cari', compact('product'));
    }

    public function detail(Product $product)
    {
        $barang = DB::table('products')
            ->where('id', '=', $product->id)
            ->get();
        return view('admin.detail', [
            'product' => $barang
        ]);
    }

    public function laporan()
    {
        $awal = Product::count();
        $product = $awal / 320 * 100;
        $trans = Tran::count();
        $help = Help::count();
        $jan = DB::table('access_logs')->whereMonth('created_at', '=', 1)->count();
        $feb = DB::table('access_logs')->whereMonth('created_at', '=', 2)->count();
        $mar = DB::table('access_logs')->whereMonth('created_at', '=', 3)->count();
        $apr = DB::table('access_logs')->whereMonth('created_at', '=', 4)->count();
        $mei = DB::table('access_logs')->whereMonth('created_at', '=', 5)->count();
        $jun = DB::table('access_logs')->whereMonth('created_at', '=', 6)->count();
        $jul = DB::table('access_logs')->whereMonth('created_at', '=', 7)->count();
        $aug = DB::table('access_logs')->whereMonth('created_at', '=', 8)->count();
        $sep = DB::table('access_logs')->whereMonth('created_at', '=', 9)->count();
        $okt = DB::table('access_logs')->whereMonth('created_at', '=', 10)->count();
        $nov = DB::table('access_logs')->whereMonth('created_at', '=', 11)->count();
        $des = DB::table('access_logs')->whereMonth('created_at', '=', 12)->count();
        $total = DB::table('access_logs')->where('path', '=', '/')->count();

        return view('admin.laporan', [
            'jan' => $jan,
            'feb' => $feb,
            'mar' => $mar,
            'apr' => $apr,
            'mei' => $mei,
            'jun' => $jun,
            'jul' => $jul,
            'aug' => $aug,
            'sep' => $sep,
            'okt' => $okt,
            'nov' => $nov,
            'des' => $des,
            'total' => $total,
            'product' => $product,
            'tran' => $trans,
            'sepatu' => $awal,
            'help' => $help
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
