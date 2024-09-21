<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductUploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [ProductUploadController::class, 'showUploadForm'])->name('image.upload');
Route::post('/upload', [ProductUploadController::class, 'uploadImage'])->name('image.upload.post');
Route::get('/images', [ProductUploadController::class, 'listImages'])->name('image.list');
