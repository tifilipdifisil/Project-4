<?php

namespace App\Http\Controllers;

use App\Movierating;
use Illuminate\Http\Request;
use App\Movie;



class MovieController extends Controller
{
    /**
     *
     * /movies
     */
    public function movieindex()
    {
        $movies = Movie::orderBy('title', 'cover_url')->get();

        $newMovies = $movies->sortByDesc('created_at')->take(3);

        return view('movie.movieindex')->with([

            'movie' => $newMovies,
        ]);
    }

    /**
     * show individual movie tag
     * /movie/id
     */
    public function tag($id)
    {

        $movie = Movie::find($id);

        if (!$movie) {
            abort(404);
        }

        return view('movie.movietag')->with([
            'movie' => $movie,
            'movierating_id'=>$movie

        ]);
    }

    public function addmovie(Request $request)
    {
        $movieratings = Movierating::orderBy('id','asc')->get();
        $movieratingselection =[];
        foreach ($movieratings as $movierating){
            $movieratingselection[$movierating->id] = $movierating->movierating;
        }

        return view('movie.addmovie')->with([
            'movie' => new Movie(),
            'movieratingselection'=>$movieratingselection
        ]);
    }

    public function save(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'genre' => 'required',
            'released_year' => 'required|digits:4|numeric',
            'rating' => 'string',
            'movierating_id'=>'required',
            'cover_url' => 'url',


        ]);


        $movie = new Movie();
        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->released_year = $request->released_year;
        $movie->movierating_id = $request->movierating_id;
        $movie->myrating = $request->myrating;
        $movie->cover_url = $request->cover_url;

        $movie->save();


        return redirect('/movies/');
    }
    /**
     * edit and update movie tag
     * /movie/id/edit
     */

    public function movieedit($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            abort(404);
        }

        return view('movie.movieedit')->with([
            'movie' => $movie
        ]);
    }

    public function update(Request $request, $id)
    {


        $this->validate($request, [
            'title' => 'required',
            'genre' => 'required',
            'released_year' => 'required|digits:4|numeric',
            'movierating_id'=>'required',
            'myrating' => 'string',
            'cover_url' => 'url',


        ]);

        $movie = Movie::find($id);

        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->released_year = $request->released_year;
        $movie->movierating_id = $request->movierating_id;
        $movie->myrating = $request->myrating;
        $movie->cover_url = $request->cover_url;

        $movie->save();

        return redirect('/movie/'.$id.'/');

    }

    /**
     * delete and remove movie tag confirmation
     * /movie/id/delete
     */
    public function delete($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            abort(404);
        }

        return view('movie.deletemovie')->with([
            'movie' => $movie
        ]);
    }
    /**
     * delete and remove movie tag
     * /movie/id/delete
     */
    public function remove($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/movies');
    }




}
