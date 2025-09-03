<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninjas</title>
</head>
<body>
    <h2> Ninjas Page </h2>
    <p> {{ $greetings }} </p>

    <ul>
        <li>List of Ninjas:
        <a href="">
            {{ $ninjas[0]['name'] }}
        </a>
        </li>
        <li>List of Ninjas:
        <a href="">
            {{ $ninjas[1]['name'] }}
        </a>
        </li>
</body>
</html>