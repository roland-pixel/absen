@extends('layout.app')

@section('title', 'Dashboard')
@section('page-title', 'Selamat Datang di Dashboard')

@section('content')
{{-- Statistik Ringkas --}}
<div class="flex flex-wrap justify-evenly gap-6">

  <a href="{{ route('kelolamatkul') }}" class="group bg-gradient-to-br from-indigo-50 to-white shadow-md rounded-xl p-6 hover:shadow-lg transition-all border border-indigo-100 w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)]">
    <div class="flex items-center justify-between">
      <div>
        <h2 class="text-lg font-semibold text-indigo-700 mb-1">Kelola Matkul</h2>
        <p class="text-gray-600 text-sm">Tambah, ubah, atau hapus data mata kuliah.</p>
      </div>
      <div class="p-3 bg-indigo-100 rounded-full group-hover:bg-indigo-600 transition-all">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
        </svg>
      </div>
    </div>
  </a>

  <a href="{{ route('kelolaasisten') }}" class="group bg-gradient-to-br from-emerald-50 to-white shadow-md rounded-xl p-6 hover:shadow-lg transition-all border border-emerald-100 w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)]">
    <div class="flex items-center justify-between">
      <div>
        <h2 class="text-lg font-semibold text-emerald-700 mb-1">Kelola Asisten</h2>
        <p class="text-gray-600 text-sm">Atur data asisten pengajar per kelas.</p>
      </div>
      <div class="p-3 bg-emerald-100 rounded-full group-hover:bg-emerald-600 transition-all">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V4H2v16h5m10 0l-4-4m0 0l-4 4m4-4v-4" />
        </svg>
      </div>
    </div>
  </a>

  <a href="{{ route('keloladosen') }}" class="group bg-gradient-to-br from-amber-50 to-white shadow-md rounded-xl p-6 hover:shadow-lg transition-all border border-amber-100 w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)]">
    <div class="flex items-center justify-between">
      <div>
        <h2 class="text-lg font-semibold text-amber-700 mb-1">Kelola Dosen</h2>
        <p class="text-gray-600 text-sm">Lihat dan kelola data dosen pengajar.</p>
      </div>
      <div class="p-3 bg-amber-100 rounded-full group-hover:bg-amber-600 transition-all">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.489 0 4.795.602 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
    </div>
  </a>

  <a href="{{ route('matkulkelas.index') }}" class="group bg-gradient-to-br from-sky-50 to-white shadow-md rounded-xl p-6 hover:shadow-lg transition-all border border-sky-100 w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)]">
    <div class="flex items-center justify-between">
      <div>
        <h2 class="text-lg font-semibold text-sky-700 mb-1">Kelola Matkul Kelas</h2>
        <p class="text-gray-600 text-sm">Hubungkan kelas, matkul, dosen, dan asisten.</p>
      </div>
      <div class="p-3 bg-sky-100 rounded-full group-hover:bg-sky-600 transition-all">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sky-600 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 16v-2m8-6h2M4 12H2m15.364 6.364l1.414 1.414M6.343 6.343l-1.414 1.414m0 8.486l1.414 1.414M18.364 5.636l1.414 1.414" />
        </svg>
      </div>
    </div>
  </a>

  <a href="{{ route('absen.index') }}" class="group bg-gradient-to-br from-rose-50 to-white shadow-md rounded-xl p-6 hover:shadow-lg transition-all border border-rose-100 w-full sm:w-[calc(50%-0.75rem)] lg:w-[calc(33.333%-1rem)]">
    <div class="flex items-center justify-between">
      <div>
        <h2 class="text-lg font-semibold text-rose-700 mb-1">Kelola Absen</h2>
        <p class="text-gray-600 text-sm">Pantau dan kelola absensi per pertemuan.</p>
      </div>
      <div class="p-3 bg-rose-100 rounded-full group-hover:bg-rose-600 transition-all">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rose-600 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
    </div>
  </a>

</div>


{{-- Chart --}}
<div class="bg-white rounded-xl shadow p-6 mb-8 mt-8">
  <h2 class="text-lg font-semibold text-gray-700 mb-4">Statistik Data</h2>
  <canvas id="dashboardChart" height="120"></canvas>
</div>



{{-- Chart.js CDN --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('dashboardChart').getContext('2d');
  const chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Matkul', 'Asisten', 'Dosen', 'Matkul Kelas'],
      datasets: [{
        label: 'Jumlah Data',
        data: [{{ $jumlahMatkul }}, {{ $jumlahAsisten }}, {{ $jumlahDosen }}, {{ $jumlahMatkulKelas }}],
        backgroundColor: [
          'rgba(99, 102, 241, 0.6)',  // indigo
          'rgba(16, 185, 129, 0.6)',  // emerald
          'rgba(251, 191, 36, 0.6)',  // amber
          'rgba(56, 189, 248, 0.6)'   // sky
        ],
        borderColor: [
          'rgb(99, 102, 241)',
          'rgb(16, 185, 129)',
          'rgb(251, 191, 36)',
          'rgb(56, 189, 248)'
        ],
        borderWidth: 1,
        borderRadius: 5
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        title: {
          display: true,
          text: 'Distribusi Data Sistem',
          color: '#374151',
          font: { size: 16, weight: 'bold' }
        }
      },
      scales: {
        y: { beginAtZero: true, ticks: { stepSize: 1 } }
      }
    }
  });
</script>
@endsection
