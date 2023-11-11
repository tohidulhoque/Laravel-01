<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get("/", function () {
    return view("Welcome");
});


Route::get('/hello', [UserController::class,'hello']);
