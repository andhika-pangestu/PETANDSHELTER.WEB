<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdopsiTable extends Migration
{
    public function up()
    {
        Schema::create('adopsi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hewan_id');
            $table->unsignedBigInteger('user_id');
            $table->string('status')->default('pending');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->text('alamat');
            $table->string('nomor_whatsapp');
            $table->text('hewan_pertama');
            $table->text('jenis_rumah');
            $table->text('alasan_tertarik');
            $table->text('hewan_lain');
            $table->text('kepemilikan_rumah');
            $table->text('lokasi_hewan');
            $table->text('dokter_hewan');
            $table->text('halaman_berpagar');
            $table->text('jumlah_orang_dewasa');
            $table->text('jumlah_anak');
            $table->text('alergi_bulu');
            $table->text('lokasi_hewan_luar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adopsi');
    }
}
