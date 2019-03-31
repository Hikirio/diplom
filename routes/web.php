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
Route::get('/offers','Offers\OfferController@offer');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/employers', 'Admin\EmployersController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
