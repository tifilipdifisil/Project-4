<?php

use Illuminate\Database\Seeder;
use App\Movierating;
class MovieratingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movieratings = [
            ['G'],
            ['PG'],
            ['PG-13'],
            ['R'],
            ['NC-17'],
        ];
        $count = count($movieratings);

        foreach ($movieratings as $movieratingData) {
            $movierating = new Movierating();

            $movierating->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $movierating->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $movierating->movierating= $movieratingData[0];


            $movierating->save();

            $count--;
        }
    }
}
