@extends('layouts.app')

@section('content')
    <div class="min-w-screen h-auto flex flex-row space-x-5 px-5 py-5">
        <div>
            <!-- component -->
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-3 px-5 bg-gray-50">Task reports According to priority</div>
                <canvas class="p-10" id="chartDoughnut"></canvas>
            </div>


        </div>

        <div>
            <!-- component -->
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-3 px-5 bg-gray-50">Task reports According to priority</div>
                <canvas class="p-10" id="chartDoughnut-status"></canvas>
            </div>
        </div>


        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart doughnut -->
        <script>
            const dataDoughnut = {
                labels: ["Critical", "High", "Medium"],
                datasets: [{
                    label: "My Status",
                    data: [300, 50, 100],
                    backgroundColor: [
                        "rgb(133, 105, 241)",
                        "rgb(164, 101, 241)",
                        "rgb(101, 143, 241)",
                    ],
                    hoverOffset: 4,
                }, ],
            };

            const configDoughnut = {
                type: "doughnut",
                data: dataDoughnut,
                options: {},
            };

            var chartBar = new Chart(
                document.getElementById("chartDoughnut"),
                configDoughnut
            );

            //status
            const dataDoughnutstatus = {
                labels: ["Critical", "High", "Medium"],
                datasets: [{
                    label: "My Priority",
                    data: [300, 50, 100],
                    backgroundColor: [
                        "rgb(133, 105, 241)",
                        "rgb(164, 101, 241)",
                        "rgb(101, 143, 241)",
                    ],
                    hoverOffset: 4,
                }, ],
            };

            const configDoughnutstatus = {
                type: "doughnut",
                data: dataDoughnutstatus,
                options: {},
            };

            var chartBar = new Chart(
                document.getElementById("chartDoughnut-status"),
                configDoughnutstatus
            );
        </script>

    </div>
@endsection
