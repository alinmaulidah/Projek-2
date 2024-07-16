@extends('app')

@section('body')
    @include('navbar-home')

    <main class="container mx-auto px-4 py-20">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Inner sidebar -->
            <aside class="hidden md:block md:col-span-1">
                <div class="bg-white p-4 rounded-md shadow-md">
                    <button class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
                        NEW DISCUSSION
                    </button>
                    <nav class="mt-4">
                        <a href="javascript:void(0)" class="block py-2 text-gray-700 hover:bg-gray-100">Teknik dan Tips</a>
                        <a href="javascript:void(0)" class="block py-2 text-gray-700 hover:bg-gray-100">Tutorial dan Panduan</a>
                        <a href="javascript:void(0)" class="block py-2 text-gray-700 hover:bg-gray-100">Event dan Workshop</a>
                    </nav>
                </div>
            </aside>

            <!-- Inner main -->
            <div class="col-span-1 md:col-span-3">
                <div class="bg-white p-4 rounded-md shadow-md mb-6">
                    <div class="flex justify-between items-center">
                        <select class="form-select text-gray-700">
                            <option value="1">Diskusi Umum</option>
                            <option value="3">Forum</option>
                        </select>
                        <div class="relative">
                            <input type="text" class="form-input bg-gray-200 border-gray-200 shadow-none mb-4 mt-4" placeholder="Search forum">
                        </div>
                    </div>
                </div>

                <!-- Forum List -->
                <div>
                    @foreach ($discussions as $discussion)
                        <div class="bg-white p-4 rounded-md shadow-md mb-4">
                            <div class="flex items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-full w-12 h-12 mr-4" alt="User">
                                <div class="flex-1">
                                    <h5 class="text-gray-900">{{ $discussion->title }}</h5>
                                    <p class="text-gray-700">{{ $discussion->content }}</p>
                                    <p class="text-gray-500 text-sm">
                                        <a href="javascript:void(0)" class="text-blue-500">{{ $discussion->user->name }}</a>
                                        replied <span class="font-bold">{{ $discussion->created_at->diffForHumans() }}</span>
                                    </p>
                                </div>
                                <div class="text-gray-500 text-sm text-right">
                                    <span class="inline-block mr-2"><i class="far fa-eye"></i> {{ $discussion->views }}</span>
                                    <span><i class="far fa-comment ml-2"></i> {{ $discussion->replies_count }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <ul class="pagination pagination-sm pagination-circle justify-content-center mb-0">
                        <li class="page-item disabled">
                            <span class="page-link has-icon"><i class="material-icons">chevron_left</i></span>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item active"><span class="page-link">2</span></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item">
                            <a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">chevron_right</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
