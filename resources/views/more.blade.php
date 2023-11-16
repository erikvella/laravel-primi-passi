<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>More Info</title>
</head>

<body>
    <h1>{{ $titolo }}</h1>



    <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/more">MORE INFO</a></li>
    </ul>

    <h2>{{ $par }}</h2>

    <ul>
        @foreach ($people as $person)
            <li>{{ $person['name'] }} {{ $person['surname'] }}</li>
        @endforeach
    </ul>
</body>

</html>
