<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function index(){
    	return view('dashboard')->withTitle('Dashboard');
    }
}
