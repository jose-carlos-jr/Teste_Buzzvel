<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\homeController;

Route::get('/', [homeController::class, 'index']);

Route::get('/page/{id}', function($id){
    return view('page');
});
