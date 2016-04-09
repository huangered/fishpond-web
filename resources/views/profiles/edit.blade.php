@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top:5em" >
	<div class="ui grid">
		<div class="four wide column">
			<table class="ui table">
				<tbody>
					<tr>
      					<td>Personal</td>
      				</tr>
      				<tr>
      					<td>Profile</td>
    				</tr>
  				</tbody>
			</table>
		</div>
		<div class="eight wide column">
			<table class="ui table">
				<thead>
					<tr>
						<th>Profile</th>
					</tr>
				</thead>
				<tr><td>
			{!! Form::model($profile, array('method' => 'put', 'route' => ['people.update', $profile->id], 'class' => 'ui form')) !!}
			<div class=" field">
			{!! Form::label('telephone') !!}
			{!! Form::text('telephone', null, array('required', 'class'=>'form-control', 'placeholder'=>'telephone')) !!}
 			</div>

 			<div class=" field">
 			{!! Form::label('job') !!}
 			{!! Form::text('job', null, array('required', 'class'=>'form-control', 'placeholder'=>'job')) !!}
 			</div>

 			<div class="field">
 			{!! Form::label('location') !!}
 			{!! Form::text('location', null, array('required', 'class'=>'form-control', 'placeholder'=>'location')) !!}
  			</div>

			<div class="field">
 			{!! Form::submit('submit', array('class'=>'ui primary button')) !!}
 			</div>
 			{!! Form::close() !!}
 		</td></tr></table>
 		</div>
	</div>
</div>			    
@endsection