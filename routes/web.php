<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\basicController;
use App\http\Controllers\studentController;
use App\Http\Controllers\SingleAC;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\favController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\practiceController;
use App\Models\project;

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
Route::get('home', function () {
    return view('index');
});
Route::get('main', function () {
    return view('layout.index');
});
Route::get('/', function () {
    return view('crud.form');
});
Route::post('/',[crudcontroller::class,'create']);



Route::get('read',[crudcontroller::class,'read']);

Route::get('/delete',[crudcontroller::class,'updatedelete']);
// Route::get('/update',[crudcontroller::class,'update']);
Route::post('/update',[crudcontroller::class,'update']);


Route::get('std/',[studentController::class,'getdata']);
Route::post('std/',[studentController::class,'postdata']);
Route::get('stdupdate/',[studentController::class,'update']);
Route::post('stdupdate/',[studentController::class,'update']);
Route::get('/updatedelete',[studentController::class,'updatedelete']);
Route::get('stdview/',[studentController::class,'viewdata']);
Route::get('form',[basicController::class,'getdata']);
Route::post('form',[basicController::class,'postdata']);
Route::post('form',[basicController::class,'setdata']);
Route::get('basic',[basicController::class,'first']);
Route::get('SingleAC',SingleAC::class);

Route::get('admin', function(){
    $products = Project::all();
    return view('project.admin', compact('products'));
});
Route::resource('prj',ProjectController::class);



Route::get('prc/create',[practiceController::class, 'create']);
Route::post('prc/create',[practiceController::class, 'store']);
Route::get('prc/',[practiceController::class, 'index']);
Route::get('prc/edit',[practiceController::class, 'edit']);





Route::get('fav/',[favController::class, 'index']);
Route::post('fav/',[favController::class, 'Add']);

Route::post('fav/history',[favController::class, 'history']);



