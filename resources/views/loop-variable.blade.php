<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOOP PROPERTY || LOOP VARIABLE</title>
</head>
<body>
    {{-- Loop Variable adalah untuk mendapatkan informasi tambahan mengenai loop --}}
    {{-- ada banyak sekali loop property --}}
    {{-- https://tutsforweb.com/loop-variable-foreach-blade-laravel/ --}}

    <ul>
        @for ($hobbies as $hobby)
            <li>{{$loop->iteration}}. {{$hobby}}</li>
        @endfor
    </ul>
</body>
</html>