<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Models\User;
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

    $user=User::where('name','Ahmed')->first();
    //dd($user->id);
    return view('welcome')->with('user',$user);
});
Route::get('/user',[FileController::class,"user"]);  //here

Route::prefix("file")->group(function(){
    Route::get('/',fn()=>view("add_file"));
   
    Route::post('/add',[FileController::class,"addfile"])->name("add.file");
});
