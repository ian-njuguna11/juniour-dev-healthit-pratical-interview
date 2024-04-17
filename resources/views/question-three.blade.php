@extends('layouts.app')

@section('content')
    <div class="flex flex-row min-w-screen">
        <p class="text-xl font-bold dark:text-white">
            Click on the
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
            </svg>
            icon to sort in descending order.
        </p>
    </div>



    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">



        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3 flex flex-row items-end justify-between">
                        tracking_date

                        <a href="{{ route('tasks.orderByDate') }} " class=" flex flex-row  space-x-4">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                            </svg>
                        </a>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex flex-row justify-between">
                            task

                            <a href="{{ route('tasks.orderByDate') }} " class=" flex flex-row  space-x-4">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class=" flex flex-row justify-between">
                            priority

                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox"
                                href="">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                </svg>


                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckbox"
                                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownCheckboxButton">
                                        <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Low
                                                    checkbox</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-2" type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-2"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">High
                                                    state</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-3" type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-3"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Critical
                                                    checkbox</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </button>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class=" flex flex-row justify-between">
                            status

                            <button id="dropdownCheckboxButtonStatus" data-dropdown-toggle="dropdownDefaultCheckboxStatus"
                                href="">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                </svg>


                                <!-- Dropdown menu -->
                                <div id="dropdownDefaultCheckboxStatus"
                                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownCheckboxButtonStatus">
                                        <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-1" type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-1"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">complete
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-2" type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-2"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">finished
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center">
                                                <input id="checkbox-item-3" type="checkbox" value=""
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-3"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">blocked
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </button>
                        </div>
                    </th>
                    <th class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ $task->tracking_date }}
                        </td>

                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ $task->task }}
                        </td>

                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">

                            @if ($task->priority === 'critical')
                                <span
                                    class="bg-red-500 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-white">{{ $task->priority }}</span>
                            @endif

                            @if ($task->priority === 'High')
                                <span
                                    class="bg-red-400 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-400 dark:text-white">{{ $task->priority }}</span>
                            @endif

                            @if ($task->priority === 'Midium')
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{ $task->priority }}</span>
                            @endif


                            @if ($task->priority === 'Low')
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{ $task->priority }}</span>
                            @endif


                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{-- {{ $task->status }} --}}

                            @if ($task->status === 'blocked')
                                <span
                                    class="bg-red-500 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-white">{{ $task->status }}</span>
                            @endif

                            @if ($task->status === 'Inprogress')
                                <span
                                    class="bg-blue-400 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-400 dark:text-white">{{ $task->status }}</span>
                            @endif

                            @if ($task->status === 'Finished')
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{ $task->status }}</span>
                            @endif


                            @if ($task->status === 'Complete')
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{ $task->status }}</span>
                            @endif
                        </td>
                        <td class="flex flex-row space-x-2">
                            <div>

                                <a data-tooltip-target="delete-tooltip" href="{{ route('delete.task', $task->id) }}"
                                    class="flex-row font-medium text-red-600 dark:text-red-500  border-red-600 rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6  ">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </a>

                                <div id="delete-tooltip" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Delete
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                            <div>
                                <a data-tooltip-target="update-tooltip" href="{{ route('tasks.edit', $task->id) }}"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </a>

                                <div id="update-tooltip" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Update
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                            <div>

                                <a data-tooltip-target="view-tooltip" data-modal-target="modal-{{ $task->id }}"
                                    data-modal-toggle="modal-{{ $task->id }}" href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.5 3.75H6A2.25 2.25 0 0 0 3.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0 1 20.25 6v1.5m0 9V18A2.25 2.25 0 0 1 18 20.25h-1.5m-9 0H6A2.25 2.25 0 0 1 3.75 18v-1.5M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>

                                <div id="view-tooltip" role="tooltip"
                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gradient-to-r from-slate-500 to-slate-400 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    View
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
    </div>

    </td>
    </tr>


    <!-- Main modal -->
    <div id="modal-{{ $task->id }}" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Task {{ $task->id }}
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal-{{ $task->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        {{ $task->tracking_date }}
                        {{ $task->task }}
                        {{ $task->priority }}
                        {{ $task->status }}
                    </p>

                </div>
                <!-- Modal footer -->


                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <a href="{{ route('tasks.edit', $task->id) }}" class=" flex flex-row  space-x-4">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                            </svg>

                            Update Task
                        </a>
                    </button>


                </div>
            </div>
        </div>
        @endforeach

        </tbody>
        </table>


        {{ $tasks->links() }}


    </div>
@endsection
