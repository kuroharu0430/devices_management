<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
    public function device(){
        return $this->hasOne(Device::class)();
    }

    public function owner_distinct(){
        return $this->belongsTo(OwnerDistinct::class);
    }
    
    public function foreign(){
        if($this->owner_distinct->relation == 'customer'){
            $this->a = $this->foreign_id;
            return $this->belongsTo(Customer::class);
        }
        elseif($this->owner_distinct->relation == 'employee'){
            $this->employee_id = $this->foreign_id;
            return $this->belongsTo(Employee::class);
        }
    }
    use SoftDeletes;
    protected $dates = ['delete_at'];
}
