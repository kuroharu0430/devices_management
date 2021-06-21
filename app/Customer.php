<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    public function devices(){
        return $this->hasMany(Device::class)();
    }
    use SoftDeletes;
    protected $dates = ['delete_at'];
}

