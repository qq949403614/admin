<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      // $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
      // $this->call(UsersTableSeeder::class);
      // $this->call(ArticleTableSeeder::class);
      $this->call(GoodsTableSeeder::class); 
=======
      // $this->call(ArticleTableSeeder::class); 
      // $this->call(CommentTableSeeder::class); 
      $this->call(GuanggaoTableSeeder::class); 
>>>>>>> 545b8ee30c40af1a27ca96d67822ea200083f247
    }
}
