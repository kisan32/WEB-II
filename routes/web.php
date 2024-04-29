<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Students.create',[StudentController::class,'addnew'])->name('stinfo.Add');
Route::post('Students',[StudentController::class,'store'])->name('stinfo.store');
Route::get('Students',[StudentController::class,'index'])->name('stinfo.index');