angular.module('Exams', [])
    .controller('LabExamsController', function() {
	    var labExams = this;
	    labExams.myVar = false;
		    labExams.exams = [
			    {text:'Exam 1', result:null},
			    {text:'Exam 2', result:null},
			    {text:'Exam 3', result:null},
			    {text:'Exam 4', result:null}];
			//console.log(labExams.exams);
			//labExams.sakrij = true;

		// labExams.enterResults = function(exam){
		// 	var index = labExams.exams.indexOf(exam);
		// 		results = prompt('Enter result for '+exam.text);
		// 		labExams.exams[index].result = results;
		// 		console.log(labExams.exams[index]);
		// 	//if(labExams.exams[index].result == null)
		// };

		labExams.addExam = function() {
			labExams.exams.push({text:labExams.examText, result:null});
			labExams.examText = '';
		};

		labExams.editResults = function (exam) {
			var index = labExams.exams.indexOf(exam);
				results = prompt('Edit result for '+ exam.text, exam.result);
				labExams.exams[index].result = results;
				labExams.myVar = true;
		};

		labExams.delete = function (exam) {
			var index = labExams.exams.indexOf(exam);
				labExams.exams.splice(index,1);
		};

		labExams.noResults = function(value, index) {
			return value.result == null;
		}

		labExams.haveResults = function(value, index) {
			return !labExams.noResults(value, index);
		}
    });

