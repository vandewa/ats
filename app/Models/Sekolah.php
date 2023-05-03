<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function namaJenjang()
    {
        return $this->belongsTo(ComCode::class, 'jenjang');
    }
    public function jenisSekolah()
    {
        return $this->belongsTo(ComCode::class, 'status_sekolah');
    }
    public function namaKecamatan()
    {
        return $this->belongsTo(ComRegion::class, 'kecamatan');
    }

}