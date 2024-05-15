<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berarti mengambil fungsi didalam controller 
//route menggunakan resources berarti mengambil class 
//route dengan menggunakan name atau by name
Route::get('/admin', [AdminController::class, 'index']);
