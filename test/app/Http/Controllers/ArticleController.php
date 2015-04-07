<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Article;
use App\User;
use Input;

use Request;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return User::all();
		//return Article::all(); //ispisuje sve article kao string(json)
		//return $article->title;
		//dump(Article::all());
		return view('article.index',['articles'=>Auth::user()->articles, 'user'=>Auth::user()]); //->ispisuje sve artikle user-a
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('article.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Request::all();
        $inputs['user_id'] = Auth::user()->id;
        $article = Article::create($inputs);
       
       return redirect()->route('article.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::find($id);
		return view('show', ['article' => $article]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::find($id);

		return view('article.edit', ['article' => $article]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$inputs = Request::all();
        $inputs['user_id'] = Auth::user()->id;
        $article =  Article::find($id);
       	$article->update($inputs);
       
       	return redirect()->route('article.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::find($id);

		$article->delete();

		return redirect()->route('article.index');
	}

	function ispisi()
	{
		return Article::all();
	}

	function ajaxArticles()
	{
		return view('ajax-articles');
	}

	function ajaxArticlesUpdate($id)
	{
		$inputs = Input::all();
		if(Request::ajax()){
			$article = Article::find($id);
			$article->update($inputs);
		}
		return $article;
	}

	function ajaxArticlesStore()
	{
		$inputs = Input::all();

		if(Request::ajax()){

			$inputs['user_id'] = Auth::user()->id;
        	$article = Article::create($inputs);
		}
		return $article;
	}

	function ajaxArticlesDelete($id)
	{
		$article = Article::findOrFail($id);

		if(Request::ajax()){

			$article->delete();

		}
		return $id;
	}

	function galerija(){
		return view('article.galery');
	}

	function angular(){
		return view('article.angular');
	}


}
