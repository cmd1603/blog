@extends('layouts.master')
@section('title')
<title>Blog Posts</title>
@stop

@section('content')
	<h1 class="text-center">Posts</h1>
	<br>
	
	@foreach($posts as $post)
	<div class="row">
		<div class="col text-center">
			@if($post->img_path)
			<a href="{{ action('PostsController@show', $post->id) }}">
				<img src="{{ '/img/' . $post->img_path }}" class="center-block posts_img" />
			</a>
			@else
			<img src="/img/no_image.png" class="center-block posts_img" />
			@endif
		</div>
	</div>
	<div class="row">
		<div class="col">
			<a href="{{ action('PostsController@show', $post->id) }}">
				<h2 class="posts_title">{{ $post->title }}</h2>
			</a>
			<p class="posts_date">{{ $post->created_at->format('M j, Y') }}&nbsp;&nbsp;</p>
		</div>		
	</div><hr>
	@endforeach

	<div class="text-center">
		{!! $posts->render() !!}
	</div>
@stop