<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Store - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/header&footer.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('pageCss')
</head>

<body>
    <!-- header start -->

    <header>
        <div class="container-fluid cont">
            <div class="row">
                <div class="col-lg-8 col-8">
                    <h1 class="text-light">Book<span class="fw-light text-danger">Store</span></h1>
                </div>
                <div class="col-lg-4 col-4">
                    <a href="{{ route('cart-page') }}"><i
                            class="fas fa-shopping-cart float-end mt-3 fs-4 text-warning"> <span
                                class="total-item badge rounded-pill position-absolute top-0 start-100 translate-middle"
                                style="background-color: #f4a56d;"></span></i></a>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- nav start -->
    <div class="container my-3">
        <ul class="nav justify-content-center">
            @guest
                <li class="nav-item">
                    <a class="nav-link active text-dark fs-5" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
            @endguest
            @guest
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5" href="">Product</a>
                </li>
            @endguest
            @guest
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5" href="{{ url('/about') }}">About Us</a>
                </li>
            @endguest
            @guest
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5" href="{{ url('/contact') }}">Contact Us</a>
                </li>
            @endguest
            @guest
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5" href="{{ route('login') }}">Login</a>
                </li>
            @endguest
            @guest
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5" href="{{ route('signup') }}">Sign Up</a>
                </li>
            @endguest
            @auth
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5" href="">LOG OUT</a>
                </li>
            @endauth
            @auth
                <li class="nav-item">
                    <a class="nav-link text-dark fs-5" href="">MY ORDERS</a>
                </li>
            @endauth

        </ul>
    </div>
    <!-- nav End -->
    @yield('content')
    {{-- footer start --}}
    <footer class="text-gray-400 bg-gray-900 body-font mt-5">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap md:text-left text-center -mb-10 -mx-4">
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-400 hover:text-white">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-400 hover:text-white">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-400 hover:text-white">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-400 hover:text-white">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-400 hover:text-white">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/6 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-400 hover:text-white">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-400 hover:text-white">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800">
            <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
                <div class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
                    <div class="relative sm:w-64 w-40 sm:mr-4 mr-2">
                        <label for="footer-field" class="leading-7 text-sm text-gray-400">Placeholder</label>
                        <input type="text" id="footer-field" name="footer-field"
                            class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:ring-2 focus:ring-yellow-900 focus:bg-transparent focus:border-yellow-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button
                        class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded">Button</button>
                    <p class="text-gray-500 text-sm md:ml-6 md:mt-0 mt-2 text-center sm:text-left">Bitters chicharrones
                        fanny pack
                        <br class="lg:block hidden">waistcoat green juice
                    </p>
                </div>
                <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
                    <a class="text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
        <div class="bg-gray-800 bg-opacity-75">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-400 text-sm text-center sm:text-left">© 2020 Tailblocks —
                    <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank"
                        rel="noopener noreferrer">@knyttneve</a>
                </p>
                <span
                    class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-400 text-sm">Enamel
                    pin tousled raclette tacos irony</span>
            </div>
        </div>
    </footer>
    {{-- footer End --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
