<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Carbon\Carbon;

class movie extends Component
{
    public function __construct(
        public array $result,
        // public string $iso_date,
    ) {}

    public function render(): View
    {
        $date_string = $this->result['release_date'];
        if($date_string != "") {
            $this->iso_date = Carbon::createFromFormat('Y-m-d', $date_string)->format('U');
        }

        return view('components.movie');
    }
}
