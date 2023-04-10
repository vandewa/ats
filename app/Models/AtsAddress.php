<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtsAddress extends Model
{
    use HasFactory;

    public function atsnya()
    {
        return $this->belongsTo(Ats::class, 'ats_id');
    }

}
