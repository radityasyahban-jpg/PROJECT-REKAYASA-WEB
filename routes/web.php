
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswacontroller;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AdminProjectController;

// Halaman Utama
Route::get('/', function () {
    return view('page.home');
})->name('home');

// Halaman Profile
Route::get('/profile', [Mahasiswacontroller::class, 'index'])
    ->name('profile');

// Halaman About
Route::get('/about', function () {
    return view('page.about');
})->name('about');

// Halaman Project untuk pengunjung
Route::get('/projects', [ProjectsController::class, 'index'])
    ->name('projects');

Route::get('/projects/{id}', [ProjectsController::class, 'show'])
    ->name('projects.show');

// Halaman Contact
Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::post('/contact', function () {
    return redirect()->route('contact')
        ->with('success', 'Pesan berhasil dikirim!');
})->name('contact.submit');

// Halaman Admin
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/', function () {
        return view('admin.home');
    })->name('dashboard');

    // CRUD Data Project
    Route::resource('projects', AdminProjectController::class)->except(['show']);

});

// Logout sederhana
Route::get('/logout', function () {
    return redirect()->route('home');
})->name('logout');
