<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//rout for return test viewtURL
Route::get('/testURL',function(){
    return view ("test");
});

Route::get('/redURL',function(){
    return view("cat");
});

Route::get('/blueURL',function(){
    return view("uses");
});

Route::get('student',function(){
    return view('Niyamai');
});

//Return Redirect rout
//meke firstURL kiyala page ekak na,eee link eka copy paste karama /testURL kiyana page ekata yanawa.....
Route::redirect('/firstURL','/testURL');

//roude for return add user view
Route::get("/adduser",[App\Http\controllers\student::class,'returnAddUserView']);

//roude for return view user 
Route::get("/viewuser",[App\Http\controllers\student::class,'returnViewUser']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route for return student view
Route::get("/studentWithController",[App\Http\controllers\student::class, 'returnStudentView']);






