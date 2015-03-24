<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class ArticleSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		Article::create([ 'title' => 'TitleOfTheArticle', 'body' => 'BodyOfTheArticle', 'user_id'=>1]);
		//$this->call('ArticleSeeder');
	}

}