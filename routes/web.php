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

//Route::get('/', function () {
 //  return view('welcome');
//});

//Route::get('/notebookshome', function () {
  //  return view('notebookview.frontpage');
//});




//Route::get('/notebooks', 'testcontrol@index');



//Route::get('/notebooks/create', 'testcontrol@create');
//Route::post('/notebooks', 'testcontrol@store');



//Route :: get('/notebooks/edit/{id}',"testcontrol@edit");
//Route :: post('/notebooks/{id}',"testcontrol@edit");


//Route :: delete('/notebooks/{id}',"testcontrol@destroy");












Route::group(['middleware'=>'auth'],function(){
    Route::get('/', function () {
        return view('notebookview.frontpage');
    });

 //   Route::get('/home', function () {
  //      return view('notebookview.frontpage');
  //  });




    Route::get('/notebooks', 'testcontrol@index');



    Route::get('/notebooks/create', 'testcontrol@create');
    Route::post('/notebooks', 'testcontrol@store');



    Route :: get('/notebooks/edit/{id}',"testcontrol@edit");
    Route :: post('/notebooks/{id}',"testcontrol@edit");


    Route :: delete('/notebooks/{id}',"testcontrol@destroy");

});




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



