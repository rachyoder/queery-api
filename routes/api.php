<?php

use App\Http\Controllers\AuthController;
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

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');
Route::post('/titlesearch', 'SearchController@titleSearch');
Route::post('/article/new', 'ArticleController@store');

Route::get('/index', 'ArticleController@index');
Route::get('/article/{article_id}', 'ArticleController@show');

Route::middleware('auth:api')->group(function () {
    Route::get('/logout', 'API\AuthController@logout');
});
