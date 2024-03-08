<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/taskschedule', function () {
    return view('taskshedule');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/deposit', [App\Http\Controllers\DepositController::class,'deposit'])->name('deposit');
Route::post('/mark-as-read', [App\Http\Controllers\DepositController::class,'markAsRead'])->name('mark-as-read');
Route::get('email-test', function(){$details['email'] = 'nutanp230@gmail.com';
dispatch(new App\Jobs\SendEmailJob($details));
dd('done');
});
Route::post('/addData',[App\Http\Controllers\TaskAddController::class,'addTask'])->name('addData');


//for handling error exception
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::post('/users/search', [App\Http\Controllers\UserController::class, 'search'])->name('users.search');
Route::get('/event-created', [App\Http\Controllers\UserController::class, 'placeEvent']);
Route::get('/cache-event', [App\Http\Controllers\UserController::class, 'cacheEvent']);




