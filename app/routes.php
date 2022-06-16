<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/insertService/{name}/{price}', function ($name, $price){
    $b = new BaseController();
    return $b->insertService($name, $price);
});

Route::get('/insertUser/{name}/{surname}', function ($name, $surname){
    $b = new BaseController();
    return $b->insertUser($name, $surname);
});

Route::get('/getServicesForMaster/{id}', function ($id){
    $b = new BaseController();
    return $b->getServicesForMaster($id);
});

Route::get('/getMastersForService/{id}', function ($id){
    $b = new BaseController();
    return $b->getMastersForService($id);
});

Route::get('/getServices', function (){
    $b = new BaseController();
    return $b->getServices();
});

Route::get('/getUsers', function (){
    $b = new BaseController();
    return $b->getMasters();
});


