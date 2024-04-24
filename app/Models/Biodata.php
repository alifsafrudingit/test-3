<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Biodata extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'nama',
    'jenis_kelamin',
    'tanggal_lahir',
    'alamat',
    'no_telp',
    'email',
  ];

  public function riwayatPekerjaan()
  {
    return $this->hasMany(RiwayatPekerjaan::class);
  }

  public function riwayatPendidikan()
  {
    return $this->hasMany(RiwayatPelatihan::class);
  }

  public function riwayatPengalamanKerja()
  {
    return $this->hasMany(PendidikanTerakhir::class);
  }
}
