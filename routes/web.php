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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/' , function(){

	 return redirect('/home');
});
Route::get('/signup' , function(){
	if (Auth::check()) {

    return redirect('/home');
   }else
	return view('Auth/signup');
});



Route::post('/signed' ,'SignUpController@signUp')->name('sign');


Route::resource('/profile' , 'UserController');

// admin
Route::group([
            'prefix'     => 'Dashboard',
            'middleware' => [
                'auth',
                'admin',
            ],
        ], function() {

    //Admindashboard 
Route::resource('/AuthUser', 'DashboardController');
Route::post('/accept/{id}', 'DashboardController@accept')->name('acceptUser');
Route::post('/delete/{id}', 'DashboardController@delete')->name('deleteUser');
Route::resource('/AuthUser', 'DashboardController');
    //creteUSer
Route::get('/CreateUser' , function(){
	return view('Dashboard.CreateUser');
});
Route::post('/CreateUser' ,'DashboardController@create')->name('CreateUser');

     //CreateCourse
Route::get('/CreateCourse' ,'DashboardController@viewCourse')->name('CreateCourse');
Route::post('/CreateCourse' ,'DashboardController@CreateCourse')->name('CreateCourse');

 //CreateTable
Route::get('/Table' ,'DashboardController@Table');
Route::get('/viewTable' ,'DashboardController@viewTable');
Route::post('/Table' ,'DashboardController@createTable')->name('Table');
Route::get('/donwloadTable/{id}' ,'DashboardController@getDownload');

         
           
 });


//prof
 Route::group([
            'prefix'     => 'Dashboard',
            'middleware' => [
                'auth',
                'prof',
            ],
        ], function() {

    Route::get('/CourseManage' ,'profController@students');
    Route::get('/studentUpdate/{id}' ,'profController@manage');
    Route::post('/UpdateAtten' ,'profController@UpdateAtten')->name('UpdateAtten');
    Route::post('/UpdateGrd' ,'profController@UpdateGrd')->name('UpdateGrd');

    // Table 

    Route::get('/donwloadTable/{id}' ,'DashboardController@getDownload');
    Route::get('/viewTable' ,'DashboardController@viewTable');


         
           
 });

//student
Route::group([
            'prefix'     => 'Dashboard',
            'middleware' => [
                'auth',
                'student',
            ],
        ], function() {

/// enroll for course
   Route::get('/enrollcourse' ,'studentController@course');
   Route::post('/enrollcourse' ,'studentController@enroll')->name('enroll');
// viewCourse
   Route::get('/course' ,'studentController@viewCourse');

   // Table
   Route::get('/StudentTable' ,'studentController@viewTable');
   Route::get('/Student/donwloadTable/{id}' ,'studentController@getTable');



            
           
 });

// Library
   Route::get('/library' ,function(){
   	return view('library.books.add');
   });









  


//doctorDashboard