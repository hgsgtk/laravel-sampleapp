<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(AuthorsTableSeeder::class);
//        $this->call(PublisherTableSeeder::class);
//        $this->call(BooksdetailTableSeeder::class);
        $this->call(TestDataSeeder::class);
    }
}
