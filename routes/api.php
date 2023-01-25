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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/products',function(Request $request){
    return [
        ['code'=>'PF1','name'=>'Cool Water','price'=>40],
        ['code'=>'PF1','name'=>'Lataffa','price'=>80],
        ['code'=>'PF1','name'=>'CK','price'=>50],
    ]
})