@extends('layouts.app')

@section('content')
    <div class="min-w-screen h-auto flex flex-row space-x-5 px-5 py-5">
        <div>
            <!-- component -->
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-3 px-5 bg-gray-50">Task reports According to Status</div>
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
            fetch('http://127.0.0.1:8000/api/tasks_status_report')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const dataArray = Array.from(data);
                    console.log(dataArray);
                    // Create chart after data is fetched
                    createChart(dataArray);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });

            function createChart(dataArray) {
                const dataDoughnut = {
                    labels: ["Inprogress", "Complete", "blocked"],
                    datasets: [{
                        label: "My Status",
                        data: dataArray,
                        backgroundColor: [
                            "rgb(0,191,255)",
                            "rgb(0,250,154)",
                            "rgb(255,0,0)",
                        ],
                        hoverOffset: 4,
                    }],
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
            }

            //status

            fetch('http://127.0.0.1:8000/api/tasks_priority_report')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const dataArray = Array.from(data);
                    console.log(dataArray);
                    // Create chart after data is fetched
                    createChartStatus(dataArray);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });

            function createChartStatus(dataArray) {
                const dataDoughnutstatus = {
                    labels: ["Critical", "High", "Medium"],
                    datasets: [{
                        label: "My Priority",
                        data: [10, 20, 10],
                        backgroundColor: [
                            "rgb(0,191,255)",
                            "rgb(0,250,154)",
                            "rgb(255,0,0)",
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
            }
        </script>

    </div>
@endsection
