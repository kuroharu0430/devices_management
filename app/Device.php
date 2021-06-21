<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    public function owner_distinct(){
        return $this->belongsTo(OwnerDistinct::class);
    }
    public function owner(){
        if($this->owner_distinct->relation == 'customer'){
            $this->customer_id = $this->owner_id;
            return $this->belongsTo(Customer::class);
        }
        elseif($this->owner_distinct->relation == 'employee'){
            $this->employee_id = $this->owner_id;
            return $this->belongsTo(Employee::class);
        }
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }
}
