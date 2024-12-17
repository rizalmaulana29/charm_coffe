<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('image/icon.svg') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>Classic Charm Coffe</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <nav class="bg-one sticky">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/logo.svg') }}" class="h-8" alt="Logo"/>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-two rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-normal flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-one md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-one">
                    <li class="flex items-center bg-two px-4 py-2 rounded-lg">
                        <img src="{{ asset('image/dashboardgreen.svg') }}" alt="Logo" class="h-5 mr-2">
                        <a href="/" class="block py-2 px-3 text-one rounded md:hover:bg-transparent md:border-0 md:p-0 font-medium">Dashboard</a>
                    </li>
                    <li class="flex items-center bg-one px-4 py-2 rounded-lg">
                        <img src="{{ asset('image/tableyellow.svg') }}" alt="Logo" class="h-5 mr-2">
                        <a href="/table" class="block py-2 px-3 text-two rounded md:hover:bg-transparent md:border-0 md:p-0 font-medium">Table</a>
                    </li>
                    <li class="flex items-center bg-one px-4 py-2 rounded-lg">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-7 mr-2">
                        <a href="/menu" class="block py-2 px-3 text-two rounded md:hover:bg-transparent md:border-0 md:p-0 font-medium">Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <div class="grid lg:grid-cols-4 gap-4 mb-4 mx-auto max-w-screen-xl mt-4 grid-cols-1 px-3">
        <div class="flex flex-col items-start justify-center h-24 rounded bg-one p-4">
            @if ($mostFrequentItem)
            <p class="font-medium text-two text-sm text-left">Most Purchase Item</p>
            <p class="font-semibold text-two text-2xl text-left">{{ $mostFrequentItem->item_name }}</p>
            <p class="font-medium text-two text-sm text-left">{{ $mostFrequentItem->frequency }} Times Purchased</p>
            @else
            <p class="font-medium text-two text-sm text-left">Most Purchase Item</p>
            <p class="font-semibold text-two text-2xl text-left">-</p>
            <p class="font-medium text-two text-sm text-left">No Items Found For Most Frequent Item.</p>
            @endif
        </div>
        <div class="flex flex-col items-start justify-center h-24 rounded bg-two p-4">
            @if ($leastFrequentItem)
            <p class="font-medium text-one text-sm text-left">Least Purchase Item</p>
            <p class="font-semibold text-one text-2xl text-left">{{ $leastFrequentItem->item_name }}</p>
            <p class="font-medium text-one text-sm text-left">{{ $leastFrequentItem->frequency }} Times Purchased</p>
            @else
            <p class="font-medium text-one text-sm text-left">Least Purchase Item</p>
            <p class="font-semibold text-one text-2xl text-left">-</p>
            <p class="font-medium text-one text-sm text-left">No Items Found For Least Frequent Item.</p>
            @endif
        </div>
        <div class="flex flex-col items-start justify-center h-24 rounded bg-four p-4">
            @if($mostFrequentTime)
            <p class="font-medium text-two text-sm text-left">Most Time Of Sale</p>
            <p class="font-semibold text-two text-2xl text-left">{{ $mostFrequentTime->time_of_sale }}</p>
            <p class="font-medium text-two text-sm text-left">{{ $mostFrequentTime->frequency }} Times Purchased</p>
            @else
            <p class="font-medium text-two text-sm text-left">Most Time Of Sale</p>
            <p class="font-semibold text-two text-2xl text-left">-</p>
            <p class="font-medium text-two text-sm text-left">No Time Found For Most Frequent Time.</p>
            @endif
        </div>
        <div class="flex flex-col items-start justify-center h-24 rounded bg-three p-4">
            @if($leastFrequentTime)
            <p class="font-medium text-white text-sm text-left">Least Purchase Item</p>
            <p class="font-semibold text-white text-2xl text-left">{{ $leastFrequentTime->time_of_sale }}</p>
            <p class="font-medium text-white text-sm text-left">{{ $leastFrequentTime->frequency }} Times Purchased</p>
            @else
            <p class="font-medium text-white text-sm text-left">Least Purchase Item</p>
            <p class="font-semibold text-white text-2xl text-left">-</p>
            <p class="font-medium text-white text-sm text-left">No Time Found For Least Frequent Time.</p>
            @endif
        </div>
    </div>
    <!-- Chart -->
    <div class="grid lg:grid-cols-2 gap-4 mb-4 mx-auto max-w-screen-xl mt-4 grid-cols-1 px-3">
        <div class="flex flex-col items-start justify-center h-96 rounded bg-one p-4">
            <p class="font-semibold text-two text-2xl text-left mt-4">Time Of Sale</p>
            <div id="pie-chart" class="w-full mb-4"></div>
        </div>
        <div class="flex flex-col items-start justify-center h-96 rounded bg-two p-4">
            <p class="font-semibold text-one text-2xl text-left mt-6">Transaction Amount</p>
            <div id="area-chart" class="w-full mb-4"></div>
        </div>
        <div class="flex flex-col items-start justify-center h-96 rounded bg-four p-4">
            <p class="font-semibold text-two text-2xl text-left mt-4">Transaction Type - Online</p>
            <div id="column-chart" class="w-full mb-4"></div>
        </div>
        <div class="flex flex-col items-start justify-center h-96 rounded bg-three p-4">
            <p class="font-semibold text-white text-2xl text-left mt-4">Transaction Type - Offline</p>
            <div id="column-chart-offline" class="w-full mb-4"></div>
        </div>
    </div>

    <!-- JavaScript Area -->
    <!-- Area Chart -->
    <script>
        const areaChartOptions = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "area",
                fontFamily: "Plus Jakarta Sans, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            fill: {
                type: "gradient",
                gradient: {
                    opacityFrom: 0.55,
                    opacityTo: 0,
                    shade: "#607274",
                    gradientToColors: ["#607274"],
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 3,
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 10,
                    right: 10,
                    top: 10,
                    bottom: 10,
                },
            },
            series: [
                {
                    name: "Transaction Amount",
                    data: {!! $data !!},
                    color: "#607274",
                },
            ],
            xaxis: {
                categories: {!! $categories !!},
                labels: {
                    style: {
                        colors: "#607274", // warna teks x-axis
                    },
                },
                axisBorder: {
                    show: true,
                },
                axisTicks: {
                    show: true,
                },
            },
            yaxis: {
                show: true,
                min: 0,
                max: 8000,
                tickAmount: 4,
                labels: {
                    style: {
                        colors: "#607274", // warna teks y-axis
                    },
                },
                padding: {
                    left: 10,
                    right: 10,
                    top: 10,
                    bottom: 10,
                },
            },
        };

        if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("area-chart"), areaChartOptions);
            chart.render();
        }
    </script>


    <!-- Pie Chart -->
    <script>
        const getPieChartOptions = () => {
            return {
                series: {!! $timeOfSaleSeries !!},
                colors: ["#F0DBA8", "#DED0B6", "#B2A59B", "#D1AF94", "#A67B59"],
                chart: {
                    height: 330,
                    width: "100%",
                    type: "pie",
                },
                stroke: {
                    colors: ["white"],
                    lineCap: "",
                },
                plotOptions: {
                    pie: {
                        labels: {
                            show: false,
                        },
                        size: "100%",
                        dataLabels: {
                            offset: -25,
                            style: {
                                colors: ["#FFFFFF"]
                            }
                        },
                    },
                },
                labels: {!! $timeOfSaleLabels !!},
                dataLabels: {
                    enabled: true,
                    style: {
                        fontFamily: "Plus Jakarta Sans, sans-serif",
                        fontWeight: 500,
                        fontSize: '14px',
                        colors: ["#FFFFFF"]
                    },
                },
            }
        };

        if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("pie-chart"), getPieChartOptions());
            chart.render();
        }
    </script>

    <!-- Column Chart Online -->
    <script>
        const columnChartOptions = {
            colors: ["#FAEED1"],
            series: [
                {
                    name: "Online Transaction Type",
                    color: "#FAEED1",
                    data: {!! json_encode($onlineTransactionData) !!}
                },
            ],
            chart: {
                type: "bar",
                height: "320px",
                fontFamily: "Inter, sans-serif",
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 4,
                },
            },
            tooltip: {
                shared: true,
                intersect: false,
                style: {
                    fontFamily: "Plus Jakarta Sans, sans-serif",
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "darken",
                        value: 1,
                    },
                },
            },
            stroke: {
                show: true,
                width: 0,
                colors: ["transparent"],
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -14
                },
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            xaxis: {
                floating: false,
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Plus Jakarta Sans, sans-serif",
                        fontWeight: 500,
                        cssClass: 'text-xs font-medium fill-two'
                    }
                },
                axisBorder: {
                    show: true,
                },
                axisTicks: {
                    show: true,
                },
            },
            yaxis: {
                show: true,
                min: 0,
                max: 20,
                tickAmount: 4,
                labels: {
                    style: {
                        fontFamily: "Plus Jakarta Sans, sans-serif",
                        fontWeight: 500,
                        cssClass: 'text-xs font-medium fill-two'
                    }
                },
            },
            fill: {
                opacity: 1,
            },
        };

        if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const columnChart = new ApexCharts(document.getElementById("column-chart"), columnChartOptions);
            columnChart.render();
        }
    </script>

    <!-- Column Chart  Oflline -->
    <script>
        const columnChartOffline = {
            colors: ["#F6F6F6"],
            series: [
                {
                    name: " Offline Transaction Type",
                    color: "#F6F6F6",
                    data: {!! json_encode($cashTransactionData) !!}
                },
            ],
            chart: {
                type: "bar",
                height: "320px",
                fontFamily: "Plus Jakarta Sans, sans-serif",
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 4,
                },
            },
            tooltip: {
                shared: true,
                intersect: false,
                style: {
                    fontFamily: "Plus Jakarta Sans, sans-serif",
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "darken",
                        value: 1,
                    },
                },
            },
            stroke: {
                show: true,
                width: 0,
                colors: ["transparent"],
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -14
                },
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            xaxis: {
                floating: false,
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Plus Jakarta Sans, sans-serif",
                        fontWeight: 500,
                        cssClass: 'text-xs font-medium fill-white'
                    }
                },
                axisBorder: {
                    show: true,
                },
                axisTicks: {
                    show: true,
                },
            },
            yaxis: {
                show: true,
                min: 0,
                max: 20,
                tickAmount: 4,
                labels: {
                    style: {
                        fontFamily: "Plus Jakarta Sans, sans-serif",
                        fontWeight: 500,
                        cssClass: 'text-xs font-medium fill-white'
                    }
                },
            },
            fill: {
                opacity: 1,
            },
        };

        if (document.getElementById("column-chart-offline") && typeof ApexCharts !== 'undefined') {
            const columnChart = new ApexCharts(document.getElementById("column-chart-offline"), columnChartOffline);
            columnChart.render();
        }
    </script>

</body>
</html>
