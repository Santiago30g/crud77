<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonVehicle extends Model
{
    public function person (){
        return $this->belongsTo('App\Models\person');
    }
    public function vehicle (){
        return $this->belongsTo('App\Models\vehicle');
    }
}
