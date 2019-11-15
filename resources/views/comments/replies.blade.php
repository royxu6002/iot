@if(isset($comments[$comment->id]))
    <ol class="comments">
        @foreach ($comments[$comment->id] as $comment)
            @include('comments.comment')
        @endforeach
    </ol>
@endif
