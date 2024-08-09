@extends('admin.layouts.adminapp')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Daftar Monografi</h1>

    <!-- Button in the last column -->
    <div class="flex justify-end mb-4">
        <a href="{{ route('monografis.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Tambah Baru</a>
    </div>

    <!-- Wrap table in a container with flexbox for alignment -->
    <div class="flex justify-end">
        <div class="overflow-x-auto w-full max-w-screen-lg">
            <table class="w-full divide-y divide-gray-200 bg-white shadow-md rounded-lg">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Desa</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($monografis as $monografi)
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{ $monografi->desa }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('monografis.show', $monografi->id) }}" class="text-indigo-600 hover:text-indigo-900">Lihat</a>
                                <a href="{{ route('monografis.edit', $monografi->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">Edit</a>
                                <form action="{{ route('monografis.destroy', $monografi->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
