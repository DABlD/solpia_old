<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $dates = [
    	'passport_expiry', 'seamans_book_expiry', 
    	'us_visa_expiry', 'schengen_visa_expiry',
    	'created_at', 'updated_at'
    ];

    public function experience(){
        return $this->hasMany('App\Models\Experience');
    }

    public function user(){
	    return $this->belongsTo('App\User');
	}
}
