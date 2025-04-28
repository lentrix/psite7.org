<?php

use App\Http\Controllers\InvitationGeneratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/invitation-generator', [InvitationGeneratorController::class, 'index']);
Route::post('/invitation-generator',[InvitationGeneratorController::class, 'generate']);
