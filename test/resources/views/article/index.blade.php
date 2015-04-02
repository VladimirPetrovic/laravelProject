@extends('app')

@section('content')

    <div >

    <h1><i class="fa fa-users"></i> Articles</h1>
       <table class="table" class="table-bordered" class="table-responsive" id="htmlTable">

            <thead>
                 <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>

                </tr>
            </thead>

                @foreach($articles as $article)
                    <div class="col-md-12">
                            <tr>
                                <td class="info, js-edit" id="title" data-id-itema="{{ $article->id }}">
                                    {{ $article->title }}
                                </td>
                                <td class="active, js-edit" id="body" data-id-itema="{{ $article->id }}">
                                    {{ $article->body }}
                                </td>
                                <td class="active, " id="email" data-id-itema="{{ $article->id }}">
                                    {{ $article->user->email }}
                                </td>
                                <td id="time" data-id-itema="{{ $article->id }}">
                                    {{ $article->created_at}}
                                </td>
                                <!-- <td class="active">
                                    {!! Form::open(['route' => ['article.edit', $article->id], 'method' => 'GET' ]) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                    
                                </td>
                                <td class="active">                        
                                    {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'DELETE']) !!}
                                    {!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td> -->
                                <td>
                                    <button class="btn btn-default" id="obrisi" data-id-itema="{{ $article->id }}">Obrisi</button>
                                </td>
                            </tr>
                        
                    </div>
                @endforeach    
        </table>
        <button id="addnew" class="btn btn-success">Add new</button>

        <div id="inputi"></div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="assets/javascript/main.js"></script>
    </div> 

    <script type="text/javascript">
        window._laravel_token = "{{{ csrf_token() }}}";
        window._laravel_user = {!! $user->toJson() !!};
    </script>


@endsection

                