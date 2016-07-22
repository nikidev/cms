@extends('layouts.default')

@section('content')
		@if(isset($article))


			<a href="{{ url('article/'. $article->slug) }}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$article->title}}</a>

		@else
			<h1>Welcome to the homepage of Plovdiv university!</h1>
		@endif
@endsection