<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ats extends Model
{
    use HasFactory;

    public function pendidikan()
    {
        return $this->belongsTo(ComCode::class, 'pendidikan_tp');
    }

    public function alamatnya()
    {
        return $this->hasOne(AtsAddress::class);
    }
}
