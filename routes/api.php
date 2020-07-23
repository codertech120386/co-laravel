<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('organisations', 'OrganisationsController@store');
Route::get('organisations/{name}', 'OrganisationsController@fetch');
