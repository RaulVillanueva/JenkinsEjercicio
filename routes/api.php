<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('alumnos', "\App\Http\Controllers\AlumnosController@getMethod");//@index originalmente

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});