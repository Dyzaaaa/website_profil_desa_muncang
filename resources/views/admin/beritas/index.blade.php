@extends('admin.layouts.adminapp')

@section('content')
<div class="container">

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="table-container mx-8 mt-8">
        <table class="table table-bordered border border-gray-200 w-2/3 mx-auto">
            <thead>
                <tr>
                    <th class="text-left px-4 py-2 border-b border-gray-200">No</th>
                    <th class="text-left px-4 py-2 border-b border-gray-200">Judul</th>
                    <th class="text-left px-4 py-2 border-b border-gray-200">Isi Berita</th>
                    <th class="text-left px-4 py-2 border-b border-gray-200">Gambar</th>
                    <th class="text-left px-4 py-2 border-b border-gray-200">Tanggal Upload</th>
                    <th class="text-left px-4 py-2 border-b border-gray-200">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beritas as $berita)
                <tr>
                    <td class="px-4 py-2 border-b border-gray-200">{{ $berita->id }}</td>
                    <td class="px-4 py-2 border-b border-gray-200">{{ $berita->judul }}</td>
                    <td class="px-4 py-2 border-b border-gray-200">{{ Str::limit($berita->isi_berita, 100) }}</td>
                    <td class="px-4 py-2 border-b border-gray-200">
                        <img src="{{ asset('public/images/' . $berita->gambar) }}" width="100" class="rounded-md">
                    </td>
                    <td class="px-4 py-2 border-b border-gray-200">{{ $berita->tanggal_upload }}</td>
                    <td class="px-4 py-2 border-b border-gray-200">
                    <div class="mt-2">
                            <a href="{{ route('berita.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                Tambah
                            </a>
                        </div>
                    <a href="{{ route('berita.edit', $berita->id) }}" class="inline-flex items-center px-2 py-1 bg-yellow-500 hover:bg-yellow-700 text-white rounded-md">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-3h1v3zm0-4h-1V7h1v5z"></path>
                            </svg>
                            Edit
                        </a>
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-2 py-1 bg-red-500 hover:bg-red-700 text-white rounded-md" onclick="return confirm('Are you sure?')">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
