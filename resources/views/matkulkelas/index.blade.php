@extends('layout.app')

@section('title', 'Kelola Matkul Kelas')
@section('page-title', 'Kelola Mata Kuliah Kelas')

@section('content')

<div class="bg-white shadow rounded-lg p-4 sm:p-6">

```
{{-- Header dan tombol tambah --}}
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-2">
    <h2 class="text-lg font-semibold text-gray-700">Daftar Mata Kuliah Kelas</h2>
    <a href="{{ route('matkulkelas.tambah') }}" 
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition text-sm sm:text-base w-full sm:w-auto text-center">
        + Tambah Data
    </a>
</div>

{{-- Pesan sukses --}}
@if (session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4 text-sm">
        {{ session('success') }}
    </div>
@endif

{{-- Jika data kosong --}}
@if ($matkulkelass->isEmpty())
    <p class="text-gray-500 text-center py-6">Belum ada data mata kuliah kelas.</p>
@else
    {{-- Bungkus tabel dengan overflow agar bisa di-scroll di HP --}}
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 text-sm">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="border border-gray-200 px-4 py-2 text-center">No</th>
                    <th class="border border-gray-200 px-4 py-2">Mata Kuliah</th>
                    <th class="border border-gray-200 px-4 py-2">Kelas</th>
                    <th class="border border-gray-200 px-4 py-2">Dosen</th>
                    <th class="border border-gray-200 px-4 py-2">Asisten</th>
                    <th class="border border-gray-200 px-4 py-2">Asisten 2</th>
                    <th class="border border-gray-200 px-4 py-2">Lab</th>
                    <th class="border border-gray-200 px-4 py-2">Hari</th>
                    <th class="border border-gray-200 px-4 py-2">Jam</th>
                    <th class="border border-gray-200 px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matkulkelass as $index => $item)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $item->matkul->nama_matkul ?? '-' }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $item->kelas->nama_kelas ?? '-' }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $item->dosen->nama_dosen ?? '-' }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $item->asisten->nama_asisten ?? '-' }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $item->asisten2->nama_asisten ?? '-' }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $item->lab }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $item->hari }}</td>
                        <td class="border border-gray-200 px-4 py-2">{{ $item->jam }}</td>
                        <td class="border border-gray-200 px-4 py-2 text-center space-y-2 sm:space-y-0 sm:space-x-2">
                            <a href="{{ route('matkulkelas.edit', $item->id) }}" 
                               class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 transition block sm:inline-block w-full sm:w-auto text-sm text-center">
                                Edit
                            </a>
                            <form action="{{ route('matkulkelas.destroy', $item->id) }}" method="POST" 
                                  class="inline" 
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition block sm:inline-block w-full sm:w-auto text-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
```

</div>
@endsection
