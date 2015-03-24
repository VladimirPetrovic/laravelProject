@extends('app')

@section('content')

    {!! Form::model($article, ['route'=>['article.update', $article->id], 'method'=>'PUT'])  !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            {!! Form::label('title', 'Title')  !!}
            {!! Form::text('title', null, ['class' => 'form-control'])  !!}
            </div>

            <div class="form-group">
            {!! Form::label('body', 'Description')  !!}
            {!! Form::textarea('body', null, ['class' => 'form-control', 'rows=4'])  !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Update', null, ['class' => 'btn btn-default', 'class' => 'form-control']) !!}
            <div class="form-group">
        </div>
    </div>
    {!! Form::close() !!}

@endsection