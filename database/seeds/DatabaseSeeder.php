<?php

use Illuminate\Database\Seeder;
use app\MovieRating;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MovieratingsTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(MusicsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
