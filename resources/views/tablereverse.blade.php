@php
    use Carbon\Carbon;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('image/icon.svg') }}" type="image/x-icon">
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
                    <li class="flex items-center bg-one px-4 py-2 rounded-lg">
                        <img src="{{ asset('image/dashboardyellow.svg') }}" alt="Logo" class="h-5 mr-2">
                        <a href="/" class="block py-2 px-3 text-two rounded md:hover:bg-transparent md:border-0 md:p-0 font-medium">Dashboard</a>
                    </li>
                    <li class="flex items-center bg-two px-4 py-2 rounded-lg">
                        <img src="{{ asset('image/tablegreen.svg') }}" alt="Logo" class="h-5 mr-2">
                        <a href="/table" class="block py-2 px-3 text-one rounded md:hover:bg-transparent md:border-0 md:p-0 font-medium">Table</a>
                    </li>
                    <li class="flex items-center bg-one px-4 py-2 rounded-lg">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-7 mr-2">
                        <a href="/menu" class="block py-2 px-3 text-two rounded md:hover:bg-transparent md:border-0 md:p-0 font-medium">Menu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="relative overflow-x-auto justify-center flex mt-4 rounded-lg">
        <table class="w-full max-w-screen-xl text-sm text-left rtl:text-center">
            <thead class="text-sm text-one bg-two">
                <tr>
                    <th scope="col" class="px-3 py-3 flex justify-center items-center">
                        Date
                        <a href="/table">
                            <img src="{{ asset('image/arrow.svg') }}" alt="" class="h-6 w-6 ml-4">
                        </a>
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Item Name
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Item Type
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Item Price
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Quantity
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Transaction Amount
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Transaction Type
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Received By
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Time Of Sale
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="bg-one">
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            {{ Carbon::parse($item->date)->format('d M Y') }}
                        </td>
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            {{ $item->item_name }}
                        </td>
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            {{ $item->item_type }}
                        </td>
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            $ {{ $item->item_price }}
                        </td>
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            {{ $item->quantity }}
                        </td>
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            $ {{ $item->transaction_amount }}
                        </td>
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            {{ $item->transaction_type }}
                        </td>
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            {{ $item->received_by }}
                        </td>
                        <td class="px-3 py-3 font-medium text-two whitespace-nowrap">
                            {{ $item->time_of_sale }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="w-full max-w-screen-xl mx-auto mt-4 mb-4">
        {{ $data->links('vendor.pagination.simple-tailwind') }}
    </div>
</body>
</html>
