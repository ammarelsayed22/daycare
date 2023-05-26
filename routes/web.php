<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DadController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\DaycareController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/daycare', function () {
    return view('add_daycare');
});
Route::post('/daycares', [DaycareController::class, 'store'])->name('daycare.store');
Route::get('all_comments', [CommentController::class, 'index'])->name('comments.all_comments');
Route::get('/files', [FilesController::class, 'index'])->name('files.index') ;
Route::get('/file/{filename}',[FilesController::class, 'show'])->name('file.show');
Route::get('/file/download/{filename}', [FileController::class, 'download'])->name('file.download');



Route::prefix('auth')->name('auth.')->group(function(){
    Route::middleware('auth')->group(function(){
        Route::get('dashboard', [AuthenticatedSessionController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('storeTeacher', [AuthenticatedSessionController::class, 'storeTeacher'])->name('storeTeacher');
    Route::get('createTeacher', [AuthenticatedSessionController::class, 'createTeacher'])->name('createTeacher');
    Route::get('teachers', [AuthenticatedSessionController::class, 'indexTeacher'])->name('teachers.index1');
    Route::get('teacher/{id}', [AuthenticatedSessionController::class, 'editteacher'])->name('teachers.edit');
    Route::put('teachers/{id}', [AuthenticatedSessionController::class, 'updateTeacher'])->name('teachers.update');
    Route::get('teachers/{id}', [AuthenticatedSessionController::class, 'show'])->name('teachers.show');
    Route::delete('teachers/{id}', [AuthenticatedSessionController::class, 'destroyTeacher'])->name('teachers.destroy');
    Route::get('/dads', [AuthenticatedSessionController::class, 'indexdad'])->name('dads.index');
    Route::get('/dads/create', [DadController::class, 'create'])->name('dads.create');
    Route::post('/dads', [DadController::class, 'store'])->name('dads.store');
    Route::get('/dads/{id}', [DadController::class, 'show'])->name('dads.show');
    Route::get('/dads/{id}/edit', [DadController::class, 'edit'])->name('dads.edit');
    Route::put('/dads/{id}', [DadController::class, 'update'])->name('dads.update');
    Route::delete('/dads/{id}', [DadController::class, 'destroy'])->name('dads.destroy');
    Route::get('/timetable', [DaycareController::class, 'indextimetable'])->name('timetable.index');
    Route::get('/all_contacts', [ContactController::class, 'all_contacts'])->name('dashboard.all_contacts');
    Route::get('/files', [FilesController::class, 'index'])->name('files.index');
    Route::get('/file/{filename}',[FilesController::class, 'show'])->name('file.show');
    Route::get('/students', [Childcontroller::class, 'index'])->name('students.index');
    Route::get('/students/create', [Childcontroller::class, 'create'])->name('students.create');
    Route::post('/students', [Childcontroller::class, 'store'])->name('students.store');
    Route::get('/students/{id}/edit', [Childcontroller::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [Childcontroller::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [Childcontroller::class, 'destroy'])->name('students.destroy');
    Route::get('/galleries', [PhotoController::class, 'index'])->name('galleries.index');
    Route::get('/dashboard', [AuthenticatedSessionController::class, 'index'])->name('dashboard');
Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index');
Route::get('/events', [EventController::class, 'index'])->name('events.index');


});


});

require __DIR__.'/auth.php';
require __DIR__.'/teacher.php';
require __DIR__.'/dad.php';










