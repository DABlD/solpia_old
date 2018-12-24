<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Application, Experience};
use App\User;
use Hash;

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

    public function store(Request $req){

        $user = User::create([
            'fname' => $req->fname,
            'mname' => $req->mname,
            'lname' => $req->lname,
            'email' => $req->email,
            'birthday' => $req->birthday,
            'gender' => $req->gender,
            'nationality' => $req->nationality,
            'address' => $req->address,
            'contact' => $req->contact,
            'password' => Hash::make('123456'),
        ]);

        $application = Application::create([
            'user_id' => $user->id,
            'expected_salary' => $req->expected_salary,
            'passport_number' => $req->passport_number,
            'passport_expiry' => $req->passport_expiry,
            'seamans_book_number' => $req->seamans_book_number,
            'seamans_book_expiry' => $req->seamans_book_expiry,
            'us_visa_number' => $req->us_visa_number,
            'us_visa_expiry' => $req->us_visa_expiry,
            'schengen_visa_number' => $req->schengen_visa_number,
            'schengen_visa_expiry' => $req->schengen_visa_expiry,
            'coc_details' => $req->coc_details,
            'training_certificate_details' => $req->training_certificate_details,
            'other_info' => $req->other_info,
            'fresh_grad' => $req->fresh_grad,
            'with_experience' => $req->with_experience,
            'desired_position' => json_encode($req->desired_position),
        ]);

        $experience = new Experience;
        $experience->application_id = $application->id;
        $experience->position = $req->position;
        $experience->agency = $req->agency;
        $experience->vessel = $req->vessel;
        $experience->vessel_type = $req->vessel_type;
        $experience->trade_route = $req->trade_route;
        $experience->sign_on = $req->sign_on;
        $experience->sign_off = $req->sign_off;
        $experience->save();

        $req->session()->flash('success', 'User application successfully filed');
        return redirect()->route('applications.index');
    }

    private function _view($view, $data = array()){
    	return view('admin.applications.' . $view, $data);
    }
}