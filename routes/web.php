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

Route::get('/', 'PagesController@login')->name('login');
Route::post('/', 'PagesController@Postlogin')->name('postLogin');

// route to admin dashboards
Route::get('/superadmin/dashboard', 'PagesController@superadminIndex')->name('superadmin_index');
Route::get('/normaldmin/dashboard', 'PagesController@normaladminIndex')->name('normaladmin_index');
Route::get('/logout', 'PagesController@logout')->name('logout');

// busestypes

Route::get('/busestypes/create', 'BustypeController@createBusesTypes')->name('create-buses-types');
Route::post('/busestypes/create', 'BustypeController@postCreateBusesTypes')->name('post-create-buses-types');
Route::get('/busestypes/all', 'BustypeController@allBustypes')->name('all-bustypes');

// buses

Route::get('/buses/create', 'BusController@createBuses')->name('create-buses');
Route::post('/buses/create', 'BusController@postCreateBuses')->name('post-create-buses');
Route::get('/buses/all', 'BusController@allBuses')->name('all-buses');

// drivers
Route::get('/drivers/create', 'DriversController@createDrivers')->name('create-drivers');
Route::post('/drivers/create', 'DriversController@postCreateDrivers')->name('post-create-drivers');
Route::get('/drivers/all', 'DriversController@allDrivers')->name('all-drivers');

// mates
Route::get('/mates/create', 'MatesController@createMates')->name('create-mates');
Route::post('/mates/create', 'MatesController@postCreateMates')->name('post-create-mates');
Route::get('/mates/all', 'MatesController@allMates')->name('all-mates');

// departing points
Route::get('/departing/points/create', 'DepartingpointController@createDepartingPoints')->name('create-departingpoints');
Route::post('/departing/points/create', 'DepartingpointController@postCreateDepartingPoints')->name('post-create-departingpoints');
Route::get('/departing/points/all', 'DepartingpointController@allDepartingPoints')->name('all-departingpoints');

// destination points
Route::get('/destination/points/create', 'DestinationpointController@createDestinationPoints')->name('create-destinationpoints');
Route::post('/destination/points/create', 'DestinationpointController@postCreateDestinationPoints')->name('post-create-destinationpoints');
Route::get('/destination/points/all', 'DestinationpointController@allDestinationPoints')->name('all-destinationpoints');


//trips
Route::get('/trips/create/', 'TripsController@createNewTrip')->name('create-new-trip');
Route::post('/trips/create/', 'TripsController@postCreateNewTrip')->name('post-create-new-trip');
Route::get('/trips/all/', 'TripsController@allTrips')->name('all-trips');

?>