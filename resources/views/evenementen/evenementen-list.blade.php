<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>





<ul>
    @foreach ($evenementen as $event)

        <li><a href="/evenement/{{$event->id}}"> {{ $event[1]->Naam }} </a></li>

    @endforeach;

</ul>

</body>
</html>