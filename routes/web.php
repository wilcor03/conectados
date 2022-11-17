<?php

use Illuminate\Support\Facades\Route;
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

/*Route::get('/', function () {
    $collect = collect([
        [
            'id' => 1,
            'name' => 'Hello World',
            'email' => 'hello@world.com',

        ],
        [
            'id' => 2,
            'name' => 'Hello World2',
            'email' => 'hello@world.com',
        ],
        [
            'id' => 3,
            'name' => 'Hello World3',
            'email' => 'hello@world.com',
        ]
    ]);

    return response()->json(\App\Helpers\CollectionHelper::paginate($collect, 2));

    //print_r();//\Illuminate\Http\JsonResponse::create(\App\Helpers\CollectionHelper::paginate($collect, 2));
});*/

Route::get('{any}', function (){
    return view('welcome');    
})->where('any', '.*');
