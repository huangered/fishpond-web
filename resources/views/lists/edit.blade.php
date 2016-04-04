{!! Form::model($list, array('method' => 'put',
    		             'route' => ['lists.update', $list->id], 
			     'class' => 'form')) !!}

<div>
	{!! Form::label('name') !!}
	{!! Form::text('name', null, array('required')) !!}