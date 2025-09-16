<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PBKK PROJECT</title>

  @vite('resources/css/app.css')
</head>
<body class="flex flex-col items-center justify-center min-h-screen text-center">
  <h1>Welcome to My Website!</h1>
  <p>I have some Ninjas! Click the button below.</p>
  
  <a href="/ninjas" class="btn mt-4 inline-block">
    Find Ninjas!
  </a>
</body>
</html>