@foreach (['success', 'warning', 'message'] as $msg)
    @if (session()->has($msg))
        {{-- expr --}}
        <div class="container alert-{{ $msg }}">
            {{ session()->get($msg) }}
        </div>
    @endif
@endforeach
