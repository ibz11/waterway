<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SmsController;
use Livewire\Component;

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

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/', [PagesController::class,'home']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect',[PagesController::class,'redirect']);
//search date
route::get('/search',[PagesController::class,'search']);
route::post('/booking/{id}',[PagesController::class,'booking']);
route::get('/booking1/{id}',[PagesController::class,'booking1']);
//Admin Routes for functionalities
Route::get('users',[AdminController::class,'users']);
Route::get('showusers',[AdminController::class,'showusers']);
Route::get('deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('createuser',[AdminController::class,'createuser']);
Route::post('newuser',[AdminController::class,'newuser']);
Route::get('chat',[AdminController::class,'chat']);

//Route::get('messages',ListsConversationsAndMessages::class)->name('messages');
Route::get('sms',[SmsController::class,'sms']);
Route::get('sendSMS',[SmsController::class,'sendSMS']);

//Therapist  Routes and Controls
Route::get('events',[TherapistController::class,'events']);
Route::post('createevent',[TherapistController::class,'createevent']);

//Route::resource('/event',[EventController::class]);
Route::post('confirm',[PagesController::class,'confirm']);