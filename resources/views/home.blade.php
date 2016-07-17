@extends('layouts.default')

@section('content')
		@if(isset($article))
			<h1>{{ $article->title }}</h1>
			<p>{!! $article->body !!}</p>
		@else
			<h1>Welcome to the homepage of Plovdiv university!</h1>
		@endif
@endsection