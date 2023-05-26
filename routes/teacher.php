<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\DaycareController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Teacherscontroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| teacher Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('teachers')->name('teacher.')->group(function(){
 Route::middleware('isTeacher')->group(function(){
     Route::get('/files/add', [Teacherscontroller::class, 'create'])->name('files.create');
     Route::post('/files/add', [Teacherscontroller::class, 'store'])->name('files.store');
     Route::delete('/files/{id}', [Teacherscontroller::class, 'delete']) ->name('file.delete');
     Route::get('/files', [Teacherscontroller::class, 'index'])->name('files.index') ;
     Route::get('teachers', [AuthenticatedSessionController::class, 'teacherdashboard'])->name('dashboard');
     Route::get('/galleries/create', [Teacherscontroller::class, 'creategallery'])->name('galleries.create');
     Route::post('/galleries', [Teacherscontroller::class, 'storegallery'])->name('galleries.store');
     Route::delete('/galleries/{id}', [Teacherscontroller::class, 'destroygallery'])->name('galleries.destroy');
     Route::get('/galleries', [Teacherscontroller::class, 'indexgallery'])->name('galleries.index');
     Route::get('/files', [Teacherscontroller::class, 'index'])->name('files.index') ;
     Route::get('/file/{filename}',[Teacherscontroller::class, 'show'])->name('file.show');
     Route::get('/file/download/{filename}', [Teacherscontroller::class, 'download'])->name('file.download');
     Route::post('/timetable/store', [Teacherscontroller::class, 'storetimetable'])->name('timetable.store');
     Route::get('/timetable/create', [Teacherscontroller::class, 'createtimetable'])->name('timetable.create');
     Route::get('/timetable', [Teacherscontroller::class, 'indextimetable'])->name('timetable.index');
     Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');
     Route::post('/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');
Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index');


 Route::get('/students', [Teacherscontroller::class, 'indexchild'])->name('students.index');
    Route::get('/students/create', [Teacherscontroller::class, 'createchild'])->name('students.create');
    Route::post('/students', [Teacherscontroller::class, 'storechild'])->name('students.store');
    Route::get('/students/{id}/edit', [Teacherscontroller::class, 'editchild'])->name('students.edit');
    Route::put('/students/{id}', [Teacherscontroller::class, 'updatechild'])->name('students.update');
    Route::delete('/students/{id}', [Teacherscontroller::class, 'destroychild'])->name('students.destroy');

 Route::get('/dads', [Teacherscontroller::class, 'indexDad'])->name('dads.index');
    Route::get('/dads/create', [Teacherscontroller::class, 'createDad'])->name('dads.create');
    Route::post('/dads', [Teacherscontroller::class, 'storeDad'])->name('dads.store');
    Route::get('/dads/{id}', [Teacherscontroller::class, 'showDad'])->name('dads.show');
    Route::get('/dads/{id}/edit', [Teacherscontroller::class, 'editDad'])->name('dads.edit');
    Route::put('/dads/{id}', [Teacherscontroller::class, 'updateDad'])->name('dads.update');
    Route::delete('/dads/{id}', [Teacherscontroller::class, 'destroyDad'])->name('dads.destroy');
Route::get('all_comments', [Teacherscontroller::class, 'indexcomment'])->name('comments.all_comments');
Route::get('/events', [Teacherscontroller::class, 'indexevent'])->name('events.index');

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');

});


             require __DIR__.'/teacher_auth.php';



});






