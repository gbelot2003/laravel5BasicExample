@extends('layouts.master')

@section('content')
	<div class="row">
			<article class="col-md-12">
				<header>
					<h1>{{ $article->title }}</h1>
					<a href="/articles/{{ $article->id }}/edit">edit</a>
				</header>
				{{ $article->body }}

				@unless($article->tags->isEmpty())
					<h6>Tags: </h6>
					<ul>
						@foreach($article->tags as $tag)
							<li class="list-inline">{{ $tag->name }}</li>
						@endforeach
					</ul>
				@endunless
			</article>
	</div>

@endsection