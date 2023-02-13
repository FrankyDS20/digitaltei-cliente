<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);
Route::resource('empleados',EmployeeController::class)->parameters(['empleados'=>'employee'])->names('employee');
Route::resource('productos',ProductController::class)->parameters(['productos'=>'product'])->names('product');
