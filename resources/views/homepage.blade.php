<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    <title>Document</title>
</head>
<body>
    <div class="container-flex">
        @foreach($moviesList as $movie)
        <div class="item">
            <ul>
                <li><strong>{{ $movie->title }}</strong></li>
                <li>{{ $movie->original_title }}</li>
                <li>{{ $movie->date }}</li>
                <li>Vote: {{ $movie->vote }}</li>
            </ul>
        </div>
        @endforeach
    </div>
</body>
</html>