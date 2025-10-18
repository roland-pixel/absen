@extends('layout.app')

@section('title', 'Dashboard')
@section('page-title', 'Selamat Datang di Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

  <a href="{{ route('kelolamatkul') }}" class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-2">Kelola Matkul</h2>
    <p class="text-gray-500 text-sm">Tambah, ubah, atau hapus data mata kuliah.</p>
  </a>

  <a href="{{ route('kelolaasisten') }}" class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-2">Kelola Asisten</h2>
    <p class="text-gray-500 text-sm">Atur data asisten pengajar per kelas.</p>
  </a>

  <a href="{{ route('keloladosen') }}" class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-2">Kelola Dosen</h2>
    <p class="text-gray-500 text-sm">Lihat dan kelola data dosen pengajar.</p>
  </a>

  <a href="{{ route('matkulkelas.index') }}" class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-2">Kelola Matkul Kelas</h2>
    <p class="text-gray-500 text-sm">Hubungkan kelas, matkul, dosen, dan asisten.</p>
  </a>

  <a href="{{ route('absen.index') }}" class="bg-white shadow rounded-lg p-6">
    <h2 class="text-lg font-semibold text-gray-700 mb-2">Kelola Absen</h2>
    <p class="text-gray-500 text-sm">Pantau dan kelola absensi per pertemuan.</p>
  </a>

</div>
@endsection
