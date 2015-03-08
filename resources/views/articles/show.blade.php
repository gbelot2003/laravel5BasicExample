@extends('layouts.master')

@section('content')
	<div class="row">
			<article class="col-md-12">
				<header>
					<h1>{{ $article->title }}</h1>
					<a href="/articles/{{ $article->id }}/edit">edit</a>
				</header>
				{{ $article->body }}
			</article>
	</div>

@endsection