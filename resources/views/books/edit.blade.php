@extends('admin')

@section('content')
<div class="container mx-auto my-8">
    <h1 class="text-2xl font-bold mb-4">Edit Book</h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $book->name) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
            <input type="file" id="photo" name="photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @if($book->photo)
                <img src="{{ asset('storage/' . $book->photo) }}" alt="{{ $book->name }}" class="mt-2 h-20 w-20 object-cover">
            @else
                <span class="mt-2 block">No Photo Available</span>
            @endif
            @error('photo')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="penulis" class="block text-sm font-medium text-gray-700">Penulis</label>
            <input type="text" id="penulis" name="penulis" value="{{ old('penulis', $book->penulis) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('penulis')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
            <input type="text" id="type" name="type" value="{{ old('type', $book->type) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @error('type')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="pdf" class="block text-sm font-medium text-gray-700">PDF</label>
            <input type="file" id="pdf" name="pdf" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @if($book->pdf)
                <a href="{{ asset('storage/' . $book->pdf) }}" target="_blank" class="mt-2 block text-blue-500">View PDF</a>
            @else
                <span class="mt-2 block">No PDF Available</span>
            @endif
            @error('pdf')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700">Submit</button>
        </div>
    </form>
</div>
@endsection
