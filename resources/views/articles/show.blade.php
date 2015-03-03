@extends('layouts.master')

@section('content')
	<h1>Articles</h1>
	<hr>
	<div class="row">
			<article class="col-md-12">
				<header>
					<h2>{{ $article->title }}</h2>
				</header>
				{{ $article->body }}
			</article>
	</div>

@endsection