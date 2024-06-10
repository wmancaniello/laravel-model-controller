<div>
    <div class="card-img">
        <img src="{{ $movie->image }}" class="card-img"alt="{{ $movie->title }}">
    </div>
    <div class="card-body">
        <div class="d-flex flex-column">
            <h2>{{ $movie->title }} ({{ $movie->date }})</h2>
            <p>Original Title: {{ $movie->original_title }}</p>
            <p> Nationality:
                @if (strpos($movie->nationality, 'american') !== false && strpos($movie->nationality, 'british') !== false)
                    <img class="flag" src="https://img.icons8.com/?size=100&id=15532&format=png&color=000000"
                        alt="">
                    /
                    <img class="flag" src="https://img.icons8.com/?size=100&id=15534&format=png&color=000000"
                        alt="">
                @elseif (strpos($movie->nationality, 'american') !== false)
                    <img class="flag" src="https://img.icons8.com/?size=100&id=15532&format=png&color=000000"
                        alt="">
                @elseif (strpos($movie->nationality, 'british') !== false)
                    <img class="flag" src="https://img.icons8.com/?size=100&id=15534&format=png&color=000000"
                        alt="">
                @endif
            </p>
            <p>Vote: {{ $movie->vote }}</p>
        </div>
    </div>
</div>
