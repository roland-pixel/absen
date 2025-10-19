<!doctype html>

<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'Dashboard Absen')</title>
  </head>
  <body class="bg-gray-100 min-h-screen flex flex-col">

<!-- Navbar -->
<nav x-data="{ open: false }" class="bg-blue-700 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <span class="text-xl font-bold">Dashboard</span>
      </div>

      <!-- Menu desktop -->
      <div class="hidden md:flex space-x-4">
        <a href="{{ route('dashboard') }}" class="hover:bg-blue-600 px-3 py-2 rounded">Dashboard</a>
        <a href="{{ route('kelolaasisten') }}" class="hover:bg-blue-600 px-3 py-2 rounded">Kelola Asisten</a>
        <a href="{{ route('keloladosen') }}" class="hover:bg-blue-600 px-3 py-2 rounded">Kelola Dosen</a>
        <a href="{{ route('kelolamatkul') }}" class="hover:bg-blue-600 px-3 py-2 rounded">Kelola Matkul</a>
        <a href="{{ route('matkulkelas.index') }}" class="hover:bg-blue-600 px-3 py-2 rounded">Matkul Kelas</a>
        <a href="{{ route('absen.index') }}" class="hover:bg-blue-600 px-3 py-2 rounded">Kelola Absen</a>
      </div>

      <!-- Tombol hamburger (mobile) -->
      <div class="md:hidden flex items-center">
        <button @click="open = !open" class="focus:outline-none text-2xl">☰</button>
      </div>
    </div>
  </div>

  <!-- Dropdown menu mobile -->
  <div x-show="open" class="md:hidden bg-blue-600">
    <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-blue-500">Dashboard</a>
    <a href="{{ route('kelolaasisten') }}" class="block px-4 py-2 hover:bg-blue-500">Kelola Asisten</a>
    <a href="{{ route('keloladosen') }}" class="block px-4 py-2 hover:bg-blue-500">Kelola Dosen</a>
    <a href="{{ route('kelolamatkul') }}" class="block px-4 py-2 hover:bg-blue-500">Kelola Matkul</a>
    <a href="{{ route('matkulkelas.index') }}" class="block px-4 py-2 hover:bg-blue-500">Matkul Kelas</a>
    <a href="{{ route('absen.index') }}" class="block px-4 py-2 hover:bg-blue-500">Kelola Absen</a>
  </div>
</nav>

<!-- Konten utama -->
<main class="flex-1 p-4 md:p-8">
  <h1 class="text-2xl md:text-3xl font-bold text-gray-700 mb-6">@yield('page-title')</h1>
  @yield('content')
</main>

<!-- Footer (selalu di bawah layar) -->
<footer class="bg-white border-t text-center py-4 text-gray-600 text-sm mt-auto">
  © 2025 Sistem Absen
</footer>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  </body>
</html>
