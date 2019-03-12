<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtisantProduct extends Model
{
    public function artisant()
    {
        return $this->belongsTo(Artisant::class,'artisant_id');
    }
}
