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
    $data = array('name' => $name);
    return view('my-first-view')->with($data);
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

Route::get('orm-test', function()
{
	$post1 = new \App\Post();
	$post1->title = 'Eloquent is awesome!';
	$post1->url='https://laravel.com/docs/5.1/eloquent';
	$post1->content  = 'It is super easy to create a new post.';
	$post1->created_by = 1;
	$post1->save();

	$post2 = new \App\Post();
	$post2->title = 'Eloquent is really easy!';
	$post2->url='https://laravel.com/docs/5.1/eloquent';
	$post2->content = 'It is super easy to create a new post.';
	$post2->created_by = 2;
	$post2->save();	
});