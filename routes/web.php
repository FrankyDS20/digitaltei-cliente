<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DataTablesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicController;

Route::get('/', HomeController::class)->name('home');
Route::resource('contactanos',ContactController::class)->parameters(['contactanos'=>'contact'])->names('contact');
Route::resource('nosotros',AboutController::class)->parameters(['nosotros'=>'about'])->names('about');
Route::resource('sesion',LoginController::class)->parameters(['sesion'=>'login'])->names('login');
Route::resource('servicios',ServicController::class)->parameters(['servicios'=>'servic'])->names('servic');


// Route::resource('empleados',EmployeeController::class)->
// parameters(['empleados'=>'employee'])->names('employee');

 Route::resource('productos',ProductController::class)-> parameters(['productos'=>'product'])->names('product');

Route::get('datatable/employee', [DataTablesController::class, 'employee'])->name('datatable.employee');
Route::get('datatable/product', [DataTablesController::class, 'product'])->name('datatable.product');
// Route::delete('/registros/{id}', 'RegistroController@destroy')->name('registros.destroy');
// Route::view("ejemplo","ejemplo")->name('ejemplo');


Route::get('productos/categoria/{id}', [ProductController::class, 'productbycategory'])->name('products.by.category');
