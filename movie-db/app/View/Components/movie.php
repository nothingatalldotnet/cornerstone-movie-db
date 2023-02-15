<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Carbon\Carbon;

class movie extends Component
{
    private $endpoint = 'https://api.themoviedb.org/3/';
    private $genre_list;

    public function __construct(
        public array $result,
    ) {}

    public function render(): View
    {
        $date_string = $this->result['release_date'];
        if($date_string != "") {
            $iso_date = Carbon::createFromFormat('Y-m-d', $date_string)->format('U');
        }


        return view('components.movie', ['iso_date' => $iso_date]);
    }

    private function getGenreList()
    {
        return Http::get($this->endpoint.'genre/movie/list?api_key='.env('MOVIE_DB_KEY'))->json();
    }
}
