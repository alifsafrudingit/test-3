<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PendidikanTerakhir extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'biodata_id',
    'nama_sekolah',
    'jurusan',
    'tahun_lulus',
    'nilai',
  ];

  public function biodata()
  {
    return $this->belongsTo(Biodata::class);
  }
}
