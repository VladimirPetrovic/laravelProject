@extends('app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<title></title>
</head>
<body>

	<div>
		<h2>Hello world!</h2>
		<ul>
			<li >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
			</li>

			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</li>

			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			 </li>


			<br>
			<button class="js-ispisi-datum">Vidi datum</button>

			<p id="datum"></p>




			<br>
			<p>Unesi broj izmedju 1 i 10</p>
			<input type="text" id="broj">
			<button class="js-proveri-broj" >Proveri broj</button>

			<p id="ispis"></p>

			<form action="demo_form.asp" method="post">
  			<input type="text" name="fname" required>
  			<input type="submit" value="Submit">
			</form>



			<br>
			<input type="text" class="js-menjaj-poz" >

			<div id="demo1"></div>
			<div id="zaposleni"></div>

		</ul>

		<table  class="table-bordered">
			 	<th>Title</th>
			 	<th>Body</th>
			 	<tr>
					<td id="polje1">Polje1</td>
					<td id="polje2">Polje2</td>
			 	</tr>
			 </table>

		<button id="callapi">Get posts</button>
	</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/javascript/main.js"></script>
</body>

</html>
@endsection