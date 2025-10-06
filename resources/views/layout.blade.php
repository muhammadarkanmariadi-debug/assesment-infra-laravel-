<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Produk</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">
  <nav class="bg-white shadow-md mb-6 px-6 py-4">
    <div class="flex justify-between items-center mx-auto container">
      <h1 class="font-bold text-indigo-600 text-xl">Manajemen Produk</h1>
      <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-indigo-500">Dashboard</a>
    </div>
  </nav>

  <main class="mx-auto px-4 container">
    @yield('content')
  </main>
</body>
</html>
