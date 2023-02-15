<article class="film">
    <a href="#" target="_blank" title="{{ $result['title'] }}">
        <div class="image">
            <img src="https://image.tmdb.org/t/p/original/{{ $result['poster_path'] }}" alt="{{ $result['title'] }}">
        </div>
        <div class="content">
            <h3 class="title">{{ $result['title'] }}</h2>
            <h4 class="">{{ $result['release_date'] }}</h3>
            <span class="pop">{{ $result['popularity'] }}</span>
            <span class="tx">{{ $iso_date }}</span>
        </div>
    </a>
</article>