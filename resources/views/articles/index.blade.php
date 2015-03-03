@extends('layouts.master')

@section('content')
	<h1>Articles</h1>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<a href="/articles/create">Create new article</a>
		</div>

		@foreach($articles as $article)
		<article class="col-md-12">
			<header>
				<h2><a href="/articles/{{ $article->slug }}">{{ $article->title }}</a></h2>
			</header>
			{{ $article->excerpt }}
		</article>
		@endforeach
	</div>

@endsection