@extends('app')

@section('content')
	<style>
		.content {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
			font-family: 'Lato';
			width: 100%;
			height: 100%;
			display: inline-block;
		}
		.title {
			font-size: 96px;
			margin-bottom: 40px;
		}
		.quote {
			font-size: 24px;
		}
	</style>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
@endsection


