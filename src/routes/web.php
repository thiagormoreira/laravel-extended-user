<?php

Route::middleware(['web', 'auth'])->group(function () {

	Route::get('profile', 'ThiagoRMoreira\LaravelExtendedUser\Controllers\ProfileController@show')->name('profile');
	Route::put('profile', 'ThiagoRMoreira\LaravelExtendedUser\Controllers\ProfileController@update');
	Route::get('profile/edit', 'ThiagoRMoreira\LaravelExtendedUser\Controllers\ProfileController@edit');
	Route::delete('profile/image', 'ThiagoRMoreira\LaravelExtendedUser\Controllers\ProfileController@remove');

	Route::get('account', 'ThiagoRMoreira\LaravelExtendedUser\Controllers\AccountController@show')->name('account');
	Route::put('account', 'ThiagoRMoreira\LaravelExtendedUser\Controllers\AccountController@update');
	Route::get('account/delete', 'ThiagoRMoreira\LaravelExtendedUser\Controllers\AccountController@delete');
	Route::delete('account/delete', 'ThiagoRMoreira\LaravelExtendedUser\Controllers\AccountController@destroy');
});