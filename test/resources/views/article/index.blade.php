@extends('app')

@section('content')

    <div >

    <h1><i class="fa fa-users"></i> Articles</h1>
       <table class="table" class="table-bordered" class="table-responsive">

            <thead>
                 <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>

                <tr>
            </thead>

                @foreach($articles as $article)
                    <div class="col-md-12">
                                <td class="info">
                                    {{ $article->title }}
                                </td>
                                <td class="active">
                                    {{ $article->body }}
                                </td>
                                <td class="active">
                                    {{ $article->user->email }}
                                </td>
                                <td>
                                    {{ $article->created_at->format('F d, Y h:ia') }}
                                </td>
                                <td class="active">
                                    {!! Form::open(['route' => ['article.edit', $article->id], 'method' => 'GET' ]) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                    
                                </td>
                                <td class="active">                        
                                    {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'DELETE']) !!}
                                    {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        
                    </div>
                @endforeach    
        </table>
        <a href="{{ route('article.create')}}" class='btn btn-success'>Add new</a>
    </div> 


@endsection

                