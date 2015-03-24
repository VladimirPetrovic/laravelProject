<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: black;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<table class="table" class="table-bordered" class="table-responsive" >

            <thead>
                 <tr>
                 	<th>Username</th>
                    <th>Title</th>
                    <th>Date/Time Added</th>

                <tr>
            </thead>

                @foreach($articles as $article)
                    <div class="col-md-12">
                    			<td class="info">
                                    {{ $article->user->name }}
                                </td>
                                <td class="info" >
                                    <a href="{{ route('article.show', $article->id)}}" style="color:black">{{ $article->title }}</a>
                                </td>
                                <td>
                                    {{ $article->created_at->format('F d, Y h:ia') }}
                                </td>
                            </tr>
                        
                    </div>
                @endforeach    
        </table>
			</div>
		</div>
	</body>
</html>
