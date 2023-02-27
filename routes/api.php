<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/additem',[

       'uses'=> 'ItemsController@postItem'

    ]);

Route::get('/getitem',[

        'uses'=> 'ItemsController@getItems'
 
     ]);
Route::delete('/deleteItem/(id)',[

        'uses'=> 'ItemsController@deleteItem'
 
     ]);     
Route::put('/edititem/(id)',[

        'uses'=> 'ItemsController@edititem'
 
     ]);     