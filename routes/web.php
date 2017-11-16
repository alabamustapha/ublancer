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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/how', 'HomeController@index')->name('how');
Route::get('/freelancer', 'HomeController@index')->name('freelancer');
Route::get('/post_job', 'JobController@create')->name('post_job');

Route::group(['middleware' => ['auth']], function () {

	Route::group(['middleware' => ['admin']], function () {
		Route::get('admin', 'AdminController@index')->name('admin');    
	    Route::get('admin/categories', 'CategoryController@index')->name('admin_categories');
		Route::post('admin/categories', 'CategoryController@store')->name('add_category');
		Route::put('admin/categories/{category}', "CategoryController@update")->name('update_category');
		Route::get('admin/categories/{category}/edit', "CategoryController@edit")->name('edit_category');
		Route::delete('admin/categories/{category}/delete', "CategoryController@delete")->name('delete_category');

		Route::get('/admin/skills', 'SkillController@index')->name('admin_skills');
		Route::post('admin/skills', 'SkillController@store')->name('add_skill');
		Route::get('admin/skills/{skill}/edit', "SkillController@edit")->name('edit_skill');
		Route::delete('admin/skills/{skill}/delete', "SkillController@delete")->name('delete_skill');

	});



	Route::get('/user/{user}', 'ProfileController@show')->name('profile');
	Route::get('/user/{user}/dashboard', 'ProfileController@dashboard')->name('dashboard');
	Route::put('/user/{user}/update_profile', 'ProfileController@update')->name('update_profile');

	Route::post('/jobs', 'JobController@store')->name('add_job');
	Route::get('/jobs', 'FreelancerController@jobs')->name('jobs');
	Route::get('/jobs/{job}', 'JobController@show')->name('job');
	Route::post('/jobs/{job}/proposals', 'ProposalController@store')->name('send_proposal');

});