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
            <input type="text" id="name" name="name" value="{{ $book->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div>
            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
            <input type="file" id="photo" name="photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            @if($book->photo)
                <img src="{{ asset('storage/' . $book->photo) }}" alt="{{ $book->name }}" class="mt-2 h-20 w-20 object-cover">
            @else
                <span class="mt-2 block">No Photo Available</span>
            @endif
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Penulis</label>
            <textarea id="description" name="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ $machine->penulis }}</textarea>
        </div>

        <div>
            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700">Submit</button>
        </div>
    </form>
</div>
@endsection
