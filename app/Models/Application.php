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

    protected $fillable = [
        'user_id', 'expected_salary', 'passport_number', 'passport_expiry', 'seamans_book_number', 'seamans_book_expiry', 'us_visa_number', 'us_visa_expiry', 'schengen_visa_number', 'schengen_visa_expiry', 'coc_details', 'training_certificate_details', 'other_info', 'fresh_grad', 'with_experience', 'desired_position'
    ];

    public function experience(){
        return $this->hasMany('App\Models\Experience');
    }

    public function user(){
	    return $this->belongsTo('App\User');
	}
}
