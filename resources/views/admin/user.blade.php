@extends('app')

@section('body')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-4xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Admin Dashboard
                </h1>
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    ID
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Email
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Role
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Created At
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 px-6">
                                        {{ $user->id }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->name }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->email }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->role }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $user->created_at }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
