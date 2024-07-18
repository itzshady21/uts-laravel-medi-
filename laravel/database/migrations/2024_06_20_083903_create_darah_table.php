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
        Schema::create('tbl_darah', function (Blueprint $table) {
            $table->id(); // ID otomatis dan auto-increment
            $table->string('golongan_darah'); // Kolom untuk golongan darah
            $table->integer('jumlah'); // Kolom untuk jumlah stok darah
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darah');
    }
};
