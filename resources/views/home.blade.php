@extends('layouts.default')

@section('content')

	
	@foreach($articles as $article)
		<h1>{{ $article->title }}</h1>
		<p>{!! $article->body !!}</p>
	@endforeach

@endsection