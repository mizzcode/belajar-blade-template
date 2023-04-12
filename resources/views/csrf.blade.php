<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF</title>
</head>
<body>
    <form action="">
        @csrf
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form>
</body>
</html>