<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRescueForm extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rescue-forms', function (Blueprint $table) {
            $table->id();
            $table->string('namaHewan');
            $table->string('bbHewan');
            $table->string('jenisHewan');
            $table->string('deskripsiHewan');
            $table->text('kondisiHewan');
            $table->text('tglLokasiPenemuan');
            $table->text('kondisiLingkungan');
            $table->string('fotoHewan')->nullable();
            $table->string('fotoLokasi')->nullable();
            $table->string('namaPelapor');
            $table->string('usiaPelapor');
            $table->string('nomorTelp');
            $table->string('jenisKelamin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rescue-forms');
    }
};
