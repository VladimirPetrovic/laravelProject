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
			<h3>Waiting exams:</h3><hr/>
			Search exams:<input type="text" ng-model="text"/>
				<ol><br>
					<li ng-repeat="exam in labExams.exams | filter:labExams.noResults | filter:text">
						<span >@{{ exam.text }}</span>
						[ <a href="" ng-click="labExams.editResults(exam)">Enter results</a> ] <hr/>
					</li>
				</ol>

			 <form ng-submit="labExams.addExam()">
				<input type="text" ng-model="labExams.examText" size="30"
				placeholder="Add new exam here" required>
				<input class="btn-primary" type="submit" value="Add">
			</form>

			<div ng-show="labExams.myVar">
				<h3>Finished exams:</h3><hr/>
				Search results:<input type="text" ng-model="search.result"/>
					<ol><br>
						<li ng-repeat="exam in labExams.exams | filter:labExams.haveResults | filter:search">
							<span>@{{ exam.text }}</span>
							<a href="" ng-click="labExams.editResults(exam)">Edit</a>
							<a href="" ng-click="labExams.delete(exam)">Delete</a>
							<br>Results: <span>@{{ exam.result }}</span><hr/>
						</li>
					</ol>
			</div>
		</div>
	</body>
	</html>

@endsection


@section('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script type="text/javascript" src="assets/javascript/exam.js"></script>      
        
@endsection