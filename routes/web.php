<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\TopbarController;
use App\Http\Controllers\Admin\TopbariconController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutimgController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FeatureimgController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/courses', [MainController::class, 'courses'])->name('courses');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){


    Route::resource('topbar', TopbarController::class);
    Route::resource('topbaricon', TopbariconController::class);
    Route::resource('about', AboutController::class);
    Route::resource('aboutimg', AboutimgController::class);
    Route::resource('feature', FeatureController::class);
    Route::resource('featureimg', FeatureimgController::class);
    Route::resource('course', CourseController::class);
    Route::resource('teacher', TeacherController::class);
    Route::resource('student', StudentController::class);
    Route::resource('contact', ContactController::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
