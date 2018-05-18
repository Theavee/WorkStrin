<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programmer_post extends Model
{
    //
    public function programmer(){
    	return $this->belongsTo('App\User','programmer_id','id');
    }
}
