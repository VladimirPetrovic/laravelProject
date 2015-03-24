@extends('app')

@section('content')

    <a href="{{ route('article.create')}}" class='btn btn-success'>Add new</a>

    <div class="row">
       <br><table class="table" class="table-bordered" class="table-responsive">
                     <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Email</th>

                    <tr>

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
                        <td class="active">
                            {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                        <td class="active">                        
                            {!! Form::open(['route' => ['article.edit', $article->id], 'method' => 'GET' ]) !!}
                            {!! Form::submit('Edit', ['class' => 'btn btn-default']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                
            </div>
        @endforeach    
        </table>
    </div> 

@endsection

                