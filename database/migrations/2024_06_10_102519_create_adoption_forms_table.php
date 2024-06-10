<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->text('alamat');
            $table->string('nomor_whatsapp');
            $table->string('hewan_pertama');
            $table->string('jenis_rumah');
            $table->text('alasan_tertarik');
            $table->string('hewan_lain');
            $table->string('kepemilikan_rumah');
            $table->text('lokasi_hewan');
            $table->string('dokter_hewan');
            $table->string('halaman_berpagar');
            $table->integer('jumlah_orang_dewasa');
            $table->integer('jumlah_anak');
            $table->string('alergi_bulu');
            $table->string('lokasi_hewan');
            $table->string('bawa_pulang');
            $table->string('perawatan');
            $table->string('jemput_hewan');
            $table->string('laporan_foto');
            $table->string('hubungi_kembali');
            $table->text('informasi_relevan');
            $table->text('pertanyaan_tambahan');
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
        Schema::dropIfExists('adoption_forms');
    }
}
