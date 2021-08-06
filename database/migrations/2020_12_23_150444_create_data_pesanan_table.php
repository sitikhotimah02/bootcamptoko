<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pesanan', function (Blueprint $table) {
            $table->bigIncrements("id_pesanan");
            $table->integer("id_tanaman");
            $table->integer("id_pemasukan");
            $table->string('nama_tanaman');
            $table->char('harga_tanaman');
            $table->char('jumlah_stok');
            $table->char('total');
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
        Schema::dropIfExists('data_pesanan');
    }
}
