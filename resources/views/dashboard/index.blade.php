@extends('master_dashboard')

@section('styles')
	<style>
		a.editor:hover {
			text-decoration: none;
		}
		img.post-img {
			width: 100%;
			max-width: 400px;
			height: auto;
		}
	</style>
@endsection

@section('title')
	<title>Dashboard - CMS APP</title>
@endsection

@section('navigation')
	<h3>Posts</h3>
@endsection

@section('contents')
	@foreach($posts as $post)
		<div class="card text-white bg-dark mb-3">
		  <div class="card-header">
		  	{{$post->user->fname.' '.$post->user->lname}} &#9679; <span class="timeago">{{$post->created_at}}</span>
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">{{$post->title}}</h5>
		    @if($post->photo)
			    <img class="post-img" src="{{asset('images/'.$post->photo->file)}}" alt="Responsive image">
		    @endif
		    <p style="padding-top: 1em;" class="card-text" style="white-space: pre-wrap;">{{$post->description}}</p>
		    @if(Gate::forUser(Auth::user())->allows('edit-post', $post))
		    	<a class="editor" href="/dashboard/{{$post->id}}/edit" style="background: #1a1d21; padding: 0.3em 1em;">Edit</a>
		    	<form action="/dashboard/{{$post->id}}" style="display: inline-block;" method="post">
		    		@csrf
		    		<input type="hidden" name="_method" value="DELETE">
		    		<input type="submit" value="Delete" style="background: #1a1d21; padding: 0.126em 1em; color: #fff; border:none; outline:none; cursor: pointer;">
		    	</form>
		    @endif
		  </div>
		</div>
	@endforeach
@endsection

@section('scripts')
	<script>
		const time = document.getElementsByClassName('timeago');
		for(let i = 0; i < time.length; i++) {
			const from = moment(time[i].textContent, "YYYY-MM-DD hh:mm:ss").tz("Asia/Kathmandu");
			let timer = () => {
				time[i].innerText = from.fromNow();
			};
			timer();
			setInterval(timer, 60000);
		}	
	</script>
@endsection