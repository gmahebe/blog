<?php

use Illuminate\Database\Seeder;

use App\Posts;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Posts::create([
	        'author_id' => '1',
	        'title' => 'welcome to our blog',
	        'body' => 'this is a brand spanking new blog entry',
	        'slug' => 'author-author',	
	        'active' => '1',
	        'created_at' => '2010-01-03',
	        'updated_at' => '2010-01-03',
	    ]);
    }
}
