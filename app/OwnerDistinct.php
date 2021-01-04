<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OwnerDistinct extends Model
{
    public function owners(){
        return $this->hasMany(Owner::class)();
    }
    use SoftDeletes;
    protected $dates = ['delete_at'];

}
