<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('planning_portal.index');
});


Route::post('/contactus/mail/send' , [MailController::class, 'contact_us_mail_send'])->name('contactus.mail.send');
