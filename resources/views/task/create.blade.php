@extends('layouts.app')

@section('content')
    <form action="{{ route('tasks.store') }}" class="max-w-sm items-start justify-normal px-5 py-5" method="POST">
        {{ csrf_field() }}
        <div class="mb-5">
            <label for="tracking_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your tracking_date</label>
            <input type="date" name="tracking_date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="tracking_date" required />
        </div>

        <div class="mb-5">
            
<label for="task" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your task</label>
<textarea id="task" name='task' rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

        </div>
        <div class="mb-5 flex flex-row space-x-4">


        <div class="text-bold flex flex-row space-x-4">
            <h2>Priority:</h2>
            <div class="flex flex-row items-center">
                <input id="default-radio-1" type="radio" value="Critical" name="priority-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="priority-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Critical</label>
            </div>
           
            <div class="flex items-center">
                <input id="priority-radio-1" type="radio" value="High" name="priority-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="priority-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">High</label>
            </div>
            <div class="flex items-center">
                <input checked id="priority-radio-2" type="radio" value="Midium" name="priority-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="priority-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Midium</label>
            </div>
            <div class="flex items-center">
                <input checked id="priority-radio-2" type="radio" value="Low" name="priority-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="priority-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Low</label>
            </div>

        </div>

        
        </div>

        <div class="text-bold flex flex-row space-x-4">
            <h2>Status:</h2>
            <div class="flex flex-row items-center">
                <input id="default-radio-1" type="radio" value="Finished" name="status-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="status-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Finished</label>
            </div>
           
            <div class="flex items-center">
                <input id="status-radio-1" type="radio" value="Inprogress" name="status-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="status-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inprogress</label>
            </div>
            <div class="flex items-center">
                <input checked id="status-radio-2" type="radio" value="Blocked" name="status-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="status-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Blocked</label>
            </div>
          

        </div>
        <button type="submit"
            class="text-white bg-gradient-to-r from-sky-500 to-cyan-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
