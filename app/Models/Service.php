<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Categories\Traits\Categorizable;

class Service extends Model
{

    public function requests()
    {
        return $this->hasMany('App\Models\ServiceRequest','service_id');
    }
}
