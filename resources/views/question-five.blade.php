@extends('layouts.app')

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg item-center justify-center ">



        <form action="{{ route('url.shortener') }}" class="w-full items-start justify-normal px-5 py-5" method="GET">
            {{ csrf_field() }}
            <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Url Shortener
                <small>please enter your url below.</small></label>


            <div class="flex flex-row items-center justify-between space-x-4">
                <input type="string" id="url" name='url' aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com">

                <button type="submit"
                    class="text-white bg-gradient-to-r from-sky-500 to-cyan-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Generate</button>

            </div>

        </form>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Url
                    </th>
                    <th scope="col" class="px-6 py-3">
                        shortened Url
                    </th>
                    <th class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Models\UrlShortener::all() as $url)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ $url->url }}
                        </td>

                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            {{ $url['shortened-url'] }}
                        </td>


                        <td class="flex flex-row ml-10">

                            <div>

                                <a href="{{ route('url.urlShortenerView', $url->id) }}"
                                    data-modal-toggle="modal-{{ $url->id }}" href="#"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
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
    </div>
    @endforeach

    </tbody>
    </table>


    </div>
@endsection
