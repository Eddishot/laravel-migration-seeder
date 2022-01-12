<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Travles</title>

        
    </head>
    <body>
        @dump($travels)

        @foreach ($travels as $travel)
        <h1> Travel number{{ $travel['id'] }} </h1>
        <h2> Airplane: {{ $travel['airport'] }} </h2>
        <p> Description: {{ $travel['description'] }} </p>
        <p> Name of the Airline: {{ $travel['airline'] }} </p>
    @endforeach


    </body>
</html>
