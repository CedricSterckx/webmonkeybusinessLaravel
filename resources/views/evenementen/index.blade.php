<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<ul>
    @foreach($evenementen as $event)

        <li> {{ $event->body  }} </li>

    @endforeach

</ul>

</body>
</html>