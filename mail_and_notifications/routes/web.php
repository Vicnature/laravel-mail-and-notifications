<?php
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\sendSMS;
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



Route::get('/send-mail',[EmailController::class,'sendWelcomeEmail']);
Route::get('/send-sms',[sendSMS::class,'byUserModel']);
