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
    Schema::create('donations', function (Blueprint $table) {
        $table->id();
        $table->string('donor_name');
        $table->string('donor_email');
        $table->string('donation_type');
        $table->float('amount');
        $table->text('note')->nullable();
        $table->string('snap_token')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('donations');
}

};