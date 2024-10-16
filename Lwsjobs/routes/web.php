<?php

use Illuminate\Support\Facades\Route;
use Modules\Lwsjobs\Http\Controllers\JobController;
use Modules\Lwsjobs\Http\Controllers\TagController;
use Modules\Lwsjobs\Http\Controllers\SearchController;
use Modules\Lwsjobs\Http\Controllers\LwsjobsController;

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

// Route::group([], function () {
//     Route::resource('lwsjobs', LwsjobsController::class)->names('lwsjobs');
// });

Route::get('/search', SearchController::class); //if we pass like this then invoke magic method will be called 
Route::get('/tags/{tag:name}', TagController::class); // we need to pass name becuase by default it will take id. i.e. {tag} will pass id

Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
