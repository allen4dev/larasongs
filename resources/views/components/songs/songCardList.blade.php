<section class="SongCardList">
    @forelse ($songs as $song)
        <article class="SongCard">
            <figure SongCard>
                <img class="Song-photo" src="{{ $song->cover }}" alt="{{ $song->title }}" />

                <figcaption class="Song-description">
                    <h3 class="Song-title">
                        <a href="/songs/{{ $song->id }}" class="Song-url">{{ $song->title }}</a>
                    </h3>
                    <a href="{{ route('users.detail', $song->user) }}" class="Song-artist">{{ $song->user->name }}</a>
                </figcaption>
            </figure>
        </article>
    @empty
        <p>No songs found.</p>
    @endforelse