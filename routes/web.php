<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('index');
    Route::get('/create', 'CreateController')->name('create');
    Route::post('/', 'StoreController')->name('store');
    Route::get('/{id}', 'ShowController')->name('show');
    Route::get('/{id}/edit', 'EditController')->name('edit');
    Route::patch('/{id}', 'UpdateController')->name('update');
    Route::delete('/{id}', 'DeleteController')->name('delete');
});

Auth::routes();
