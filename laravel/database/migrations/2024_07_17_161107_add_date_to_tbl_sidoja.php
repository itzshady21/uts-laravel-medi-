<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToTblSidoja extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tbl_sidoja', function (Blueprint $table) {
            $table->date('tanggal_input')->after('kadar_hb'); // Menambahkan kolom 'date' setelah 'kadar_hb'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_sidoja', function (Blueprint $table) {
            $table->dropColumn('tanggal_input'); // Menghapus kolom 'date' saat rollback
        });
    }
}

