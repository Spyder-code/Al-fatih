<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('harga_satuan')->nullable();
            $table->integer('harga_kodi')->nullable();
            $table->integer('harga_lusin')->nullable();
            $table->string('merk');
            $table->string('kategori');
            $table->string('ukuran');
            $table->string('ukuran2')->nullable();
            $table->string('ukuran3')->nullable();
            $table->integer('stock');
            $table->string('deskripsi');
            $table->string('image');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
