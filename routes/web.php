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
    $quotesJson = file_get_contents("https://zenquotes.io/api/quotes");
        $quotes = json_decode($quotesJson, true);
        $random = $quotes[array_rand($quotes,1)];
        $quote = $random["q"]." (".$random["a"].")";
    return view('bootstrap.home',['quote'=> $quote]);

});

Route::resource('tasks', AgendaController::class, [
    'only' => ['index', 'update', 'store', 'destroy']]);


Route::get('tasks/completed', [AgendaController::class, 'completed'])->name('tasks.completed');

Route::get('tasks/tocomplete', [AgendaController::class, 'toComplete'])->name('tasks.toComplete');

