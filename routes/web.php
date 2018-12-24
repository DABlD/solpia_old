<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Tips in route grouping
|--------------------------------------------------------------------------
| 
| namespace = Inside Controllers/{namespace}
| prefix = All Url inside group prefixes with {prefix}/{url}
| as = All Route name inside group prefixes with {as}.{name}
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Authenticated
Route::group([
		'middleware' => 'auth',
	], function() {

		Route::get('dashboard', 'DashboardController@index')
			->defaults('sidebar', 1)
			->defaults('icon', 'fa-user')
			->defaults('name', 'Dashboard')
			->defaults('roles', array('Admin'))
			->name('dashboard')
			->defaults('href', 'dashboard');

		Route::group(['namespace' => "Admin"], function(){

			Route::get('applications', 'ApplicationsController@index')
				->defaults('sidebar', 1)
				->defaults('icon', 'fa-file-text')
				->defaults('name', 'Applications')
				->defaults('roles', array('Admin'))
				->name('applications.index')
				->defaults('href', 'applications');

			Route::get('applications/create', 'ApplicationsController@create')->name('applications.create');
			Route::post('applications/store', 'ApplicationsController@store')->name('applications.store');
		});
	}
);