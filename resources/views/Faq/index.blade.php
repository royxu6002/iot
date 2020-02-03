@extends('layouts.app')
@section('title', 'this is a page for favorite asked questions')
@section('content')
    <div class="container">
        <h3>this is faq page</h3>
        <form methods="post">
            <div class="form-group">
                <label>Search</label>
                <input type="text" class="form-control mb-2" name="ask" placeholder="Please type into keyword to find the answers" required>
                <button>Search</button>
            </div>
        </form>
        @include('shared._messages')
        @if($faq)
            @foreach($faq as $q)
                <p><b>Q: {{$q->ask}}</b></p>
                <div>A: {{$q->answer}}</div>
                <hr>
            @endforeach
        @endif
    </div>
@endsection