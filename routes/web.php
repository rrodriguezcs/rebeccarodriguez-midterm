<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\NoteshistoryController;

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

Route::resource('/customers', CustomerController::class);
Route::resource('/equipment', EquipmentController::class);
Route::resource('/manufacturer', ManufacturerController::class);
Route::resource('/note', NoteshistoryController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');