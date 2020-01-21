<?php

namespace App\Http\Controllers;

use App\Product;
use App\Help;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = Product::orderByRaw('updated_at DESC')
            ->paginate(8);
        return view('user.index', compact('product'));
    }

    public function help()
    {

        return view('user.help');
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
        $data = new Help;
        $data->email = $request->email;
        $data->subjek = $request->subjek;
        $data->pesan = $request->pesan;
        $request->validate([
            'email' => 'required',
            'subjek' => 'required',
            'pesan' => 'required'
        ]);
        $data->save();
        return redirect('/help')->with('status', 'Pesan berhasil terkirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('user.belanja', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
    }
    public function berhasil()
    {
        return view('user.berhasil');
    }
}
