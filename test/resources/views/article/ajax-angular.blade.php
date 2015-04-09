@extends('app')

@section('content')
	
	<div ng-app="ajaxApp">
		<div ng-controller="AjaxAngularController as angCtrl">
				<h2>Articles</h2>
					<table class="table" class="table-bordered" class="table-responsive" id="htmlTable">

			            <thead>
			                 <tr>
			                    <th>Title</th>
			                    <th>Description</th>
			                    <th>Date/Time Added/Updated</th>

			                </tr>
			            </thead>
		                    <div class="col-md-12">
	                            <tr ng-repeat="article in angCtrl.articles" ng-dblclick="angCtrl.editArticle(article)">
	                            	<td><span ng-if="!article.editMode">@{{ article.title }}</span><input type="text" ng-if="article.editMode" ng-model="article.title"></td>
	                            	<td><span ng-if="!article.editMode" >@{{ article.body}}</span><input type="text" ng-if="article.editMode" ng-model="article.body"></td>
	                            	<td>@{{ article.created_at }}</td>
	                            	<td><button ng-if="article.editMode" class="btn btn-primary" ng-click="angCtrl.saveArticle(article)">Save</button><td>
	                            	<td><button ng-if="article.editMode" class="btn btn-default" ng-click="angCtrl.cancel(article)">Cancel</button><td>
	                            	<td><button class="btn btn-danger" ng-click="angCtrl.delete(article)">Obrisi</button></td>
	                            </tr>
		                    </div>   
		        </table>
		        <button ng-click="angCtrl.show()" class="btn btn-success">Add</button>
		        <div ng-if="angCtrl.showAddForm">
			       <form ng-submit="angCtrl.sendPost()">
				       <div class="form-group col-md-3">
					       <label> Title: </label>
					       <input type="text" class="form-control" ng-model="angCtrl.newArticle.title" required>
					       <label> Body: </label>
					       <textarea class="form-control" ng-model="angCtrl.newArticle.body" required></textarea><br>
					       <button class="btn btn-primary form" type="submit">Submit</button>
					       <button class="btn btn-danger form" type="reset" >Reset</button>
					       <button ng-click="angCtrl.hide()" class="btn btn-default">Hide</button>
				       </div>
			       </form>
		        </div>
        </div>
        </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="assets/javascript/ajax-angular.js"></script>
    <script type="text/javascript">
        window._laravel_token = "{{{ csrf_token() }}}";
    </script>  
@endsection