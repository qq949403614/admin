<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GuanggaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $d = [];
		for ($a=0;$a<50;$a++) {
			$data = [];
			$data['guanggaoname'] = str_random(6);
        	$data['guanggaotext'] = str_random(20);
        	$data['guanggaotexts'] = str_random(20);
        	$data['content'] = str_random(20);
            $data['img'] = $faker->imageUrl(400,400);

        	$d[]=$data;
		}
		DB::table('guanggao')->insert($d);
    }
}
