<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ninja Network</title>
  
  @vite('resources/css/app.css')
</head>
<body>
  @if (session('success'))
    <div class="bg-green-200 text-green-800 p-4 mb-4 rounded">
      {{ session('success') }}
    </div>
  @endif

  <header>
    <nav>
      <h1>PBKK</h1>
      <a href="/">
        Homepage
      </a>
      <a href="{{ route('ninjas.index') }}"> 
        All Ninjas
      </a>
      <a href="{{ route('ninjas.create') }}">
        Create New Ninja
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>