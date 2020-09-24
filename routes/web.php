<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

// Route + verbe http
Route::resource('tasks', TaskController::class);

// nommer la route permettra de rediriger vers une route :
    //redirect()->route('tasks.index');




// Appelle la méthode 'showTask' du controller 'TaskController'
//Route::get('tasks/methode/{id}', [TaskController::class, 'showTask']);


Route::get('tasks/{id}', function ($id) {
    return 'task ' . $id ;  // l'id pourrait être une expression régulière pour dire que c'est numérique.
});



Route::get('tasks/view/{id}', function ($id) {
    return view('tasks', ['id' => $id]);
});
