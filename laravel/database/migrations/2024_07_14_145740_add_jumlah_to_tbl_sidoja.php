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
    public function up(): void
    {
        Schema::table('tbl_sidoja', function (Blueprint $table) {
            $table->integer('jumlah')->after('gol_darah'); // Tambahkan kolom baru di sini
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('tbl_sidoja', function (Blueprint $table) {
            $table->dropColumn('jumlah'); // Drop kolom jika rollback
        });
    }
};
