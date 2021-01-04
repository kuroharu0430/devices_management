<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function owner(){
        return $this->belongsTo(Owner::class);
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
