<?php

namespace App\Http\Controllers;
 
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;
 
class GeneralController extends Controller
{
    private $endpoint = 'https://api.themoviedb.org/3/';

    public function index()
    {
        $data = $this->getLatest();
        // $genres = $this->getGenreList();

        return view('welcome', compact('data'));
    }

    private function getLatest()
    {
        return Http::get($this->endpoint.'discover/movie?api_key='.env('MOVIE_DB_KEY'))->json();
    }
}