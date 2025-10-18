<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'Dashboard Absen')</title>
  </head>
  <body class="bg-gray-100">

    <div x-data="{ open: false }" class="min-h-screen flex flex-col md:flex-row">

      <!-- Navbar (hanya muncul di layar kecil) -->
      <header class="bg-blue-700 text-white flex items-center justify-between p-4 md:hidden">
        <h1 class="text-lg font-bold">Dashboard</h1>
        <button @click="open = !open" class="text-2xl focus:outline-none">☰</button>
      </header>

      <!-- Sidebar -->
      <aside 
        class="bg-blue-700 text-white w-64 flex flex-col fixed md:static inset-y-0 left-0 transform md:translate-x-0 transition-transform duration-300 ease-in-out z-50"
        :class="open ? 'translate-x-0' : '-translate-x-full md:translate-x-0'"
      >
        <div class="p-4 text-2xl font-bold border-b border-blue-500">
          Dashboard
        </div>
        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
          <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-blue-600 transition">Dashboard</a>
          <a href="{{ route('kelolaasisten') }}" class="block px-4 py-2 rounded hover:bg-blue-600 transition">Kelola Asisten</a>
          <a href="{{ route('keloladosen') }}" class="block px-4 py-2 rounded hover:bg-blue-600 transition">Kelola Dosen</a>
          <a href="{{ route('kelolamatkul') }}" class="block px-4 py-2 rounded hover:bg-blue-600 transition">Kelola Matkul</a>
          <a href="{{ route('matkulkelas.index') }}" class="block px-4 py-2 rounded hover:bg-blue-600 transition">Kelola Matkul Kelas</a>
          <a href="{{ route('absen.index') }}" class="block px-4 py-2 rounded hover:bg-blue-600 transition">Kelola Absen</a>
        </nav>
        <div class="p-4 border-t border-blue-500 text-sm">
          © 2025 Sistem Absen
        </div>
      </aside>

      <!-- Overlay (untuk menutup sidebar di HP) -->
      <div 
        x-show="open" 
        @click="open = false"
        class="fixed inset-0 bg-black bg-opacity-40 md:hidden"
      ></div>

      <!-- Konten utama -->
      <main class="flex-1 p-4 md:p-8 mt-14 md:mt-0 overflow-y-auto md:ml-0">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-700 mb-6">@yield('page-title')</h1>
        @yield('content')
      </main>
    </div>

    <!-- Alpine.js untuk toggle sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  </body>
</html>
