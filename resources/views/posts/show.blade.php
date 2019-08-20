@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col">
		<h3 class="show_header">{{ $post->title }}</h3>
	</div>
</div>
<div class="row">
	<div class="col">		
		<a href="#" class="text-center">
			<img class="thumbnail" src="{{ '/img/' . $user->img_path }}">
		</a>
		<span>by Chris Davila</span>
	</div>	
</div>
<div class="col row date_of_pub">{{ $post->created_at->format('M j, Y') }}&nbsp;&nbsp;</div>
<hr>
<div class="row">
@if($post->img_path)
	<div class="col text-center">
		<img src="{{ '/img/' . $post->img_path }}" class="posts_large_img">
	</div>	
@endif
</div> 



<hr>
<div class="col">
	<p>{!! $post->content !!}</p>
</div>
@stop