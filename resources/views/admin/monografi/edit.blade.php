<!-- resources/views/admin/monografi/edit.blade.php -->
@extends('admin.layouts.adminapp')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Edit Monografi</h1>
    
    <form action="{{ route('monografis.update', $monografi->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('admin.monografi.form', ['monografi' => $monografi])
    
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
    </div>
</form>
</div>
@endsection
