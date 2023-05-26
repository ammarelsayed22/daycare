<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FilesController;
Route::prefix('dad')->name('dad.')->group(function(){
    Route::middleware('isDad')->group(function(){

Route::get('/dashboard', [DadController::class, 'index'])->name('dashboard');

Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

//back


Route::get('all_comments/edit/{id}', [CommentController::class, 'edit'])->name('dashboard.comments.edit');
Route::post('all_comments/update/{id}', [CommentController::class, 'update'])->name('dashboard.comments.update');
Route::get('all_comments/destroy/{id}', [CommentController::class, 'destroy'])->name('dashboard.comments.destroy');
Route::get('all_comments', [CommentController::class, 'index'])->name('comments.all_comments');



Route::get('/files', [DadController::class, 'indexfile'])->name('files.index') ;
Route::get('/file/{filename}',[DadController::class, 'showfile'])->name('file.show');
Route::get('/file/download/{filename}', [DadController::class, 'downloadfile'])->name('file.download');
     Route::get('/galleries', [DadController::class, 'indexgallery'])->name('galleries.index');
     Route::get('/timetable', [DadController::class, 'indextimetable'])->name('timetable.index');



 Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact/create', [ContactController::class, 'store'])->name('contact.create');
    Route::get('/all_contacts', [ContactController::class, 'all_contacts'])->name('dashboard.all_contacts');
    Route::get('/all_contacts/destroy/{id}', [ContactController::class, 'destroy'])->name('dashboard.all_contacts.destroy');


    Route::get('/students', [DadController::class, 'indexchild'])->name('students.index');

    Route::get('/payment', [DadController::class, 'indexpayment'])->name('payment.index');
Route::get('/events', [DadController::class, 'indexevent'])->name('events.index');

 });

             require __DIR__.'/dad_auth.php';


});





