<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="content">
            <table class="shadow-lg border-separate w-full">
                <thead class="bg-blue-100">
                    <tr>
                    <th class="bg-blue-100 border text-left px-8 py-4">
                        Name
                    </th>
                    <th class="bg-blue-100 border text-left px-8 py-4">
                        Email
                    </th>
                    <!-- Add more table headers for other user data -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                    <tr>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                        {{ $user->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                        {{ $user->email }}
                    </td>
                    <!-- Add more table cells for other user data -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
