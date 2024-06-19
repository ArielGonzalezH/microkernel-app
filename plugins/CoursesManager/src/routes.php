<?php

use Illuminate\Support\Facades\Route;

// Asegúrate de que el namespace apunte correctamente al controlador
Route::group(['namespace' => 'plugins\CoursesManager\Controllers'], function () {
    Route::get('courses', 'CourseController@index')->name('courses.index');
    Route::get('courses/create', 'CourseController@create')->name('courses.create');
    Route::post('courses', 'CourseController@store')->name('courses.store');
    Route::get('courses/{id}/edit', 'CourseController@edit')->name('courses.edit');
    Route::put('courses/{id}', 'CourseController@update')->name('courses.update');
    Route::delete('courses/{id}', 'CourseController@destroy')->name('courses.destroy');
});
