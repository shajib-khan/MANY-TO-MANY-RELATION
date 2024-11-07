<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[dbController::class,'dbView']);
