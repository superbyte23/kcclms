<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// custom routes
Route::get('/classroom/{id}/students', [ClassroomController::class, 'students'])->name('classroom.students');
Route::get('/classroom/{id}/files', [ClassroomController::class, 'files'])->name('classroom.files');
Route::get('/classroom/{id}/academic', [ClassroomController::class, 'academic'])->name('classroom.academic');
Route::get('/classroom/{id}/settings', [ClassroomController::class, 'settings'])->name('classroom.settings');


Route::resource('classroom', ClassroomController::class)->middleware('auth');
Route::resource('subject', SubjectController::class)->middleware('auth');
Route::resource('course', CourseController::class)->middleware('auth');
Route::resource('student', StudentController::class)->middleware('auth');