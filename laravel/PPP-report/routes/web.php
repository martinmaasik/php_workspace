<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

// USER ROUTES

Route::get('/home', 'User\HomeController@index')->name('home');
Route::prefix('PPP')->group(function() {
    Route::get('submit', 'User\PPP\SubmitController@index')->name('PPP.submit.get');
    Route::post('submit', 'User\PPP\SubmitController@select')->name('PPP.submit.select');
    Route::post('submitted', 'User\PPP\SubmitController@submit')->name('PPP.submit');
    Route::get('view', 'User\PPP\ViewController@index')->name('PPP.view.get');
    Route::post('view', 'User\PPP\ViewController@view');
    Route::get('edit', 'User\PPP\EditController@index')->name('PPP.edit.get');
    Route::post('edit', 'User\PPP\EditController@select')->name('PPP.edit.select');
    Route::post('edited', 'User\PPP\EditController@submit')->name('PPP.edit');
});

// ADMIN ROUTES

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/create', 'Admin\AdminController@indexCreate')->name('create.get');
    Route::post('/create', 'Admin\AdminController@create')->name('create');
    Route::get('/edit', 'Admin\AdminController@indexEdit')->name('edit.get');
    Route::post('/edit', 'Admin\AdminController@selectEdit')->name('edit.select');
    Route::post('/edited', 'Admin\AdminController@edit')->name('edit');
    Route::get('/success', 'Admin\AdminController@success')->name('success');
    Route::get('/failed', 'Admin\AdminController@failed')->name('failed');
    Route::get('/overview', 'Admin\OverviewController@indexOverview')->name('overview.get');
    Route::post('/overview', 'Admin\OverviewController@filter')->name('overview.filter');

    Route::get('/test', 'Admin\OverviewController@indexTest')->name('test.get');
});
