@extends('app')
@section('body')
    @include('navbar-home')
<div class="container mx-auto my-9">
    <h1 class="text-2xl font-bold mb-4">Book</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
        @foreach ($books as $book)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $book->photo) }}" alt="{{ $book->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold">{{ $book->name }}</h2>
                    <p class="text-gray-700 mt-2">{{ $book->penulis }}</p>
                    <br>
                    <a href="{{ route('books.show', $book->id) }}"
                        class="pay-button inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         book
                     </a>
    
                                    
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('footer')

@endsection
