<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Services;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/services',function(){
//       return view('services');
// });

//Route::get('/services/{id?}/{name?}',[Services::class,'index']);


// Route::get('/about-us',function(){
//      echo "About Us";
// });

//Route::redirect('/product','/about-us');

// Route::get('/product',function(){
//     return redirect('/about-us');
// });

// Route::get('/services/{id}/{name}',function($id,$name){
//     echo "ID ".$id;
//     echo " Name ". $name;
// })->where(['id' => '[0-9]+','name'=>'[a-zA-Z]+']);

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/login',[AdminController::class,'login']);
Route::post('/admin/login',[AdminController::class,'submit_login']);
Route::get('/admin/logout',[AdminController::class,'logout']);


// department routes
Route::get('depart/{id}/delete',[DepartmentController::class,'destroy']);
Route::resource('depart',DepartmentController::class);


// Employee routes
Route::get('employee/{id}/delete',[EmployeeController::class,'destroy']);
Route::resource('employee',EmployeeController::class);


