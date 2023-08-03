@extends('layout')
@section('content')
<h1>
    {{ $listings['title'] }}
</h1>
<p>{{$listings['description'] }}</p>
@endsection
