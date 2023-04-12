<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IF</title>
</head>
<body>
    <p>
        @if (count($hobbies) == 1)
            saya punya 1 hobby
            @elseif (count($hobbies) > 1)
                saya punya lebih dari 1 hobby
                @else
                    saya tidak punya hobby
        @endif
    </p>
</body>
</html>