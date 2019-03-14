<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mainhomepage');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin',
    'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
}
);

//Еще не реализован, для поиска работы
Route::group(['prefix' => 'aspirant', 'namespace' => 'Aspirant',
    'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard')->name('aspirant.index');
}
);

//Еще не реализован, для работодателя
Route::group(['prefix' => 'employer', 'namespace' => 'Employer',
    'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard')->name('employer.index');
}
);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
