<?php

use App\Http\Controllers\AgenciesController;
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

Route::get('/api/agencies', [AgenciesController::class, 'index']);
Route::get('/api/agencies/{id}', [AgenciesController::class, 'show']);
Route::delete('/api/agencies/{id}', [AgenciesController::class, 'destroy']);
Route::post('/api/agencies', [AgenciesController::class, 'store']);
Route::put('/api/agencies/{id}', [AgenciesController::class, 'update']);

// View-ok:
Route::get('/agencies/new', [AgenciesController::class, 'newView']);
Route::get('/agencies/edit/{id}', [AgenciesController::class, 'editView']);
Route::get('/agencies/list', [AgenciesController::class, 'listView']);
Route::get('/agencies/delete', [AgenciesController::class, 'deleteView']);