<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        BeTa
    </title>
    <meta name="description" content="Fast And Easy" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
<nav id="header" class="fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                @include('svg_path.top_landing')
                BeTa
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
            </ul>

            <div class="flex justify-between items-center text-center space-x-4">
                <a  href="{{url('login_user')}}"
                    id="navAction"
                    class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                >
                    Log in
                </a>

                <a  href="{{url('authentication_user')}}"
                    id="navAction"
                    class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                >
                    Sing up
                </a>
            </div>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
<!--Hero-->

<div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <h1 class="my-4 text-5xl font-bold leading-tight">
                A Better Way To Build Site
            </h1>
            <p class="leading-normal text-2xl mb-8">
                Be Happier When Project Come Together,Faster!
            </p>
            <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Subscribe
            </button>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="{{asset('images/hero.png')}}" />
        </div>
    </div>
</div>
<div class="relative -mt-12 lg:-mt-24">
    @include('.svg_path.top_gradient')
</div>
<section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Service
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    Creating and editing content.
                </h3>
                <p class="text-gray-600 mb-8">
                    User and role-based administration. .
                    <br />
                    <br />
                </p>
            </div>
            <div class="w-full sm:w-1/2 p-6">
               @include('svg_path.travel')
            </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <svg class="w-5/6 sm:h-64 mx-auto" viewBox="0 0 1176.60617 873.97852" xmlns="http://www.w3.org/2000/svg">
                    <title>connected world</title>
                    @include('.svg_path.world_svg')
                </svg>
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Multichannel scalability
                    </h3>
                    <p class="text-gray-600 mb-8">
                        Flexibility, scalability, and performance
                        <br />
                        <br />
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Feature
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                        These features index all data for easy access through search ,
                    </p>
                    <div class="text-gray-800 text-base px-6 mb-5">
                        functions and enable users to search by attributes such as publication dates.
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5">
                        keywords or author.
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0  gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Show More
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                        These features enable content to be updated
                    </p>
                    <div class="text-gray-800 text-base px-6 mb-5">
                        and edited after initial publication
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5">
                        Revision control also tracks any changes individuals make to file.
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0  gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Show More
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                        This functionality enables individuals to use a template or a set of templates that an organization approves
                    </p>
                    <div class="text-gray-800 text-base px-6 mb-5">
                        as well as wizards and other tools
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5">
                        as well as wizards and other tools
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0  gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                       Show More
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Pricing
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
            <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                    <div class="p-8 text-3xl font-bold text-center border-b-4">
                        Free
                    </div>
                    <ul class="w-full text-center text-sm">
                        <li class="border-b py-4">Theme <span class="text-green-600 text-lg mt-2 ml-2">+</span></li>
                        <li class="border-b py-4">100 Customers <span class="text-green-600 text-lg mt-2 ml-2">+</span></li>
                        <li class="border-b py-4">Support <span class="text-red-600 text-lg mt-2 ml-2">-</span></li>
                    </ul>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                        $0
                        <span class="text-base">/ per user</span>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
                    <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                    <ul class="w-full text-center text-base font-bold">
                        <li class="border-b py-4">Theme <span class="text-green-600 text-lg mt-2 ml-2">+</span></li>
                        <li class="border-b py-4">1000 Customers <span class="text-green-600 text-lg mt-2 ml-2">+</span></li>
                        <li class="border-b py-4">Support <span class="text-green-600 text-lg mt-2 ml-2">+</span></li>
                        <li class="border-b py-4">Access Basic Plugins <span class="text-green-600 text-lg mt-2 ml-2">+</span></li></li>
                        <li class="border-b py-4">Real Time Statistics <span class="text-red-600 text-lg mt-2 ml-2">-</span></li></li>
                    </ul>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="w-full pt-6 text-4xl font-bold text-center">
                        $40
                        <span class="text-base">/ per user</span>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                    <div class="p-8 text-3xl font-bold text-center border-b-4">
                        Pro
                    </div>
                    <ul class="w-full text-center text-sm">
                        <li class="border-b py-4">All Service<span class="text-green-600 text-lg mt-2 ml-2">+</span> </li>

                    </ul>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                        $150
                        <span class="text-base">/ per user</span>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Change the colour #f8fafc to match the previous section colour -->
@include('svg_path.gradient')
<section class="container mx-auto text-center py-6 mb-12">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
        Accessible from anywhere
    </h1>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    <h3 class="my-4 text-3xl leading-tight">
     This Platforms can be cloud-based or on premises, but users can access content from anywhere with a device that's connected to the internet
    </h3>
{{--    <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">--}}
{{--        Action!--}}
{{--    </button>--}}
</section>
<!--Footer-->
<footer class="bg-white">
    <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
            <div class="flex-1 mb-6 text-black">
                <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                   @include('svg_path.footer_landing')
                    BeTa
                </a>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Links</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Social</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="flex-1">
                <p class="uppercase text-gray-500 md:mb-6">Company</p>
                <ul class="list-reset mb-6">
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
                    </li>
                    <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                        <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center text-gray-700 p-4" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-gray-800" href="https://tailwind-elements.com/">HADES 11</a>
    </div>
</footer>
</body>
</html>
<script src="{{asset('js/Landing/landing.js')}}"></script>


