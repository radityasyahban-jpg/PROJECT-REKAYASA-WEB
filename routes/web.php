
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswacontroller;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminAuthController;

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

// Halaman Projects Pengunjung
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

// Login Admin
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

// Alias login untuk middleware Laravel
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Halaman Admin (harus login)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/', function () {
        return view('admin.home');
    })->name('dashboard');

    // CRUD Projects
    Route::resource('projects', AdminProjectController::class)
        ->except(['show']);

    // Logout
    Route::post('/logout', [AdminAuthController::class, 'logout'])
        ->name('logout');
});
