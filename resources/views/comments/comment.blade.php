<li class="comment">
  <div class="d-flex align-items-center text-small">
    {{-- <img src="{{ $comment->user->avatar }}" class="avatar avatar-sm mr-2"> --}}
    <div class="mr-1 badge badge-primary">{{ $comment->user->name }}</div>
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
