<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $table = 'service_requests';

    protected $fillable = array('description', 'pays', 'email', 'phone', 'userType','service_id');

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
