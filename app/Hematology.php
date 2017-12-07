<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hematology extends Model
{
    public function doctor()
    {
    	 return $this->belongsTo('App\Doctor','doc_id');
    }
}
