@extends('app')

@section('content')

	{!! Form::open(['route'=>'article.store'])  !!}

		<div class="col-md-6">

			<div class="form-group">
				{!! Form::label('title', 'Title')  !!}
				{!! Form::text('title',null, ['class' => 'form-control', ])  !!}
			</div>

			<div class="form-group">
				{!! Form::label('body', 'Description')  !!}
				{!! Form::textarea('body', null , ['class' => 'form-control', 'rows=4'])  !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Add',null, ['class' => 'btn btn-default' ]) !!}
			</div>

		</div>
	{!! Form::close() !!}

@endsection