<?php

use Illuminate\Support\Facades\Route;
use App\Mail\sendTicket;

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

Route::get('/', [App\Http\Controllers\website\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\website\HomeController::class, 'index'])->name('website.home');
Route::get('/majors', [App\Http\Controllers\website\HomeController::class, 'majors'])->name('website.majors');

Auth::routes();
Route::group(['middleware' => ['auth:web']], function () {
        Route::get('/profile', [App\Http\Controllers\website\HomeController::class, 'profile'])->name('website.profile');
});

Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.home');
        Route::get('/login', [App\Http\Controllers\Dashboard\AccountController::class, 'login'])->name('dashboard.login');
        Route::post('/login', [App\Http\Controllers\Dashboard\AccountController::class, 'submit'])->name('dashboard.submit');
        Route::post('/logout', [App\Http\Controllers\Dashboard\AccountController::class, 'logout'])->name('dashboard.logout');
        Route::middleware(['auth:admin'])->group( function() {
                Route::resource('faqs', App\Http\Controllers\Dashboard\faqsController::class);
                Route::resource('exams', App\Http\Controllers\Dashboard\examsController::class);
        });

Route::resource('events', App\Http\Controllers\eventController::class);

Route::resource('invoices', App\Http\Controllers\invoicesController::class);
});


Route::resource('tickets', App\Http\Controllers\ticketsController::class);

Route::get('/mail', function () {
        

        $ticket = [

                'title' => 'Mail from ItSolutionStuff.com',
        
                'body' => 'This is for testing email using smtp'
        
            ];
        
        
            $res=\Mail::to("mo7ammed.ftta7@gmail.com")->send(new \App\Mail\sendTicket($ticket));

        dd($res);
    
        return view("emails.ticket");
    });