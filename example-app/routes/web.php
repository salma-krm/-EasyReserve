<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SalleController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

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
Route::post('/salle/create',[SalleController::class,'create']);
Route::post('/salle/reservation',[ReservationController::class,'ajouterReservation']);
Route::get('/salle/show',[SalleController::class,'show']);
Route::get('/salle',[SalleController::class,'get']);
Route::get('/salle/{id}/update',[SalleController::class,'update']);
Route::get('/reservation/show',[ReservationController::class,'showreservation']);

Route::get('/createsalle',function(){
    return view('createSalle');
});
Route::get('/updateSalle',function(){
    return view('updateSalle');
});

Route::post('/salle/edit',[SalleController::class,'edit']);

Route::post('/salle/{id}/delete',[SalleController::class,'delete']);




