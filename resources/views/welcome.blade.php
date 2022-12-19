<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="bg-abu_muda">
    <div id="_navbar" class="bg-white shadow-md">
        <nav class="w-full xl:w-[1140px] mx-auto border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <div class="order-2 md:order-3 flex justify-between">

                    <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                        class="md:flex hidden mx-3 md:mx-10 text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="{{ asset('src/profile/user.png') }}">
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatar"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                            <div>Bonnie Green</div>
                            <div class="font-medium truncate">name@flowbite.com</div>
                        </div>
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownUserAvatarButton">
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </div>
                    </div>

                    <a href="{{ url('/') }}" id="_logo" class="flex items-center">
                        <img src="{{ asset('src/icon/open-book.png') }}" class="h-6 mr-3 sm:h-9" alt="Logo" />
                        <span
                            class="self-center text-xl text-teal-600 font-semibold whitespace-nowrap dark:text-white">Calonbuku</span>
                    </a>
                </div>
                <button id="btn-menu" type="button"
                    class="inline-flex items-center order-3 p-2 ml-3 text-sm text-teal-600 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="bi bi-list text-2xl"></i>
                </button>
                <div class="hidden w-full md:w-auto" id="menu">
                    <aside class="z-50 absolute inset-0 bg-gray-50 rounded dark:bg-gray-800" aria-label="Sidebar">
                        <div class="w-full flex justify-between px-4 py-3 shadow-sm">
                            <a href="#" class="flex items-center">
                                <img src="{{ asset('icon/open-book.png') }}" class="h-6 mr-3 sm:h-9"
                                    alt="Flowbite Logo" />
                                <span
                                    class="self-center text-xl text-teal-600 font-semibold whitespace-nowrap dark:text-white">Calonbuku</span>
                            </a>
                            <button type="button" class="p-4" id="btn-menu-close"><i
                                    class="bi bi-x-lg text-lg"></i></button>
                        </div>
                        <div class="overflow-y-auto py-4 px-3 ">
                            <ul class="space-y-2">
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true"
                                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                        </svg>
                                        <span class="ml-3">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <button type="button"
                                        class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                            sidebar-toggle-item>E-commerce</span>
                                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                        <li>
                                            <a href="#"
                                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                                        <span
                                            class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                            </path>
                                            <path
                                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                            </path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                                        <span
                                            class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg aria-hidden="true"
                                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <form class="flex items-center order-4 md:order-2 w-full md:w-1/2 my-3">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                        class="text-blue-500 text-sm px-4 py-2.5 text-center hidden md:inline-flex items-center font-bold"
                        type="button">Kategori<i class="bi bi-chevron-down ml-4 font-bold"></i></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>

                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-100 border border-gray-300 border-none outline-none text-gray-900 text-sm rounded-full block w-full p-2.5  dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Cari buku" required>
                    </div>
                </form>
                <button class="inline-flex order-1"><img src="{{ asset('src/icon/carts.png') }}" class="h-6 mr-3 sm:h-9"
                        alt="Logo" /></button>
            </div>
        </nav>
    </div>
    <div id="_main" class="_main w-full lg:w-[1140px] mx-auto">
        <div id="_hero_section" class="_hero_section py-7 px-10 swiper mySwiper">
            <div class="swiper-wrapper">
                <img src="{{ asset('src/dummy/1.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}"
                    class="rounded-md swiper-slide">
                <img src="{{ asset('src/dummy/2.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}"
                    class="rounded-md swiper-slide">
                <img src="{{ asset('src/dummy/3.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}"
                    class="rounded-md swiper-slide">
                <img src="{{ asset('src/dummy/4.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}"
                    class="rounded-md swiper-slide">
                <img src="{{ asset('src/dummy/5.jpg') }}" alt="{{ asset('src/dummy/1.jpg') }}"
                    class="rounded-md swiper-slide">
            </div>
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
            <div class="swiper-pagination"></div>
        </div>
        <div id="_category" class="grid grid-cols-4 lg:grid-cols-8 gap-8 md:gap-14 py-10 mx-5">
            <a href="#" class="_card inline-block text-center">
                <img src="{{ asset('src/icon/book.png') }}" alt="imagess">
                <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
            </a>
            <a href="#" class="_card inline-block text-center">
                <img src="{{ asset('src/icon/book-1.png') }}" alt="imagess">
                <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
            </a>
            <a href="#" class="_card inline-block text-center">
                <img src="{{ asset('src/icon/book-2.png') }}" alt="imagess">
                <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
            </a>
            <a href="#" class="_card inline-block text-center">
                <img src="{{ asset('src/icon/science-book.png') }}" alt="imagess">
                <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
            </a>
            <a class="_card inline-block text-center">
                <img src="{{ asset('src/icon/book.png') }}" alt="imagess">
                <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
            </a>
            <a class="_card inline-block text-center">
                <img src="{{ asset('src/icon/book-1.png') }}" alt="imagess">
                <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
            </a>
            <a class="_card inline-block text-center">
                <img src="{{ asset('src/icon/book-2.png') }}" alt="imagess">
                <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
            </a>
            <a class="_card inline-block text-center">
                <img src="{{ asset('src/icon/science-book.png') }}" alt="imagess">
                <p class="font-semibold text-xs md:text-lg">Buku baru andalan</p>
            </a>
        </div>
        <hr class="my-3">
        <div id="_rekomendasi" class="_rekomendasi">
            <div id="_title_rekomendasi" class="flex justify-between mx-5">
                <h1 class="md:text-3xl font-semibold">Rekomendasi untukmu</h1>
                <a href="#" class="text-xl text-blue-500 font-semibold">Lihat Semua</a>
            </div>
            <div id="_list_rekomendasi" class="py-6 px-5 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-5">
                <a href="#" id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku1.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </a>
                <a href="#" id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku2.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </a>
                <a href="#" id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku3.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </a>
                <a href="#" id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku4.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </a>
                <a href="#" id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku5.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </a>
                <a href="#" id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku6.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </a>
            </div>
        </div>
        <hr class="my-3">
        <div id="_populer" class="_populer">
            <div id="_title_populer" class="flex justify-between mx-5">
                <h1 class="md:text-3xl font-semibold">Buku - buku populer</h1>
                <a href="#" class="text-xl text-blue-500 font-semibold">Lihat Semua</a>
            </div>
            <div id="_list_rekomendasi" class="py-10 px-5 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-5">
                <div id="_card_populer" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku7.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </div>
                <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku5.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </div>
                <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku6.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </div>
                <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku4.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </div>
                <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku5.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </div>
                <div id="_card_rekomendasi" class=" bg-white px-5 pt-5 pb-12 rounded shadow-md">
                    <img src="{{ asset('src/dummy/buku6.jpg') }}" alt="poto">
                    <p id="_author" class="text-xs">Gege Akutami</p>
                    <p id="_title" class="text-md">Melangkah</p>
                    <p id="_price" class="text-lg text-blue-500 font-bold">Rp 93.000</p>
                </div>
            </div>
        </div>
        <hr class="my-3">
    </div>
    <div id="_email" class="bg-blue-300">
        <div class="w-full lg:w-[1140px] mx-auto py-10">
            <label for="email-address-icon"
                class="block mb-4 text-3xl text-center font-bold text-gray-900 dark:text-white">Kejutan spesial dari
                kami untuk
                kamu</label>
            <div class="flex justify-center">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <i class="bi bi-envelope-fill text-gray-700"></i>
                    </div>
                    <input type="text" id="email-address-icon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-[500px] pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="user@gmail.com">
                </div>
                <button class="bg-slate-800 rounded-r-lg px-5 text-slate-50">Submit</button>
            </div>
        </div>
    </div>

    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-900">
        <div class="w-full md:w-[1140px] mx-auto">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="{{ asset('src/icon/open-book.png') }}" class="mr-3 h-8" alt="FlowBite Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Calonbuku</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a
                        href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" /></svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" /></svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" /></svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" /></svg>
                        <span class="sr-only">Dribbbel account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    {{-- file Javascript --}}
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
        integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    {{-- Script --}}
    <script src="{{ asset('src/script.js') }}"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>

</body>

</html>
