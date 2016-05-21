@extends('layouts.app2')
@section('content')
<div style="padding-top: 5em">
	<div class="fp-grid" style="width: 900px; margin: 0 auto;">
		<div class="fp-width-1-1">
				<table class="fp-table">
					<caption>User</caption>
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
    						<th>Role</th>
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

				<table class="fp-table">
					<caption>Role</caption>
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Display Name</th>
    						<th>Description</th>
    						<th>Permission</th>
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
				<table class="fp-table">
					<caption>Permission</caption>
					<thead>
						<tr>
							<th>Name</th>
							<th>Display Name</th>
							<th>Description</th>
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
@endsection