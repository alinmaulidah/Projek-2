@extends('admin')

@section('content')
    <div class="container mx-auto px-4 py-20">
        @foreach ($discussions as $discussion)
            <div class="bg-white p-4 rounded-md shadow-md mb-6">
                <div class="flex items-center">
                    <div class="flex-1">
                        <h5 class="text-gray-900">{{ $discussion->title }}</h5>
                        <p class="text-gray-700">{{ Str::limit($discussion->content, 150) }}</p>
                        <p class="text-gray-500 text-sm">Created by <a href="#">{{ $discussion->user->name }}</a> {{ $discussion->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="text-gray-500 text-sm text-right">
                        <!-- View and comment counts here -->
                    </div>
                </div>
            </div>
        @endforeach

        {{ $discussions->links() }}
    </div>
@endsection
