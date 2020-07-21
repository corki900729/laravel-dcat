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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
$api = app('Dingo\Api\Routing\Router');


Route::options('/{all}', function(Request $request) {
        $origin = $request->header('ORIGIN', '*');
        header("Access-Control-Allow-Origin: $origin");
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        header('Access-Control-Allow-Headers: Origin, Access-Control-Request-Headers, SERVER_NAME, Access-Control-Allow-Headers, cache-control, token, X-Requested-With, Content-Type, Accept, Connection, User-Agent, Cookie');
    })->where(['all' => '([a-zA-Z0-9-]|/)+']);

$api->version('v1', function ($api) {
    $api->group([
        'namespace' => 'App\Api\Controllers',
//        'middleware' => 'App\Http\Middleware\EnableCrossRequestMiddleware'
        ], function ($api){
        $api->get('getSms','PublicController@index');



    });
    $api->post('show', 'App\Api\Controllers\UserController@show');
});
