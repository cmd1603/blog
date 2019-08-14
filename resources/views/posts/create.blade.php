@extends('layouts.master')
@section('title')
<title>Blog Posts: Create Post</title>
@stop
@section('content')
<div class="row">
	<form method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		<div class="row">
			<div class="col">
				Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
			</div>
			<div class="col">
			Content: <input class="form-control" type="text" name="content" value="{{ old('content') }}">
			</div>
			<div class="col">
			URL: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
			{{ method_field('PUT') }}
			</div>	
		</div>
</form>	
</div>
<div><button type="submit" class="form-control">Submit</button></div>


@stop