@extends('layouts.app')

@section('content')
    <div class="min-w-screen h-auto flex items-start justify-normal px-5 py-5">
        <!-- component -->
        <div class="min-w-screen shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5">Bar chart</div>
            <canvas class="p-10 w-" id="chartBar"></canvas>
        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart bar -->
        <script>
            const labelsBarChart = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
            ];
            const dataBarChart = {
                labels: labelsBarChart,
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: "hsl(252, 82.9%, 67.8%)",
                    borderColor: "hsl(252, 82.9%, 67.8%)",
                    data: [120, 10, 5, 2, 20, 30, 45],
                }, ],
            };

            const configBarChart = {
                type: "bar",
                data: dataBarChart,
                options: {},
            };

            var chartBar = new Chart(
                document.getElementById("chartBar"),
                configBarChart
            );
        </script>
    </div>



    <form action="{{ route('user.touch') }}" class="max-w-sm items-start justify-normal px-5 py-5" method="POST">
        {{ csrf_field() }}
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
            <input type="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name" required />
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@flowbite.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" name="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <button type="submit"
            class="text-white bg-gradient-to-r from-sky-500 to-cyan-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection
