<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h2>Movies</h2>
    <h3>{{$tag}}</h3>

    <ul>
        @foreach ($conmovie as $movie)
            <li>{{$movie}}</li>
        @endforeach
    </ul>
</div>