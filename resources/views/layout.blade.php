<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Review App</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1><a href="/">🍽️ Food Review</a></h1>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>
</body>
</html>
