<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('laporan', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal');
        $table->string('gol_darah');
        $table->integer('jumlah_donor')->default(0);
        $table->integer('jumlah_pengambilan')->default(0);
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
        Schema::dropIfExists('laporan');
    }
};
