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
    Schema::create('riwayat_pelatihans', function (Blueprint $table) {
      $table->id();
      $table->foreignId('biodata_id')->constrained();
      $table->string('nama_pelatihan');
      $table->string('penyelenggara');
      $table->string('alamat_pelatihan');
      $table->string('mulai_pelatihan');

      $table->softDeletes();
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
    Schema::dropIfExists('riwayat_pelatihans');
  }
};
