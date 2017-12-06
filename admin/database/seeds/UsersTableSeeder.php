<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //注入数据
        $d=[];
        for ($i=0;$i<100;$i++) { 
        	$data=[];
        	$data['username'] = str_random(6);
        	$data['password'] = str_random(10);
        	$data['email'] = str_random(11).'@qq.com';
        	$data['profile'] = '/uploads/2017-12-01/img_5a2116dec40d9.jpeg';
        	$data['status'] = 0;
        	$d[]=$data;
        }
        DB::table('admin')->insert($d);
    }
}
