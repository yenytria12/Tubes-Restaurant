<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.menus.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="background-color: #406B8D; color: #FFF2E0;">Add New Menu</a>
            </div>

            <div class="flex flex-col">
                <div class="p-6 bg-white " style="background-color: #FFF2E0;">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr style="background-color: #406B8D; color: #FFF2E0;">
                                    <th scope="col" class="px-6 py-3">
                                        Menu Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu)

                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" style="background-color:rgb(24, 64, 94); color: #FFF2E0;">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $menu->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $menu->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img src="{{ Storage::url( $menu->image ) }}" class="w-16 h-16 rounded">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $menu->price }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.menus.edit', $menu->id) }}" class="font-medium text-white hover:underline bg-green-500 hover:bg-green-700 rounded-lg px-4 py-2">Edit</a>
                                            <button onclick="confirmDelete('{{ $menu->id }}')" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">Delete</button>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(menuId) {
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
                    // Create a form dynamically and submit it
                    let form = document.createElement('form');
                    form.action = `/admin/menus/${menuId}`;
                    form.method = 'POST';
                    form.innerHTML = `
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    `;
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        }
    </script>

</x-admin-layout>