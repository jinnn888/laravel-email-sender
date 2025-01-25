<?php

use Illuminate\Support\Facades\Route;
use App\Mail\EmailSender;

Route::get('/', function () {

    // $details = 'nothing here';
    // Mail::to('tuyor.jynchris@gmail.com')->send(new EmailSender($details));


    return view('welcome');
});

