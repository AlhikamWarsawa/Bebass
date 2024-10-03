<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="w-full md:w-1/2">
                                    <form class="flex items-center">
                                        <label for="simple-search" class="sr-only">Search</label>
                                        <div class="relative w-full">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                        </div>
                                    </form>
                                </div>
                                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                    <button type="button" onclick="window.location='{{ route('Student.create') }}'" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Daftar
                                    </button>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">Id</th>
                                        <th scope="col" class="px-4 py-3">Name</th>
                                        <th scope="col" class="px-4 py-3">Gender</th>
                                        <th scope="col" class="px-4 py-3">Email</th>
                                        <th scope="col" class="px-4 py-3">Phone</th>
                                        <th scope="col" class="px-4 py-3">Address</th>
                                        <th scope="col" class="px-4 py-3">School Origin</th>
                                        <th scope="col" class="px-4 py-3">Unit</th>
                                        <th scope="col" class="px-4 py-3">Registration Type</th>
{{--                                        <th scope="col" class="px-4 py-3">Actions</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($students as $student)
                                        <tr class="border-b dark:border-gray-700">
                                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $student->id }}</th>
                                            <td class="px-4 py-3">{{ $student->name }}</td>
                                            <td class="px-4 py-3">{{ $student->gender }}</td>
                                            <td class="px-4 py-3">{{ $student->email }}</td>
                                            <td class="px-4 py-3">{{ $student->phone }}</td>
                                            <td class="px-4 py-3">{{ $student->address }}</td>
                                            <td class="px-4 py-3">{{ $student->school_origin }}</td>
                                            <td class="px-4 py-3">{{ $student->unit }}</td>
                                            <td class="px-4 py-3">{{ $student->registration_type }}</td>
{{--                                            <td class="px-4 py-3 flex items-center justify-end">--}}
{{--                                                <a href="{{ route('Student.store', $student->id) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-500">Edit</a>--}}
{{--                                                <form action="{{ route('Student.destroy', $student->id) }}" method="POST" class="ml-2">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-500">Delete</button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                    Showing
                                    <span class="font-semibold text-gray-900 dark:text-white">{{ $students->firstItem() }}</span>
                                    to
                                    <span class="font-semibold text-gray-900 dark:text-white">{{ $students->lastItem() }}</span>
                                    of
                                    <span class="font-semibold text-gray-900 dark:text-white">{{ $students->total() }}</span>
                                </span>
                                {{ $students->links() }}
                            </nav>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
