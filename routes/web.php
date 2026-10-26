<?php
// landing
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ContactController;

// admin
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminCalendarController;
use App\Http\Controllers\AdminForm_ElementsController;
use App\Http\Controllers\AdminPage_LoginController;
use App\Http\Controllers\AdminTableController;
use App\Http\Controllers\AdminNotifController;
use Illuminate\Support\Facades\Route;

// landing
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/about', [AboutController::class, 'index'])->name('About');
Route::get('/courses', [CourseController::class, 'index'])->name('Courses');
Route::get('/blog', [BlogController::class, 'index'])->name('Blog');
Route::get('/feature', [FeatureController::class, 'index'])->name('Feature');
Route::get('/contact', [ContactController::class, 'index'])->name('Contact');

// admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::get('/calendar', [AdminCalendarController::class, 'index'])->name('calendar');
    Route::get('/form-elements', [AdminForm_ElementsController::class, 'index'])->name('form-elements');
    Route::get('/login', [AdminPage_LoginController::class, 'index'])->name('login');
    Route::get('/table', [AdminTableController::class, 'index'])->name('table');
    Route::get('/notif', [AdminNotifController::class, 'index'])->name('notif');
});
