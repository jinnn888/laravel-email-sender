<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailSenderController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('email-send', MailSenderController::class)->name('email.send');