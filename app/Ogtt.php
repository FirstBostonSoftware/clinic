<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ogtt extends Model
{
    public function doctor()
    {
    	 return $this->belongsTo('App\Doctor','doc_id');
    }
}
