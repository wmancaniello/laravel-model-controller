<div class="ms_card">
    <img src="{{ $movie->image }}" class="card-img"alt="{{ $movie->title }}">
    <div class="card-body">
        <div class="d-flex flex-column">
            <h2>{{ $movie->title }} ({{ $movie->date }})</h2>
            <p>Original Title: {{ $movie->original_title }}</p>
            <p>Nationality: {{ $movie->nationality }}</p>
            <p>Vote: {{ $movie->vote }}</p>
        </div>
    </div>
</div>
