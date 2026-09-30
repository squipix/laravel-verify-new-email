<?php

use Illuminate\Support\Facades\Route;
use Squipix\LaravelVerifyNewEmail\Http\VerifyNewEmailController;

Route::get('pendingEmail/verify/{token}', [VerifyNewEmailController::class, 'verify'])
    ->middleware(['web', 'signed'])
    ->name('pendingEmail.verify');
