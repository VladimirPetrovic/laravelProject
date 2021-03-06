<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		User::create([ 'name' => 'admin', 'email' => 'admin@admin.com', 'password'=>bcrypt('admin')]);
		//$this->call('ArticleSeeder');
	}

}