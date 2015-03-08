@extends('layouts.master')

@section('content')
<h1>Create new article</h1>

	@include('errors._articles')
	<div class="form-control">

		@include('articles._form', ['submitButtonText' => 'Create Article'])

		{!! Form::close() !!}

</div>
@endsection