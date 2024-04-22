<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TaskCounts') }}
        </h2>
    </x-slot>

    <div class="container max-w-3xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="content">
            <table class="shadow-lg border-separate w-full">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="bg-blue-100 border text-left px-8 py-4">
                            name
                        </th>
                        <th class="bg-blue-100 border text-left px-8 py-4">
                            RemainingTaskCounts
                        </th>
                        <th class="bg-blue-100 border text-left px-8 py-4">
                            CompletedTaskCounts
                        </th>                
                        <!-- Add more table headers for other user data -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($taskCountsData as $name => $taskCount )
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                            {{ $name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                            {{ $taskCount['remaining_tasks'] }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                            {{ $taskCount['completed_tasks'] }}
                        </td>
                        <!-- Add more table cells for other user data -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

