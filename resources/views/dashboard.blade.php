<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">  
                
                 <div class="flex justify-end">
                   <a href="{{ route('tasks.create') }}" class="bg-green-500 text-white text-sm font-medium px-2.5 py-0.5 rounded-md dark:bg-blue-200 dark:text-blue-800 mr-0">Add</a>
                 </div>
                    
                    @if($message = Session::get('success'))
                    <div class="p-4 mb-2 mt-2 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 text-center" role="alert">
                      {{ $message }}
                    </div>
                    @endif

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-2">
                    @if(count($tasks) > 0)
                    <h4 class="flex text-green-500 justify-center font-bold mb-2"> List of Tasks </h4>
                        
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="text-center">
                                <th scope="col" class="py-3 px-6">
                                    Id
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Name of Task
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($tasks as $task)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
                                <td class="py-4 px-6">
                                {{$task->id}} 
                                </td>
                                <td class="py-4 px-6">
                                    {{$task->task}}
                                </td>
                                <td class="py-4 px-6 flex justify-center">
                                    <a class="bg-gray-500 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-blue-200 dark:text-blue-800" href="{{ route('tasks.show', $task->id) }}" class="btn btn-primary btn-sm">View</a>
                                  
                                    <a class="bg-indigo-500 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-blue-200 dark:text-blue-800" href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    
                                    <form method="post" action="{{ route('tasks.destroy', $task->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="bg-red-500 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-green-200 dark:text-green-900 cursor-pointer" value="Delete" />
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                        <h4 class="flex text-green-500 justify-center font-bold mb-2"> No Data Found </h4>
                    @endif
                    </table>
                    </div>
                    <div class="flex justify-center mt-2">
                        {{$tasks->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
