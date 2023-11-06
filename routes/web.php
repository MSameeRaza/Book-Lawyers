<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Models\Lawyer;
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
	if (Auth::id()) {
		return redirect('home');
	}
	else{

	 $data = lawyer::all();

	
        
    return view('user.home',compact('data'));
}
});

Auth::routes();
Route::group(['middleware'=>['PreventBackButton','auth']], function(){
Route::get('/home', [HomeController::class, 'redirect']);
});
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home')->middleware('id_admin');

Route::get('/add_lawyer',[AdminController::class,'addview']);

Route::post('/upload_lawyer',[AdminController::class,'upload']);
Route::post('/appointment',[HomeController::class,'appointment']);



Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/showuser',[AdminController::class,'showuser']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/showlawyer',[AdminController::class,'showlawyer']);
Route::get('/removelawyer/{id}',[AdminController::class,'removelawyer']);
Route::get('/editlawyer/{id}',[AdminController::class,'editlawyer']);
Route::post('/updatelawyer/{id}',[AdminController::class,'updatelawyer']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('/edituser/{id}',[AdminController::class,'edituser']);
Route::post('/updateuser/{id}',[AdminController::class,'updateuser']);


Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/divorcelawyer',[HomeController::class,'divorcelawyer']);
Route::get('/kidnappinglawyer',[HomeController::class,'kidnappinglawyer']);
Route::get('/criminallawyer',[HomeController::class,'criminallawyer']);
Route::get('/rapecaselawyer',[HomeController::class,'rapecaselawyer']);
Route::get('/Add_yourself',[HomeController::class,'Add_yourself']);
Route::get('/Your_appointments',[HomeController::class,'Your_appointments']);
Route::get('/contact',[HomeController::class,'contactus']);
