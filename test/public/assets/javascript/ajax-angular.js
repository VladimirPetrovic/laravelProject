angular.module('ajaxApp', [])
	.controller('AjaxAngularController', function($http){
		var angCtrl = this;
		angCtrl.newArticle = {
			title: '',
			body: '',
			user_id: window._laravel_token,
			created_at: ''

		};

		angCtrl.showAddForm = false;
			$http.get('/ispis').
				success(function(data){
					angCtrl.articles = data;
				}).
				error(function(){

				});
			angCtrl.delete = function(data){
				angCtrl.index = angCtrl.articles.indexOf(data);
				$http.delete('/ajax-angular/'+data.id+'/delete', data).
					success(function(data){
						angCtrl.articles.splice(angCtrl.index, 1);
					});
			};
			angCtrl.show = function(){
				angCtrl.showAddForm = true;
			}
			angCtrl.hide = function(){
				angCtrl.showAddForm = false;
			}

			angCtrl.sendPost = function(){
				
				console.log(angCtrl.newArticle)
				$http.post('/ajax-angular/angular-store', angCtrl.newArticle).
					success(function(data){
						angCtrl.articles.push(data);
						angCtrl.showAddForm = false;
						angCtrl.newArticle = {
							title: '',
							body: '',
							user_id: window._laravel_token,
							created_at: ''

						};
						console.log(data);
					});
			}
			angCtrl.editArticle = function(article){
				article.editMode = true;
				angCtrl.title = article.title;
				angCtrl.body = article.body;
			}
			angCtrl.saveArticle = function(article){
				// var index = angCtrl.articles.indexOf(article);
				// angCtrl.articles[index].title = article.title;
				// angCtrl.articles[index].body = article.body;
					$http.put('ajax-angular/angular-update/'+article.id, article).
					success(function(data){
						article.editMode = false;
						console.log(data);
					})
			}
			angCtrl.cancel = function(article){
				article.title = angCtrl.title;
				article.body = angCtrl.body;
				article.editMode = false;
			}
	})