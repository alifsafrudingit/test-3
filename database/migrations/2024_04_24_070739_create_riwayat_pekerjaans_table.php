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
    Schema::create('riwayat_pekerjaans', function (Blueprint $table) {
      $table->id();
      $table->foreignId('biodata_id')->constrained();
      $table->string('nama_perusahaan');
      $table->string('alamat_perusahaan');
      $table->string('no_telp_perusahaan');
      $table->string('posisi');

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
    Schema::dropIfExists('riwayat_pekerjaans');
  }
};
