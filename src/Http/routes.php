<?php

use Illuminate\Support\Facades\Route;


use Sahadat\Sfaq\Http\Controllers\TestController;
use Sahadat\Sfaq\Http\Controllers\CategoryController;
use Sahadat\Sfaq\Http\Controllers\QuestionController;


Route::get('/sfaq', [CategoryController::class, 'index']);

Route::get('/signup', function (){
    return view('sfaq::signup');
});


Route::get('/admin', [CategoryController::class, 'admin_index']);

Route::post('/create', [CategoryController::class, 'create_cat']);

Route::get('/show/{id}',[CategoryController::class, 'show']);

Route::get('/create_qus/{id}', [QuestionController::class, 'create_qus']); //to route create qus page 
Route::post('/add_question/{id}', [QuestionController::class, 'add']); 

Route::put('/edit_category/{id}', [CategoryController::class, 'update']);
Route::put('/edit_question/{id}', [QuestionController::class, 'update']);

Route::get('delete/{id}', [CategoryController::class, 'delete']);
Route::get('delete_qus/{id}', [QuestionController::class, 'delete']);
