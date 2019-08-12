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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    }

    return view('my-first-view');
});

Route::get('/saydice/{guess}', function($guess)
{
	$random_number = rand(1, 6);
	$data = array(
		'guess' => $guess,
	  	'random_number' => $random_number
	);

	return view('rolldice')->with($data);
});

Route::resource('posts', 'PostsController');