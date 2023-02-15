@include('partials.header')


<main class="main">
    <div class="wrapper">
        <div class="sidebar">
            <h1>Popular Movies</h1>
            <div class="sort">
                <h2>Sort</h2>
                <select class="sorter">
                    <option value="pop-asc">Popularity Ascending</option>
                    <option value="pop-desc">Popularity Descending</option>
                    <option value="title-asc">Title Ascending</option>
                    <option value="title-desc">Title Descending</option>
                    <option value="date-asc">Release Date Ascending</option>
                    <option value="date-desc">Release Date Descending</option>
                </select>
            </div>
            <div class="filters">
                <h2>Filters</h2>
                <select class="filter">
                    <option value="all">All Genres</option>
                    <option value="action">Genre - Action</option>
                    <option value="">Genre - History</option>
                </select>
            </div>
            <div class="filters">
                <h2>Where to Watch</h2>
            </div>
        </div>
        <div class="content-wrapper">
            @foreach($data['results'] as $result)
                <x-movie :result="$result" />
            @endforeach
        </div>

    </div>
</main>

@include('partials.footer')