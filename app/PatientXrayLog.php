<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientXrayLog extends Model
{
    public function doctor()
    {
    	 return $this->belongsTo('App\Doctor','user_id');
    }
}
