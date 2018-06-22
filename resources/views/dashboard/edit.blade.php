@extends('master_dashboard')

@section('title')
	<title>Edit Post - CMS APP</title>
@endsection

@section('navigation')
	<h3>Edit Post</h3>
@endsection

@section('contents')
	<form method="post" action="/dashboard/{{$post->id}}" accept-charset="utf8">
		@csrf
		<input type="hidden" name="_method" value="PUT">
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input name="title" type="string" class="form-control" placeholder="Title" value="{{$post->title}}">
	  </div>
	  <div class="form-group">
	    <label for="description">Description</label>
	    <textarea name="description" class="form-control" placeholder="Description">{{$post->description}}</textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Edit</button>
	</form>
@endsection