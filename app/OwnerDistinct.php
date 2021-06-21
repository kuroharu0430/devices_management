<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OwnerDistinct extends Model
{
    public function devices(){
        return $this->hasMany(Device::class)();
    }

    use SoftDeletes;
    protected $dates = ['delete_at'];

}
