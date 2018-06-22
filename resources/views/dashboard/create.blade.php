@extends('master_dashboard')

@section('title')
	<title>Create Posts - CMS APP</title>
@endsection

@section('navigation')
	<h3>Create Posts</h3>
@endsection

@section('contents')
	<form method="post" action="/dashboard" accept-charset="utf8" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input name="title" type="string" class="form-control" placeholder="Title">
	  </div>
	  <div class="form-group">
	    <label for="description">Description</label>
	    <textarea name="description" class="form-control" placeholder="Description"></textarea>
	  </div>
	  <div class="form-group">
	  	<input type="file" name="file">
	  </div>
	  <button type="submit" class="btn btn-primary">Create</button>
	</form>
@endsection