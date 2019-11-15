<li class="comment">
  <div class="d-flex align-items-center text-small">
    <img src="{{ $comment->oauthUser->avatar }}" class="avatar avatar-sm mr-2">
    <div class="text-dark mr-1">{{ $comment->oauthUser->name }}</div>
    <div class="text-muted">{{ $comment->created_at->diffForHumans() }}</div>
  </div>
  <div class="my-2">
    {{ $comment->content }}
  </div>
  <div>
    @include('comments.form')
    {{-- <a href="#" class="text-small replybox">Reply</a> --}}
  </div>
    @include('comments.replies')
</li>
