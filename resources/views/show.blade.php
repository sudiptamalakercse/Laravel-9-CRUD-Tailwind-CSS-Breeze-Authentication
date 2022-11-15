<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <h4 class="flex text-green-500 justify-center font-bold mb-2"> Task Details </h4>                      
                        <div class="grid gap-0 md:grid-cols-3">
                            <div>
                            </div>

                            <div>
                                <div>
                                <label for="task" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ID</label>
                                <input type="text" id="task" name="task" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2" placeholder="Name of Task" value="{{$task->id }}" readonly>
                                </div>

                                <div>
                                <label for="task" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name of Task</label>
                                <input type="text" id="task" name="task" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2" placeholder="Name of Task" value="{{$task->task }}" readonly>
                                </div>
                            </div>

                            <div>
                            </div>
                        </div>                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
