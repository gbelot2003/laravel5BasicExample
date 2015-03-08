<!-- Title Form Input -->
<div class="form-group">
	{!! Form::label('title', "Title:") !!}
	{!! Form::text("title", null, ['class' => 'form-control']) !!}
</div>

<!-- Excerpt Form Input -->
<div class="form-group">
	{!! Form::label('excerpt', "Excerpt:") !!}
	{!! Form::text("excerpt", null, ['class' => 'form-control']) !!}
</div>

<!-- Body Form Input -->
<div class="form-group">
	{!! Form::label('body', "Body:") !!}
	{!! Form::textarea("body", null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Form Input -->
<div class="form-group">
	{!! Form::label('slug', "Slug:") !!}
	{!! Form::text("slug", null, ['class' => 'form-control']) !!}
</div>

<!-- Published_at Form Input -->
<div class="form-group">
	{!! Form::label('published_at', "Published on:") !!}
	{!! Form::input('date', "published_at", date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<!-- Tags Form Input -->
<div class="form-group">
	{!! Form::label('tag_list', "Tags:") !!}
	{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>

@section('scriptArea')
	<script>
		$("#tag_list").select2({
			placeholder: 'Chose a tag'
		});
	</script>
@endsection