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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {


    for($i = 0; $i < 99; $i++)
    {
        $posts = App\Models\Post::where('id', '>', $i)->take(10)->get()->toJson();
        dd($posts);
        $res = App\Models\Mixes::create([
            'items' => $posts,
        ]);
    }
});
