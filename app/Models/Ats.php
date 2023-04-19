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
        // return new Attribute(
        //     fn($value) => auth()->user()->id
        // );
        return Attribute::make(
        set: fn($value) => auth()->user()->idd,
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