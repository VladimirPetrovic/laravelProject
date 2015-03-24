@extends('app')

@section('content')

    <div >

    <h1><i class="fa fa-users"></i> Article</h1>
       <table class="table" class="table-bordered" class="table-responsive">

            <thead>
                 <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>

                </tr>
            </thead>

                
                    <div class="col-md-12">
                            <tr>
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
                            </tr>
                        
                    </div>
                   
        </table>
    </div> 


@endsection
