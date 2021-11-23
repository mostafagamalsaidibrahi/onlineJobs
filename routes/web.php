<?php
use Illuminate\Http\Request;
Route::get('/', function (Request $request) {
    return view('main.home');
});

// Get Sign Up Page
Route::get('signUp', "SharedController@signUp");
Route::post('signUp', "SharedController@signUp");

// Get Login Page
Route::get('login', function (){
    return view('main.login');
});
Route::post('login', "SharedController@login");



// Get Admin View
Route::get('admin_index' , function (){
    return view('admin.index');
});

// Get User View
Route::get('user_index' , function (){
    return view('user.index');
});

// Get Work Owner View
Route::get('workOwner_index' , function (){
    return view('work_owner.index');
});

// Show All Users

Route::get('show_all_users', "AdminController@showAllUsers");
Route::post('show_all_users', "AdminController@showAllUsers");

// Reject User
Route::get('/delete_user_from_admin/{id}' , "AdminController@deleteUser");

// Accept User
Route::get('/accept_user_from_admin/{id}' , "AdminController@acceptUser");
Route::post('/accept_user_from_admin/{id}' , "AdminController@acceptUser");

// Create New Admin
Route::get('/create_new_admin' , "AdminController@createNewAdmin");
Route::post('/create_new_admin' , "AdminController@createNewAdmin");

// Get Statistics
Route::get('statistics' , "AdminController@getStatistics");

// Show All Jobs

Route::get('show_all_jobs', "AdminController@showAllJobs");
Route::post('show_all_jobs', "AdminController@showAllJobs");

// Reject Job
Route::get('/delete/{id}' , "AdminController@deleteJob");

// Accept Job
Route::get('/accept/{id}' , "AdminController@acceptJob");
Route::post('/accept/{id}' , "AdminController@acceptJob");

///////////////////////////////////////////// Work Owner Routes ////////////////////////////

// Adding New Job

Route::get('/add_job' , "WorkOwnerController@addJob");
Route::post('/add_job' , "WorkOwnerController@addJob");


// Show My Uploaded jobs
Route::get('/show_my_jobs' , "WorkOwnerController@showMyJobs");
Route::post('show_my_jobs' , "WorkOwnerController@showMyJobs");

// Show Users Who Make Upply On My Uploaded Job
Route::get('/upplied/{id}' , "WorkOwnerController@showUsersWhoUpplied");
Route::post('/upplied/{id}' , "WorkOwnerController@showUsersWhoUpplied");

// Accept User Which Upplied The Jobs Or Reject
// Reject User
Route::get('/delete_user/{id}' , "WorkOwnerController@deleteUser");

// Accept User
Route::get('/accept_user/{id}' , "WorkOwnerController@acceptUser");
Route::post('/accept_user/{id}' , "WorkOwnerController@acceptUser");

///////////////////////////////////////////// User Routes /////////////////////////////////////

// Show All Jobs For Uppling these
Route::get('upply_jobs' , "UserController@showJobsForupply");
Route::post('upply_jobs' , "UserController@showJobsForupply");

// Make Uppling On Jobs
Route::get('/upply/{id}' , "UserController@makeUpply");
Route::post('/upply/{id}' , "UserController@makeUpply");


