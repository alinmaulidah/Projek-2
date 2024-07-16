@extends('admin')
@section('content')
<body class="bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold mb-4">Admin Dashboard</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>

            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($contacts as $item)
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $item->first_name }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $item->last_name }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $item->email }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $item->phone }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $item->message }}</td>
            <td class="px-6 py-4">
              <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
          </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </body>

  @endsection