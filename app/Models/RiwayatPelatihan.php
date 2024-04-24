<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatPelatihan extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'biodata_id',
    'nama_pelatihan',
    'penyelenggara',
    'alamat_pelatihan',
    'mulai_pelatihan'
  ];

  public function biodata()
  {
    return $this->belongsTo(Biodata::class);
  }
}
