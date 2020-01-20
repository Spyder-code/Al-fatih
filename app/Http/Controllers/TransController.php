<?php

namespace App\Http\Controllers;

use App\Tran;
use App\Product;
use Illuminate\Http\Request;

class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tran = Tran::all();
        return view('user.transaksi', ['tran' => $tran]);
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
        $data = new Tran;

        $data->produk_id = $request->id_produk;
        $data->jumlah = $request->jumlah;
        $data->harga = $request->harga;
        $data->ukuran = $request->ukuran;
        $data->nama = $request->nama;
        $data->nomor = $request->nomor;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->total = $request->harga * $request->jumlah;
        $data->status = 0;

        $request->validate([
            'nama' => 'required',
            'nomor' => 'required|numeric',
            'alamat' => 'required',
            'jumlah' => 'required',
            'email' => 'required|email'
        ]);
        $data->save();
        return redirect('/')->with('status', 'Permintaan anda akan segera di prosess. Anda akan menerima pesan dari Admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function show(Tran $tran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function edit(Tran $tran)
    {
        return view('user.transaksi', compact('tran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tran $tran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tran  $tran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tran $tran)
    {
        //
    }
}
