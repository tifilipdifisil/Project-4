<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Movierating;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            ['Pulp Fiction', 'Action', 1994, 'https://ia.media-imdb.com/images/M/MV5BMTkxMTA5OTAzMl5BMl5BanBnXkFtZTgwNjA5MDc3NjE@._V1_SY1000_CR0,0,673,1000_AL_.jpg','2','R'],
            ['The Matrix', 'Sci-Fi', 1999, 'https://ia.media-imdb.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,665,1000_AL_.jpg','3','PG-13'],
            ['Psycho', 'Horror', 1960, 'https://ia.media-imdb.com/images/M/MV5BNTQwNDM1YzItNDAxZC00NWY2LTk0M2UtNDIwNWI5OGUyNWUxXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,672,1000_AL_.jpg','4','R'],
            ['Back to the Future', 'Adventure', 1985, 'https://ia.media-imdb.com/images/M/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SY1000_CR0,0,643,1000_AL_.jpg','3','PG'],
            ['Star Wars: Episode VI - Return of the Jedi', 'Sci-fi', 1983, 'https://ia.media-imdb.com/images/M/MV5BOWZlMjFiYzgtMTUzNC00Y2IzLTk1NTMtZmNhMTczNTk0ODk1XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SY999_CR0,0,644,999_AL_.jpg','3','PG-13'],
            ['Amelie', 'Romance', '2001', 'https://ia.media-imdb.com/images/M/MV5BNDg4NjM1YjMtYmNhZC00MjM0LWFiZmYtNGY1YjA3MzZmODc5XkEyXkFqcGdeQXVyNDk3NzU2MTQ@._V1_SY1000_CR0,0,666,1000_AL_.jpg','5','PG-13'],
        ];

        $count = count($movies);

        foreach ($movies as $key => $movieData) {
            $movierating=$movieData[5];

            $movierating_id = Movierating::where('movierating', '=', $movierating)->pluck('id')->first();

            $movie = new Movie();

            $movie->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $movie->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $movie->title = $movieData[0];
            $movie->genre = $movieData[1];
            $movie->released_year = $movieData[2];
            $movie->cover_url = $movieData[3];
            $movie->myrating = $movieData[4];
            $movie->movierating_id = $movierating_id;


            $movie->save();
            $count--;


        }
    }

}
