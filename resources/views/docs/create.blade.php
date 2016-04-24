@extends('layouts.app')
@section('content')

<div class="ui container" style="padding-top: 5em">
	<div class="ui grid">

		<div class="ui form">
			{!! Form::open(array('route'=>'article.store', 'class'=>'form'))!!}
			<div class="field">
				<label>Title:</label>
			{!! Form::text('title', null,array('required','aaa')) !!}
			</div>
			<div class="field">
				<label>Content:</label>
			{!! Form::textarea('content',null,array('required')) !!}
			</div>
			<div>
				<div class="ui sub header">Label</div>
				<div class="ui fluid multiple search selection dropdown">
					<input name="tags" type="hidden">
					<i class="dropdown icon"></i>
					<div class="default text">Skills</div>
					<div class="menu">
						@foreach($labels as $label)
							<div class="item" data-value="{{ $label->id }}">{{ $label->name }}</div>
						@endforeach
					</div>
				</div>

			</div>
			{!! Form::submit('Publish') !!}
			{!! Form::close() !!}
		</div>
	</div>
	<script>
		$('.ui.dropdown')
				.dropdown({
					allowAdditions: true
				})
		;
	</script>
</div>
@endsection
