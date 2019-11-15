@foreach (['success', 'warning', 'message'] as $msg)
    @if (session()->has($msg))
        {{-- expr --}}
        <div class="container alert-{{ $msg }} lead">
            <p>{{ session()->get($msg) }}</p>
        </div>
    @endif
@endforeach
