angular.module('Exams', [])
    .controller('LabExamsController', function() {
	    var labExams = this;
		    labExams.exams = [
			    {text:'Exam 1'},
			    {text:'Exam 2'}];
			//console.log(labExams.exams);
			labExams.result = [];

		labExams.enterResults = function(exam){
			
			results = prompt('Enter result for '+exam.text);
			//console.log(exam);
			labExams.result.push({text:exam.text, results});
			var index = labExams.exams.indexOf(exam);
			labExams.exams.splice(index, 1);
			console.log(labExams.result);
			return exam;

		};

		labExams.addExam = function() {
			labExams.exams.push({text:labExams.examText});
			labExams.examText = '';
		};

		labExams.editResults = function (result){

			var index = labExams.result.indexOf(result);

			labExams.result.splice(index, 1);
			results = prompt('Edit result for '+ result.text, result.results);
				labExams.result.push({text:result.text, results});
		};
		labExams.Delete = function (result){
			var index = labExams.result.indexOf(result);
			labExams.result.splice(index,1);
		};
    });

