<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Buyer_post extends Model
{
    public function buyer(){
    	return $this->belongsTo('App\User','buyer_id','id');
    }
}
