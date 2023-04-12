<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While</title>
</head>
<body>
    @while ($i < 10)
        saat ini no {{$i}}
        @php
            $i++
        @endphp
    @endwhile
</body>
</html>