<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tran;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function pria()
    {
        $search = 'pria';
        $tas = Product::where('kategori', 'LIKE', "%{$search}%")
            ->paginate(8);

        return view('user.produk', compact('tas'));
    }

    public function wanita()
    {
        $search = 'wanita';
        $tas = Product::where('kategori', 'LIKE', "%{$search}%")
            ->paginate(8);

        return view('user.produk', compact('tas'));
    }

    public function anak()
    {
        $search = 'anak-anak';
        $tas = Product::where('kategori', 'LIKE', "%{$search}%")
            ->paginate(8);

        return view('user.produk', compact('tas'));
    }

    public function zipper()
    {
        $search = 'tas ziper';
        $tas = Product::where('nama', 'LIKE', "%{$search}%")
            ->get();

        return view('user.produk', compact('tas'));
    }

    public function search(Request $request)
    {
        $search = $request->cari;
        $tas = Product::where('nama', 'like', "%" . $search . "%")
            ->orWhere('merk', 'like', "%" . $search . "%")
            ->orWhere('deskripsi', 'like', "%" . $search . "%")
            ->paginate(8);

        return view('user.produk', compact('tas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tran $tran)
    {
        $barang = DB::table('trans')
            ->where('trans.id', '=', $tran->id)
            ->join('products', 'products.id',  '=',  'trans.produk_id')
            ->select('trans.*', 'products.nama as bar', 'products.image', 'products.merk', 'products.deskripsi')
            ->get();
        return view('user.detail', [
            'tran' => $barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
