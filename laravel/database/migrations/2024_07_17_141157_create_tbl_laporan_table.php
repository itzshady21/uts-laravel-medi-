<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLaporanTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_laporan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('masuk_data_donor_darah');
            $table->integer('ambil_darah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_laporan');
    }
}