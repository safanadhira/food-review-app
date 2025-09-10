<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninjas</title>
</head>
<body>
    <h2> Ninjas Page </h2>
    <p> {{ $greetings }} </p>

    @if($greetings == "Hello Ninjas")
        <p> We have some ninjas here! (from the if statement) </p>
    @endif

    <ul>
        @foreach($ninjas as $ninja)
            <li> 
                <p>{{ $ninja['name'] }}</p>
                <a href="/ninjas/{{ $ninja['id']}}">View Details</a>
            </li>
        @endforeach
    </ul>
    <a href="/"> Back to Home Page </a>
</body>
</html>