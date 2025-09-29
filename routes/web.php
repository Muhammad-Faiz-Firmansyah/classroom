<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/student");
});
Route::resource("/tasks", TaskController::class)->name("index","student.dashboard");
Route::post('/logout', function () {
    Auth::guard('student')->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/'); // arahkan ke login umum/student login
})->name('student.logout');
