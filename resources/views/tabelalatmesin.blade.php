@extends('admin')

@section('content')

<div class="container mx-auto my-8">
    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">Machines</h1>
        <a href="{{ route('machines.create') }}" class="btn btn-primary">Add New Machine</a>
    </div>
    
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200">Name</th>
                    <th class="py-2 px-4 border-b border-gray-200">Photo</th>
                    <th class="py-2 px-4 border-b border-gray-200">Description</th>
                    <th class="py-2 px-4 border-b border-gray-200">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($machines as $machine)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $machine->name }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            @if($machine->photo)
                                <img src="{{ asset('storage/' . $machine->photo) }}" alt="{{ $machine->name }}" class="h-16 w-16 object-cover">
                            @else
                                No Photo Available
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $machine->description }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <a href="{{ route('machines.edit', $machine->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('machines.destroy', $machine->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this machine?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
