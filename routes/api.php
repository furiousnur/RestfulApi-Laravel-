<?php

//use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


/*Route::apiResource('/class', 'Api\ClassController');
Route::apiResource('/subject', 'Api\SubjectController');
Route::apiResource('/student', 'Api\StudentController');


Route::apiResource('/teams' , 'Api/TeamsController');*/
Route::apiResource('/products', 'ProductController');

Route::group(['prefix'=>'products'], function (){
   Route::apiResource('/{product}/reviews', 'ReviewController');
});