@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col">
		<h1 class="text-center">{{ $post->title }}</h1>
		<p class="text-center">{{ $post->created_at->format('M j, Y') }}&nbsp;&nbsp;</p>
	</div>
</div>
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