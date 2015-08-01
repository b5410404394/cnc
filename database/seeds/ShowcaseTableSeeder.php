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
    		$s = "";
    		for($j = 0 ; $j < 10 ; $j++){
    			$s = $s.str_random(20).' ';
    		}
    		
	         DB::table('showcases')->insert([
	            'title' => $i.'  '.str_random(10),
	            'desc' => $s,
	            'link' => 'www.'.str_random(20).'.com'
	        ]);
     	}
    }
}
