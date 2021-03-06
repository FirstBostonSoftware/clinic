<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientultrasound extends Model
{
    public function doctor()
    {
    	 return $this->belongsTo('App\Doctor','physician_id');
    }

    public function patient()
    {
    	 return $this->belongsTo('App\Patient','patient_id');
    }
}
