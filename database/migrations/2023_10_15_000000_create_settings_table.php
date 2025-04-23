<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });

        // Insert default settings
        DB::table('settings')->insert([
            ['key' => 'agency_name', 'value' => 'Tata Pemerintahan Kota Semarang', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'institution_description', 'value' => 'Website tata pemerintahan ini merupakan platform digital resmi yang dikelola oleh institusi pemerintahan guna menyediakan layanan publik dan informasi yang transparan, akurat, dan mudah diakses oleh masyarakat.', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'address', 'value' => 'Jl. Pemuda No.148, Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'email', 'value' => 'tapemkotasmg@gmail.com', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'timezone', 'value' => 'Asia/Jakarta', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
