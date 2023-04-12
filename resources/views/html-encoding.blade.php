<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML ENCODING</title>
</head>
<body>
    {{-- Harap Bijak karena bisa aja kena XSS atau Cross Site Scripting --}}
    {{-- Jangan Mudah Percaya Input dari Luar !! --}}
    {{-- {!!$name!!} --}}


    {{-- Secara Default Laravel sudah pakai htmlspecialchars untuk mengamankan data dari XSS --}}
    {{-- Sehingga jika ada script aneh yang di input akan di encode --}}
    {{$name}}
</body>
</html>