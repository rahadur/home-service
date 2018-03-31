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

Route::get('about', function() {

  return view('pages.about');
});



// Admin Routs
Route::prefix('admin')->group(function() {
    Route::get('dashboard  ', 'AdminController@dashboard');
    Route::get('packages', 'PackageController@index');
    Route::get('packages/create', 'PackageController@create');
    Route::post('packages', 'PackageController@store');
    Route::get('packages/{id}/edit', 'PackageController@edit');
    Route::match(['put', 'patch'], 'packages/{id}', 'PackageController@update');
    Route::delete('packages/{id}', 'PackageController@destroy');

    Route::get('orders', 'OrderController@index');

    Route::get('workers', 'WorkerController@index');


    Route::get('customers', 'CustomerController@index');



    Route::get('problems', 'ProblemController@adminProblem');

    Route::get('profile', 'ProfileController@admin');

});




Route::prefix('users')->group(function(){
  Route::get('dashboard', 'UserController@dashboard');

    Route::get('order', 'UserController@order');

    Route::get('problems', 'ProblemController@index');
    Route::get('problems/create', 'ProblemController@create');
    Route::post('problems', 'ProblemController@store');


    Route::get('profile', 'ProfileController@user');

});





Route::prefix('workers')->group(function(){
    Route::get('dashboard', 'WorkerController@dashboard');
    Route::get('works', 'WorkerController@work');

    Route::get('profile', 'ProfileController@worker');

});



Route::get('departments/{id}/{name}', 'DepartmentController@packages')
->where('name', '[A-Za-z]+');

Auth::routes();

// Packages Route
Route::get('packages/{id}/{slug}', 'PackageController@view');



Route::get('/home', 'HomeController@index')->name('home');


Route::post('orders/checkout', 'OrderController@hire');
Route::get('orders/checkout', 'OrderController@checkout');
Route::get('orders/cancel', 'OrderController@cancel');
Route::post('orders', 'OrderController@store');
Route::match(['put', 'patch'], 'orders/accept', 'OrderController@accept');
