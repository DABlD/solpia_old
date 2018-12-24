<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationsController extends Controller
{
    public function index(){
    	return $this->_view('index', [
    		'title' => 'Applications'
    	]);
    }

    public function create(){
    	return $this->_view('create', [
    		'title' => 'Add Applications'
    	]);
    }

    private function _view($view, $data = array()){
    	return view('admin.applications.' . $view, $data);
    }
}