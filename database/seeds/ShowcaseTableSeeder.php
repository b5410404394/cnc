<?php

use Illuminate\Database\Seeder;

class ShowcaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// DB::table('showcases')->delete();
    	for($i = 1 ; $i <= 20 ; $i++){
	         DB::table('showcases')->insert([
	            'title' => $i.'  '.str_random(10),
	            'desc' => str_random(500),
	            'link' => 'www.'.str_random(20).'.com'
	        ]);
     	}
    }
}
