<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtsPendataan extends Model
{
    use HasFactory;

    public function minatSekolah()
    {
        return $this->belongsTo(ComCode::class, 'minat_sekolah_st');
    }

    public function disabilitas()
    {
        return $this->belongsTo(ComCode::class, 'disabilitas_st');
    }

    public function alasan()
    {
        return $this->belongsTo(ComCode::class, 'alasan_tp');
    }

    public function jenisDisabilitas()
    {
        return $this->belongsTo(ComCode::class, 'jenis_disabilitas_tp');
    }

    public function statusAts()
    {
        return $this->belongsTo(ComCode::class, 'ats_st');
    }

    public function statusSekolah()
    {
        return $this->belongsTo(ComCode::class, 'sekolah_tp');
    }
}
