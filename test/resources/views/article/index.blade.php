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
                    <th>Date/Time Added/Updated</th>

                </tr>
            </thead>

                @foreach($articles as $article)
                    <div class="col-md-12">
                            <tr data-id-itema = "{{ $article->id }}" class="js-item-row">
                                <td class="info js-title" >
                                    {{ $article->title }}
                                </td>
                                <td class="active js-body"  >
                                    {{ $article->body }}
                                </td>
                                <td class="active ">
                                    {{ $article->user->email }}
                                </td>
                                <td class="js-time">
                                    {{ $article->updated_at}}
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
                                <td class="btn-save"  data-id-itema = "{{ $article->id }}">
                                </td>
                                <td class="btn-cancel">
                                </td>
                                <td>
                                    <button class="btn btn-default js-obrisi" data-id-itema="{{ $article->id }}">Obrisi</button>
                                </td>
                            </tr>
                        
                    </div>
                @endforeach    
        </table>
        <button id="addnew" class="btn btn-success test-pop-up">Add new</button>

        <div id="inputi"></div>

        
    </div> 

    


@endsection


@section('scripts')
    <script type="text/javascript" src="assets/javascript/main.js"></script>      
    <script type="text/javascript">
        window._laravel_token = "{{{ csrf_token() }}}";
        window._laravel_user = {!! $user->toJson() !!};
    </script>      
@endsection