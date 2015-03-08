@extends('layouts.master')

@section('content')
	<h1>Edit  article</h1>

	@include('errors._articles')
	<div class="form-control">
		{!! Form::model($articles, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $articles->id]]) !!}
		{!! Form::hidden('user_id', $articles->user_id) !!}
		@include('articles._form')

		{!! Form::close() !!}
	</div>
@endsection