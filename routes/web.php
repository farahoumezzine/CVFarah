<?php

use App\Http\Controllers\WelcomeSite;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get("/",[WelcomeSite::class,'index'])->name('WelcomeSite');
//Route::post("/send_message",[WelcomeSite::class,'sendEmail'])->name('contactsend');
