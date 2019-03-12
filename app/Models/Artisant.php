<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Categories\Traits\Categorizable;

class Artisant extends Model
{
    use Categorizable ;

    public function products()
    {
        return $this->hasMany(ArtisantProduct::class);
    }
}
