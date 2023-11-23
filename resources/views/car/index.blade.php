<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>listado de autos</h1>

    <ul>

        @foreach ( $cars as $car)

        <li>

            {{$car->year}} {{$car->make}} {{$car->model}} {{$car->color}}




        </li>
            
        @endforeach




    </ul>
    
</body>
</html>