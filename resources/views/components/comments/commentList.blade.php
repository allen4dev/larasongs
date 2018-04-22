<ul class="CommentList">
  @forelse ($song->comments as $comment)
    <li class="Comment">
      <h4 class="Comment-title">By: {{ $comment->user->name }} on {$comment->created_at}</h4>
      <p class="Comment-body">
        {{ $comment->body }}
      </p>
    </li>
  @empty
    No comments for this song.
  @endforelse
</ul>