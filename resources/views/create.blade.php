<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Your Task') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <h4 class="flex text-green-500 justify-center font-bold mb-2"> Add Your Task </h4>
                    
                    <div class="grid gap-0 md:grid-cols-3">
                        <div>
                        </div>

                        <div>
                            @if($errors->any())

                                <div class="p-4 mb-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 text-center" role="alert">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                
                                        <li>{{ $error }}</li>
                                
                                    @endforeach
                                    </ul>
                                </div>
                                
                                @endif 
                        </div>

                        <div>
                        </div>
                    </div>
                                 
                    <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                        @csrf 
                        <div class="grid gap-0 md:grid-cols-3">
                            <div>
                            </div>

                            <div>
                                <label for="task" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name of Task</label>
                                <input type="text" id="task" name="task" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2" placeholder="Name of Task" required>
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                            </div>

                            <div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
