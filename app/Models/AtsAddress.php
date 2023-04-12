<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class AtsAddress extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function creatorId(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => auth()->user()->id,
        );
    }

    public function atsnya()
    {
        return $this->belongsTo(Ats::class, 'ats_id');
    }

    public function namaKelurahan()
    {
        return $this->belongsTo(ComRegion::class, 'region_kel');
    }

    public function namaKecamatan()
    {
        return $this->belongsTo(ComRegion::class, 'region_kec');
    }

}
