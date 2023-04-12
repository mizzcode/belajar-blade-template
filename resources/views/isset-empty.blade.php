<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isset and Empty</title>
</head>
<body>
    <p>
        @isset($name)
            Hello {{$name}}
        @endisset
    </p>
    <p>
        @empty($hobbies)
            saya tidak punya hoby
        @endempty
    </p>
</body>
</html>