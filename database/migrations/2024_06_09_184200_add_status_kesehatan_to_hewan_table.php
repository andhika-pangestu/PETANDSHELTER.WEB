<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusKesehatanToHewanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hewan', function (Blueprint $table) {
            $table->enum('status', ['tersedia', 'booking', 'teradopsi'])->default('tersedia');
            $table->enum('kesehatan', ['sehat', 'sakit'])->default('sehat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hewan', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('kesehatan');
        });
    }
}
