@extends('app')

@section('content')

	<!doctype html>
	<html ng-app="Exams">
		<head>
			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
			<script src="exam.js"></script>
		</head>
	<body>
		<div ng-controller="LabExamsController as labExams">
			<h3>Waiting exams:</h3>
				<ol>
					<li ng-repeat="exam in labExams.exams">
						<span >@{{exam.text}}</span>
						[ <a href="" ng-click="labExams.enterResults(exam)">Enter results</a> ]
					</li>
				</ol>

			 <form ng-submit="labExams.addExam()">
				<input type="text" ng-model="labExams.examText" size="30"
				placeholder="add new exam here">
				<input class="btn-primary" type="submit" value="add">
			</form>

			<h3>Finished exams:</h3>
				<ol>
					<li ng-repeat="result in labExams.result">
						<span>@{{ result.text }}</span>
						<a href="" ng-click="labExams.editResults(result)">Edit</a>
						<a href="" ng-click="labExams.Delete(result)">Delete</a>
						<br>Results: <span>@{{ result.results }}</span>
					</li>
				</ol>
		</div>
	</body>
	</html>

@endsection


@section('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script type="text/javascript" src="assets/javascript/exam.js"></script>      
        
@endsection