<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['admin_db'])->group(function(){
    Route::get('/centres',[AdminController::class, 'centres'])->name('centres');
    Route::post('/usuaris',[AdminController::class, 'usuaris'])->name('usuaris');
    Route::get('/alumnat',[AdminController::class, 'alumnat'])->name('alumnat');
    Route::get('/professorat',[AdminController::class, 'professorat'])->name('professorat');
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
});