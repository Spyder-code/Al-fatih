<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produk_id');
            $table->string('ukuran');
            $table->string('nama');
            $table->string('email');
            $table->string('alamat');
            $table->string('nomor');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('total');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans');
    }
}
