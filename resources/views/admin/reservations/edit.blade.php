<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Reservation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-start m-2 p-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" style="background-color: #406B8D; color: #FFF2E0;">All Reservations</a>
            </div>

            <div class="flex flex-col m-4 p-4 bg-slate-100 px-6 py-6" style="background-color:rgb(117, 45, 50); border-radius:2%">
                <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}">
                    @csrf
                    @method('PUT')

                    {{-- First Name --}}
                    <div class="mb-6">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900" style="color: #FFF2E0;font-weight: bold;">First Name</label>
                        <input type="text" id="first_name" name="first_name"
                            value="{{ old('first_name', $reservation->first_name) }}" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 @error('first_name') border-red-400 @enderror">
                        @error('first_name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div class="mb-6">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900" style="color: #FFF2E0;font-weight: bold;">Last Name</label>
                        <input type="text" id="last_name" name="last_name"
                            value="{{ old('last_name', $reservation->last_name) }}" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 @error('last_name') border-red-400 @enderror">
                        @error('last_name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900" style="color: #FFF2E0;font-weight: bold;">Email</label>
                        <input type="email" id="email" name="email"
                            value="{{ old('email', $reservation->email) }}" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 @error('email') border-red-400 @enderror">
                        @error('email')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Phone Number --}}
                    <div class="mb-6">
                        <label for="tel_number" class="block mb-2 text-sm font-medium text-gray-900" style="color: #FFF2E0;font-weight: bold;">Phone
                            Number</label>
                        <input type="text" id="tel_number" name="tel_number"
                            value="{{ old('tel_number', $reservation->tel_number) }}" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 @error('tel_number') border-red-400 @enderror">
                        @error('tel_number')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Guest Number --}}
                    <div class="mb-6">
                        <label for="guest_number" class="block mb-2 text-sm font-medium text-gray-900" style="color: #FFF2E0;font-weight: bold;">Guest
                            Number</label>
                        <input type="number" id="guest_number" name="guest_number"
                            value="{{ old('guest_number', $reservation->guest_number) }}" required min="1"
                            max="20" step="1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 @error('guest_number') border-red-400 @enderror">
                        @error('guest_number')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Reservation Date --}}
                    <div class="mb-6">
                        <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900" style="color: #FFF2E0;font-weight: bold;">Reservation
                            Date</label>
                        <input type="datetime-local" id="res_date" name="res_date"
                            value="{{ old('res_date', optional($reservation->res_date)->format('Y-m-d\TH:i:s')) }}"
                            required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 @error('res_date') border-red-400 @enderror">
                        @error('res_date')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Table --}}
                    <div class="mb-6">
                        <label for="table_id" class="block mb-2 text-sm font-medium text-gray-900" style="color: #FFF2E0; font-weight: bold;">Table</label>
                        <select id="table_id" name="table_id" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full @error('table_id') border-red-400 @enderror">
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>{{ $table->name }}
                                    ({{ $table->guest_number }} Guests)</option>
                            @endforeach
                        </select>
                        @error('table_id')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5" style="background-color: #406B8D; color: #FFF2E0;">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>