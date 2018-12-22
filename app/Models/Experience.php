<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $dates = [
    	'sign_on', 'sign_off', 
    	'created_at', 'updated_at'
    ];
}
