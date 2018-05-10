<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;

class MusicController extends Controller
{
    /**
     *
     * /musics
     */
    public function musicindex()
    {
        $musics = Music::orderBy('title', 'cover_url')->get();

        $newMusic = $musics->sortByDesc('created_at')->take(3);

        return view('music.musicindex')->with([

            'music' => $newMusic,
        ]);
    }

    public function search(Request $request){
        $seachTerm = $request->input('searchTerm', null);
        if($seachTerm){
            //$musicTagData = file_get_contents(database_path('/books.json'));
            //$books = json_decode($booksRawData, true);
            $musicTagData = Music::where('title', 'LIKE', '%$id%')->get();
            $match = $title == $searchTerm;
        }
    }

    /**
     * show individual movie tag
     * /music/id
     */
    public function tag($id)
    {

        $music = Music::find($id);

        if (!$music) {
            abort(404);
        }

        return view('music.musictag')->with([
            'music' => $music,
        ]);
    }

    public function addmusic(Request $request)
    {

        return view('music.addmusic')->with([
            'music' => new Music(),

        ]);
    }

    public function save(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|string',
            'genre' => 'required|sting',
            'album'=>'string',
            'cover_url' => 'url',
            'released_year' => 'required|digits:4|numeric',
            'myrating' => 'string',

        ]);


        $music = new Music();
        $music->title = $request->title;
        $music->artist = $request->artist;
        $music->genre = $request->album;
        $music->released_year = $request->released_year;
        $music->album= $request->album;
        $music->cover_url = $request->cover_url;
        $music->myrating = $request->myrating;

        $music->save();


        return redirect('/musics/');
    }
    /**
     * edit and update movie tag
     * /movie/id/edit
     */

    public function musicedit($id)
    {
        $music = Music::find($id);

        if (!$music) {
            abort(404);
        }

        return view('music.musicedit')->with([
            'music' => $music
        ]);
    }

    public function update(Request $request, $id)
    {


        $this->validate($request, [
            'title' => 'required|string',
            'genre' => 'required|sting',
            'album'=>'string',
            'cover_url' => 'url',
            'released_year' => 'required|digits:4|numeric',
            'myrating' => 'string',


        ]);

        $music = Music::find($id);

        $music->title = $request->title;
        $music->artist = $request->artist;
        $music->genre = $request->album;
        $music->released_year = $request->released_year;
        $music->album= $request->album;
        $music->cover_url = $request->cover_url;
        $music->myrating = $request->myrating;

        $music->save();

        return redirect('/music/'.$id.'/');

    }

    /**
     * delete and remove movie tag confirmation
     * /movie/id/delete
     */
    public function delete($id)
    {
        $music = Music::find($id);

        if (!$music ) {
            abort(404);
        }

        return view('music.deletemusic')->with([
            'music' => $music
        ]);
    }
    /**
     * delete and remove movie tag
     * /movie/id/delete
     */
    public function remove($id)
    {
        $music  = Music::find($id);
        $music ->delete();
        return redirect('/musics');
    }




}

