<?php
/** Following Route and method name choices
 * https://github.com/susanBuck/dwa15-spring2018/blob/master/laravel/forms-post.md#route-and-method-name-choices
 * /

/**
 * Misc. pages
 */

Route::get('/', 'PageController@welcome');
Route::get('/about', 'PageController@about');
Route::get('/mainpage', 'PageController@mainpage');

/**
 * User Registration and login
 */
Auth::routes();


/**
 * movies
 */
Route::get('/movies', 'MovieController@movieindex');
Route::get('/movie/add', 'MovieController@addmovie');
Route::post('/movies', 'MovieController@save');
Route::get('/movie/{id}', 'MovieController@tag');
Route::get('/movie/{id}/edit', 'MovieController@movieedit');
Route::put('/movie/{id}', 'MovieController@update');
Route::get('/movie/{id}/delete', 'MovieController@delete');
Route::delete('/movie/{id}', 'MovieController@remove');
Route::get('/movie/search', 'MovieController@search');
/**
 * music
 */
Route::get('/musics', 'MusicController@musicindex');
Route::get('/music/add', 'MusicController@addmusic');
Route::post('/musics', 'MusicController@save');
Route::get('/music/{id}', 'MusicController@tag');
Route::get('/music/{id}/edit', 'MusicController@musicedit');
Route::put('/music/{id}', 'MusicController@update');
Route::get('/music/{id}/delete', 'MusicController@delete');
Route::delete('/music/{id}', 'MusicController@remove');
Route::get('/music/search', 'MusicController@search');

/**
 * picture
 */

/**
 * database connection base
 */
Route::get('/show-login-status', function () {
    $user = Auth::user();

    if ($user) {
        dump('You are logged in.', $user->toArray());
    } else {
        dump('You are not logged in.');
    }

    return;
});

Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
        'Database defaultStringLength' => Illuminate\Database\Schema\Builder::$defaultStringLength,
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

