<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Supprimez la première définition de la route '/'
// Route::get('/', function () {
//     return view('welcome');
// });

// Utilisez uniquement la définition avec le contrôleur
Route::get('/', [HomeController::class, 'home']);


?>