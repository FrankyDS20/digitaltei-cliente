<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

Route::controller(EmployeeController::class)->group(
    function () {
        Route::get('empleados','index')->name('empleados.index');
        Route::get('empleados/nuevo','created')->name('empleados.created');
        Route::get('empleados/{employee}/edit','edit')->name('empleados.edit');
        Route::post('empleados','store')->name('empleados.store');
        Route::put('empleados/{employee}','update')->name('empleados.update');
        
        Route::delete('empleados/{employee}','destroy')->name('empleados.destroy');
        // Route::get('empleados/{employee}','show')->name('empleados.show');

    }
);
