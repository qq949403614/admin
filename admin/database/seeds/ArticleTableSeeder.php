<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        //
        
    	$data=[];
    	for ($i=0;$i<50;$i++) {
    		$d=[];

    		$d['title'] = str_random(10);
    		$d['content'] = str_random(200);
    		$d['pic'] = $faker->imageUrl(400,400);

    		$data[] = $d;
    	}
    	
    	DB::table('article')->insert($data);
    }
}
