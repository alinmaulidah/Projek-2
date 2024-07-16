@extends('admin')

@section('content')
    <div class="container mx-auto px-4 py-20">
        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" id="title" name="title" class="form-input">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-bold mb-2">Content</label>
                <textarea id="content" name="content" class="form-textarea"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Create Discussion</button>
        </form>
    </div>
@endsection
