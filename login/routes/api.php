<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
200: OK. The standard success code and default option.
201: Object created. Useful for the store actions.
204: No content. When an action was executed successfully, but there is no content to return.
206: Partial content. Useful when you have to return a paginated list of resources.
400: Bad request. The standard option for requests that fail to pass validation.
401: Unauthorized. The user needs to be authenticated.
403: Forbidden. The user is authenticated, but does not have the permissions to perform an action.
404: Not found. This will be returned automatically by Laravel when the resource is not found.
500: Internal server error. Ideally you're not going to be explicitly returning this, but if something unexpected breaks, this is what your user is going to receive.
503: Service unavailable. Pretty self explanatory, but also another code that is not going to be returned explicitly by the application.
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => ['api', 'cors'], 'prefix' => 'api'], function(){
//     Route::post('emergency', 'EmergencyController@getPanicData');
// });

// Route::get('emergency', 'EmergencyController@postPanicData');
Route::post('emergency', 'EmergencyController@postPanicData');

//get panic data
Route::get('panicdata', 'EmergencyController@getActiveEmergency');
Route::get('panicdata/{id}', 'EmergencyController@show');
Route::post('panicdata', 'EmergencyController@store');
Route::put('panicdata/{id}', 'EmergencyController@update');
Route::delete('panicdata/{id}', 'EmergencyController@delete');
Route::get('getEmergencyData/{ref}', 'EmergencyController@getPanicData');

