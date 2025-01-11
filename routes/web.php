<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormSubmissionController;

Route::get('/', function () {
    return view('homepage');
});

// Form submission route
Route::post('/form-submission', [FormSubmissionController::class, 'store'])->name('form.store');


Route::get('/thankyou', function () {
    return view('thankyoupage');
})->name('thankyou');
