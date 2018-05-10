<?php

use Illuminate\Database\Seeder;
use App\Music;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        $musics = [
            ['Autumn Leaves', 'Miles Davis', 'Jazz', 'The Definitive Collection of Miles Davis, Vol. 2', 'https://images-na.ssl-images-amazon.com/images/I/51BAuLZd94L._SS500.jpg', '5','1980'],
            ['Beast of Burden', 'The Rolling Stones', 'Rock', 'TBeast Of Burden (Remastered)', 'https://images-na.ssl-images-amazon.com/images/I/61uTbbPaDsL._SS500.jpg', '4','1978'],
            ['Still Dre', 'Dr. Dre Feat. Snoop Dogg', 'Rap', 'Dr. Dre', 'https://images-na.ssl-images-amazon.com/images/I/31LE9lfQH%2BL._SS500.jpg', '4','2000'],
            ['Crazy Little Thing Called Love', 'The Royal Philharmonic Orchestra', 'Classical', 'The Royal Philharmonic Orchestra Plays Queen Classic', 'https://images-na.ssl-images-amazon.com/images/I/51WSY2MXZjL._SS500.jpg', '5','2015'],
            ['Around The World', 'Daft Punk', 'Electronic', 'Daft Punk', 'https://images-na.ssl-images-amazon.com/images/I/51jaCT%2BHURL._SS500.jpg', '4','1995'],
            ['Material Girl', 'Madonna', 'Pop', 'The Immaculate Collection', 'https://images-na.ssl-images-amazon.com/images/I/51fJCRjpjuL._SS500.jpg', '5','1980'],

        ];

        $count = count($musics);

        foreach ($musics as $key => $musicData) {
            $music = new Music();

            $music->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $music->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $music->title = $musicData[0];
            $music->artist = $musicData[1];
            $music->genre = $musicData[2];
            $music->album = $musicData[3];
            $music->cover_url = $musicData[4];
            $music->myrating = $musicData[5];
            $music->released_year = $musicData[6];


            $music->save();
            $count--;
        }
    }
}
