<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PBKK PROJECT</title>

  @vite('resources/css/app.css')
</head>
<body class="flex flex-col items-center justify-center min-h-screen text-center">
  <h1>Welcome!</h1>
  <p>Discover delicious dishes and share your thoughts.</p>
  
  <a href="/foods" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
    Start
  </a>
</body>
</html>