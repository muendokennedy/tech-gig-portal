    @extends('layout')
    @section('content')

    @if (count($listings) == 0)
    <p>There are actually no listings as for now bro.</p>
    @endif
    @foreach($listings as $listing)
        <h1>
            <a href="/listing/{{ $listing['id'] }}">
            {{ $listing['title'] }}
            </a>
        </h1>
        <h1>{{ $listing['title'] }}</h1>
        <p>{{$listing['description'] }}</p>
    @endforeach
    @endsection
