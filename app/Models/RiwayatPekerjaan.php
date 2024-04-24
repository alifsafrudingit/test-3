<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatPekerjaan extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'biodata_id',
    'nama_perusahaan',
    'alamat_perusahaan',
    'no_telp_perusahaan',
    'posisi'
  ];

  public function biodata()
  {
    return $this->belongsTo(Biodata::class);
  }
}
