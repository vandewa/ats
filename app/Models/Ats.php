<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;


class Ats extends Model
{
    use HasFactory;

    protected function creatorId(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => auth()->user()->id,
        );
    }

    protected $guarded = [];

    public function pendidikan()
    {
        return $this->belongsTo(ComCode::class, 'pendidikan_tp');
    }

    public function alamatnya()
    {
        return $this->hasOne(AtsAddress::class);
    }
    public function pendataan()
    {
        return $this->hasOne(AtsPendataan::class);
    }
}
