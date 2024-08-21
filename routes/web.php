<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/submission',SubmissionController::class);