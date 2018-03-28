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

  $departments = App\Department::all();

    return view('pages.index', ['departments' => $departments]);
});
Route::get('departments/{id}/{name}', 'DepartmentController@packages')
->where('name', '[A-Za-z]+');

// Admin Routs
Route::prefix('admin')->group(function() {
    Route::get('dashboard  ', 'AdminController@dashboard');
    Route::get('packages', 'PackageController@index');
    Route::get('packages/create', 'PackageController@create');
    Route::post('packages', 'PackageController@store');
    Route::get('packages/{id}/edit', 'PackageController@edit');
    Route::match(['put', 'patch'], 'packages/{id}', 'PackageController@update');
    Route::delete('packages/{id}', 'PackageController@destroy');


    Route::get('workers', 'WorkerController@index');

    Route::get('customers', 'CustomerController@index');

});


Route::prefix('users')->group(function(){
    Route::get('dashboard', 'UserController@dashboard');
});

Route::prefix('workers')->group(function(){
    Route::get('dashboard', 'WorkerController@dashboard');
});

// Packages Route

Route::get('packages/{id}/{slug}', 'PackageController@view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('orders/checkout', 'OrderController@hire');
Route::get('orders/checkout', 'OrderController@checkout');
Route::post('orders', 'OrderController@store');
