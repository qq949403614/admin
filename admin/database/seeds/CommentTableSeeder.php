<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    public function run()
    {
        //留言数据注入
    	$d = [];
		for ($a=0;$a<50;$a++) {
			$data = [];
			$data['username'] = str_random(6);
        	$data['content'] = str_random(20);
        	$data['time'] = date('Y-m-d H:i:s');
        	$data['status'] = 0;

        	$d[]=$data;
		}
		DB::table('comment')->insert($d);
	}
}
