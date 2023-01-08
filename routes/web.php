<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

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

Route::get('/welcome/{name}', function ($name) {
    echo "Hello, ".$name."!";
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('bootstrap.home');
});

Route::resource('tasks', AgendaController::class, [
    'only' => ['index', 'update', 'store', 'destroy']]);

