@isset($title)
<h1>{{$title}}</h1>
    @else
    <h1>tidak ada title</h1>
@endisset

@isset($desc)
    <p>{{$desc}}</p>
@endisset