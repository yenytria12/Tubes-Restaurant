<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #FFF2E0;">

                <div class="flex justify-end m-2 p-2" style="background-color: #FFF2E0;">
                    <a href="{{ route('admin.tables.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="background-color: #406B8D; color: #FFF2E0;">Add New Table</a>
                </div>

                <div class="flex flex-col">
                    <div class="p-6" style="background-color: #FFF2E0;">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr style="background-color: #406B8D; color: #FFF2E0;">
                                        <th scope="col" class="px-6 py-3">Name</th>
                                        <th scope="col" class="px-6 py-3">Guest Number</th>
                                        <th scope="col" class="px-6 py-3">Status</th>
                                        <th scope="col" class="px-6 py-3">Location</th>
                                        <th scope="col" class="px-6 py-3"><span class="sr-only">Edit</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tables as $table)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" style="background-color:rgb(24, 64, 94); color: #FFF2E0;">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ $table->name }}
                                        </th>
                                        <td class="px-6 py-4">{{ $table->guest_number }}</td>
                                        <td class="px-6 py-4">{{ $table->status }}</td>
                                        <td class="px-6 py-4">{{ $table->location }}</td>
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('admin.tables.edit', $table->id) }}" class="font-medium text-white hover:underline bg-green-500 hover:bg-green-700 rounded-lg px-4 py-2">Edit</a>
                                                <form id="deleteForm-{{ $table->id }}" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" action="{{ route('admin.tables.destroy', $table->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="confirmDelete({{ $table->id }})" class="w-full">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`deleteForm-${id}`).submit();
                }
            });
        }
    </script>

</x-admin-layout>