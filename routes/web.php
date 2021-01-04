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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('client.index');
// });

//Calling Main Page
Route::get('/','ClientController@index');
Route::get('/team','ClientController@team');
Route::get('/events','ClientController@event');




Auth::routes([
    'register' => false
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    //add event
    Route::get('add-event','EventController@index');
    //upload event
    Route::post('add-event','EventController@store');
    //Delete
    Route::get('/delete-event/{event}','EventController@delete');
    //edit
    Route::get('/edit-event/{event}','EventController@edit');
    Route::post('/edit-event/{event}','EventController@update');


    //---------
    //add Member
    Route::get('add-member','TeamController@index');
    //upload Member
    Route::post('add-member','TeamController@store');
    Route::get('/edit-member/{team}','TeamController@edit');
    Route::post('/edit-member/{team}','TeamController@update');
    Route::get('/delete-member/{team}','TeamController@delete');

    //-------------------
    //Queries
    //Display Queries in backend
    Route::get('display-queries','QueryController@index');
    //update Query
    Route::get('solve-query/{query}','QueryController@update');
    //Delete Query
    Route::get('delete-query/{query}','QueryController@delete');

    //--------------------
    //Subscriptions
    //Display Subscriptions
    Route::get('subscriptions','SubscriptionController@index');


});

Route::post('/submit-query','QueryController@store');
Route::post('/subscription','SubscriptionController@store');