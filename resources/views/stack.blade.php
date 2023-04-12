<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STACK</title>
</head>
<body>
    @push("script")
        <script src="1.js"></script>
    @endpush

    @push("script")
        <script src="2.js"></script>
    @endpush

    @prepend("script")
        <script src="3.js"></script>
    @endprepend

    @stack("script")
</body>
</html>