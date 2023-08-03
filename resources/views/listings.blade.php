<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$heading}}</h1>
    @if (count($listings) == 0)
    <p>There are actually no listings as for now bro.</p>
    @endif
    @foreach($listings as $listing)
        <h1>{{ $listing['title'] }}</h1>
        <p>{{$listing['description'] }}</p>
    @endforeach
</body>
</html>
