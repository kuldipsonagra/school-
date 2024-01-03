<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AlreadyLoggedIn;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\ExamController;

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

Route::get('/', function () {
    return view('login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::get('/home', [DashboardController::class, 'total_students'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginstore'])->name('loginstore');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registerstore'])->name('registerstore');
Route::match(['get', 'post'], '/logoutF', [LoginController::class, 'logoutF'])->name('logoutF');
Route::get('/report/{pid}', [ReportController::class, 'report1'])->name('report1');

Route::resource('student', StudentController::class);
Route::resource('courses', CoursesController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('batches', BatchController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('payments', PaymentController::class);
// routes/web.php


Route::get('/timetable', [TimetableController::class, 'index'])->name('timetable.index');
Route::get('/timetable/create', [TimetableController::class, 'create'])->name('timetable.create');
Route::post('/timetable', [TimetableController::class, 'store'])->name('timetable.store');
// routes/web.php


Route::get('/exams', [ExamController::class, 'index'])->name('exams.index');
Route::get('/exams/create', [ExamController::class, 'create'])->name('exams.create');
Route::post('/exams', [ExamController::class, 'store'])->name('exams.store');
Route::get('/exams/{id}/edit', [ExamController::class, 'edit'])->name('exams.edit');
Route::put('/exams/{id}', [ExamController::class, 'update'])->name('exams.update');
Route::delete('/exams/{id}', [ExamController::class, 'destroy'])->name('exams.destroy');

