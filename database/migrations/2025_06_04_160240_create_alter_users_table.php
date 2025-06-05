<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->enum('role', ['admin', 'kepala_gudang', 'pemilik_toko'])->nullable()->change();
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        // Consider how to revert this if needed,
        // perhaps setting a default or making it not nullable again
        $table->enum('role', ['admin', 'kepala_gudang', 'pemilik_toko'])->change();
    });
}
};
