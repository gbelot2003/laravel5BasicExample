@extends('layouts.master')

@section('content')
<h1>Create new article</h1>

	@include('errors._articles')
<div class="form-control">
	{!! Form::open(['url' => 'articles']) !!}

	@include('articles._form')

	{!! Form::close() !!}

</div>
@endsection