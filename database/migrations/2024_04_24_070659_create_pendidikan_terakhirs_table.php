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
    Schema::create('pendidikan_terakhirs', function (Blueprint $table) {
      $table->id();
      $table->string('nama_sekolah');
      $table->string('jurusan');
      $table->string('tahun_lulus');
      $table->string('nilai');
      $table->foreignId('biodata_id')->constrained();

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
    Schema::dropIfExists('pendidikan_terakhirs');
  }
};
