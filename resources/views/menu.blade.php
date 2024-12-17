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
<body class="bg-[#FAEED1]">
  <nav class="bg-[#FAEED1] border-gray-200">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/menu" class="flex items-center space-x-3 rtl:space-x-reverse">
            <p class="w-20 text-center text-[#607274]">Classic Charm Caffe</P>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-[#DED0B6] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#FAEED1]">
            <li>
              <a href="/menu" class="block py-2 px-3 text-[#607274] hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#384243] rounded md:bg-transparent md:p-0" aria-current="page">Home</a>
            </li>
            <li>
              <a href="/menu/main" class="block py-2 px-3 text-[#607274] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#384243] md:p-0 ">Main Course</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-[#607274] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#384243] md:p-0 md:w-auto">Drinks <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="z-10 hidden font-normal bg-[#DED0B6] divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                      <li>
                        <a href="/menu/coffe" class="block px-4 py-2 text-[#607274] hover:bg-gray-100 rounded-md">Coffe</a>
                      </li>
                      <li>
                        <a href="/menu/noncoffe" class="block px-4 py-2 text-[#607274] hover:bg-gray-100 rounded-md">Non Coffe</a>
                      </li>
                      <li>
                        <a href="/menu/mocktail" class="block px-4 py-2 text-[#607274] hover:bg-gray-100 rounded-md">Mocktail</a>
                      </li>
                      <li>
                        <a href="/menu/tea" class="block px-4 py-2 text-[#607274] hover:bg-gray-100 rounded-md">Tea</a>
                      </li>
                    </ul>
                </div>
            </li>
            <li>
              <a href="/menu/dessert" class="block py-2 px-3 text-[#607274] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#384243] md:p-0 ">Dessert</a>
            </li>
            <li>
              <a href="/menu/snack" class="block py-2 px-3 text-[#607274] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#384243] md:p-0 ">Snack</a>
            </li>
            <li>
              <a href="/" class="block py-2 px-3 text-[#607274] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#384243] md:p-0 ">Dashboard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <main class="px-10 md:px-24 h-dvh flex items-center justify-center flex-col gap-5">
        <div class="bg-[#DED0B6] p-5 h-96 w-full rounded-3xl relative max-w-4xl">
            <h1 class="text-center font-bold text-4xl md:text-6xl text-[#607274]">MENU</h1>
              <div class="w-[96px] md:w-48 mx-auto mt-10 md:mt-5 -translate-x-16 md:-translate-x-32">
                <h1 class="text-[#607274] font-base text-3xl md:text-6xl">Classic</h1>
                <hr class="h-1 mx-auto bg-[#FAEED1] border-0 rounded">
              </div>
              <div class="w-[90px] md:w-44 mx-auto mt-5 translate-x-16 md:translate-x-20">
                <h1 class="text-[#607274] font-base text-3xl md:text-6xl">Charm</h1>
                <hr class="h-1 mx-auto bg-[#FAEED1] border-0 rounded">
              </div>
              <div class="w-[70px] md:w-36 mx-auto mt-5 -translate-x-12 md:-translate-x-28">
                <h1 class="text-[#607274] font-base text-3xl md:text-6xl">Caffe</h1>
                <hr class="h-1 mx-auto bg-[#FAEED1] border-0 rounded">
              </div>
              <img src="{{ asset('image/logo1.png') }}" alt="logo" class="h-20 md:h-32 absolute bottom-2 right-5" /> 
        </div>
        <a href="/menu/about">
          <button type="button" class="text-white bg-[#DED0B6] hover:bg-[#607274] font-medium rounded-lg text-base px-5 py-2.5 text-center inline-flex items-center ">
            About Us
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
          </button>
        </a>
    </main>

    <footer class="bg-[#B2A59B] p-7">
        <h1 class="text-center text-xl font-semibold text-[#FAEED1]">Contact Us</h1>
        <div class="grid md:flex grid-cols-1 justify-items-center justify-center md:flex-wrap gap-5 md:gap-10 mt-5 mx-auto w-3/4  ">
          <div class="flex items-center gap-3">
            <img src="{{ asset('image/email.png') }}" alt="icon" class="w-7" >
            <p class="text-[#FAEED1] font-semibold">classiccharmcaffe@gmail.com</p>
          </div>
          <div class="flex items-center gap-3">
            <img src="{{ asset('image/phone.png') }}" alt="icon" class="w-7" >
            <p class="text-[#FAEED1] font-semibold">089646316641</p>
          </div>
          <div class="flex items-center gap-3">
            <img src="{{ asset('image/maps.png') }}" alt="icon" class="w-7" >
            <p class="text-[#FAEED1] font-semibold">Cimahi</p>
          </div>
          <div class="flex items-center gap-3">
            <img src="{{ asset('image/instagram.png') }}" alt="icon" class="w-7" >
            <p class="text-[#FAEED1] font-semibold">@classic.charm.caffe</p>
          </div>
        </div>
    </footer>

</body>
</html>
