<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="content">
            <table class="shadow-lg border-separate w-full">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="bg-blue-100 border text-left px-8 py-4">
                            Task-Title
                        </th>
                        <th class="bg-blue-100 border text-left px-8 py-4">
                            Charge
                        </th>
                        <th class="bg-blue-100 border text-left px-8 py-4">
                            Due Date
                        </th>
                        <th class="bg-blue-100 border text-left px-8 py-4">
                            Completed
                        </th>   
                        <th class="bg-blue-100 border text-left px-8 py-4">
                            Overtime
                        </th>                   
                        <!-- Add more table headers for other user data -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($tasks as $task)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                            {{ $task->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                            {{ $task->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                            {{ $task->due_date }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                            @if($task->completed == 1)
                            済
                            @else
                            
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
                            @if($task->overtime < date('Y-m-d') && $task->completed == 0)
                            遅れ
                            @else
                            
                            @endif
                        <!-- Add more table cells for other user data -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
