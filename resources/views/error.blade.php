<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERROR</title>
</head>
<body>
    @error('name')
        {{$message}}
    @enderror

    @error('password')
        {{$message}}
    @enderror
    </body>
    </html>