<?php

namespace App\Http\Controllers;
 
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;
 
class GeneralController extends Controller
{
    private $endpoint = 'https://api.themoviedb.org/3/discover/movie';

    public function index()
    {
        $data = $this->getLatest();

        return view('welcome', compact('data'));
    }

    private function getLatest()
    {
        return Http::get($this->endpoint.'?api_key='.env('MOVIE_DB_KEY'))->json();
    }
}