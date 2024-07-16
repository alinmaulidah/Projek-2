<!-- resources/views/books/show.blade.php -->

@extends('app')

@section('body')
    @include('navbar-home')

<div class="container mx-auto my-5">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="{{ asset('storage/' . $book->photo) }}" alt="{{ $book->name }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $book->name }}</h1>
            <p class="text-gray-700 mb-4"><strong>Penulis</strong> {{ $book->penulis }}</p>

            @if ($book->type == 'buku1')
                <a href="https://hastie.su.domains/ElemStatLearn/printings/ESLII_print12_toc.pdf" target="_blank"
                   class="pay-button inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    View PDF
                </a>
                @elseif($book->type == 'book2')
                <a href="https://oxvard.wordpress.com/wp-content/uploads/2018/05/engineering-mechanics-dynamics-7th-edition-j-l-meriam-l-g-kraige.pdf" target="_blank"
                class="pay-button inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 View PDF
             </a>
                @elseif($book->type == 'book3')
                <a href="https://engineeringstatics.org/pdf/statics.pdf" target="_blank"
                class="pay-button inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 View PDF
                @elseif($book->type == 'book4')
                <a href="" target="_blank"
                class="pay-button inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 View PDF
                @elseif($book->type == 'book5')
                <a href="" target="_blank"
                class="pay-button inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 View PDF



            @else
                <p class="text-red-500">This book is not available as a PDF.</p>
            @endif

            <a href="{{ url()->previous() }}"
               class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Back to List
            </a>
        </div>
    </div>
</div>
@endsection
