<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id('id_obat');
            $table->string('kode_obat')->unique();
            $table->string('nama_obat');
            $table->decimal('harga_obat', 15, 2);
            $table->string('jenis_obat');
            $table->integer('stok_obat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('obat');
    }
}
