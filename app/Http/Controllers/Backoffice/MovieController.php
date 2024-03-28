<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;


class MovieController extends Controller
{
    public function index()
    {
        $movies = $this->getMovies();

        return view(
            'backoffice.movies.index',
            compact('movies')
        );
    }

    public function show($id)
{
 //get movie based on $id
 $movie = $this->getMovie($id);
 // call view 'backoffice.movies.show'
 return view('backoffice.movies.show',
 compact('movie'));
}

    public function edite($id){
        $movie= $this->getMovie($id);
        return view('backoffice.movies.edite',
        compact('movie')
        );
    }

    public function create(){
        return view('backoffice.movies.create');
    }

    public function delete ($id){
        $movie = $this->getMovie($id);
        return view ('backoffice.movies.delete',
        ["movie"=> $movie]
    );
    }

    private function getMovies()
    {
        $datetime = new \Datetime();
        $movies = [
            [
                'id' => 1,
                'title' => 'Halloween',
                'year' => 1978,
                'synopsis' => 'Fifteen years after murdering his sister on
Halloween night 1963, Michael Myers escapes from a mental hospital and
returns to the small town of Haddonfield, Illinois to kill again.',
                'running_time' => 120,
                'rating' => 7.7,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'id' => 2,
                'title' => 'Jaw',
                'year' => 1975,
                'synopsis' => 'When a killer shark unleashes chaos on a beach
community, it\'s up to a local sheriff, a marine biologist, and an old
seafarer to hunt the beast down.',
                'running_time' => 124,
                'rating' => 8.0,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'id' => 3,
                'title' => 'The Godfather',
                'year' => 1972,
                'synopsis' => 'The aging patriarch of an organized crime
dynasty transfers control of his clandestine empire to his reluctant
son.',
                'running_time' => 175,
                'rating' => 9.2,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
            [
                'id' => 4,
                'title' => 'Serpico',
                'year' => 1973,
                'synopsis' => 'An honest New York cop named Frank Serpico
blows the whistle on rampant corruption in the force only to have hiscomrades turn against him.',
                'running_time' => 140,
                'rating' => 7.7,
                'created_at' => $datetime,
                'updated_at' => $datetime
            ],
        ];
        return $movies;
    }

    private function getMovie($id)
    {
        $movies = $this->getMovies();
        foreach ($movies as $movie) {
            if ($movie['id'] == $id) {
                return $movie;
            }
        }
        return null;
    }
}
