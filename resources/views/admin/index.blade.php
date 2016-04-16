@extends('layouts.app')
@section('content')
<div class="ui container" style="padding-top: 5em">
	<div class="ui grid">
		<div class="twelve wide column">
			<div class="ui top attached tabular menu">
  				<a class="item active" data-tab="first">User</a>
  				<a class="item" data-tab="second">Role</a>
  				<a class="item" data-tab="third">Permission</a>
			</div>
			<div class="ui bottom attached tab segment active" data-tab="first">
  				<table class="ui celled table">
					<thead>
						<tr>
							<th>id</th>
							<th>name</th>
							<th>email</th>
    						<th>role</th>
  						</tr>
  					</thead>
  					<tbody>
    				@foreach ($users as $user) 
    					<tr>
    						<td>{{$user->id}}</td>
    						<td>
	    						<a href="{{ url('/people/'.$user->id) }}">{{$user->name}}</td>
    						<td>{{$user->email}}</td>
    						<td>
    							@foreach ($user->roles()->get() as $role)
    								<p>{{$role->name}}</p>
    							@endforeach
    						</td>
    					</tr>
					@endforeach
  					</tbody>
				</table>
			</div>
			<div class="ui bottom attached tab segment" data-tab="second">
  				<table class="ui celled table">
					<thead>
						<tr>
							<th>id</th>
							<th>name</th>
							<th>display_name</th>
    						<th>description</th>
    						<th>permission</th>
  						</tr>
  					</thead>
  					<tbody>
    				@foreach ($roles as $role) 
    					<tr>
    						<td>{{$role->id}}</td>
    						<td>{{ $role->name}}</td>
	    					<td>{{ $role->display_name}}</td>
    						<td>{{$role->description}}</td>
    						<td>
    							@foreach( $role->perms()->get() as $p)
									<p>{{ $p->name }}</p>
								@endforeach
    						</td>
    					</tr>
					@endforeach
  					</tbody>
				</table>
			</div>
			<div class="ui bottom attached tab segment" data-tab="third">
  				<table class="ui celled table">
					<thead>
						<tr>
							<th>name</th>
							<th>display name</th>
							<th>description</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($permissions as $permission)
						<tr>
							<td>{{ $permission->name }}</td>
							<td>{{ $permission->display_name }}</td>
							<td>{{ $permission->description }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>

			
		</div>
	</div>
	<script>
	$('.menu .item').tab();
	</script>
</div>
@endsection