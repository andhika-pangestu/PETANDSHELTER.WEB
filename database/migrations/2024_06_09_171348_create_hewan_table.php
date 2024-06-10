<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHewanTable extends Migration
{
    public function up()
    {
        Schema::create('hewan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shelter_id');
            $table->string('nama_hewan');
            $table->string('jenis_hewan');
            $table->string('foto')->nullable();
            $table->text('deskripsi');
            $table->string('status')->default('tersedia');
            $table->string('kesehatan')->default('sehat');
            $table->timestamps();

            $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hewan');
    }
}
