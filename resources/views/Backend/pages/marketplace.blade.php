@extends('Backend.layouts.app')
@section('content')
    @if(!empty($payments))
        <body class="">
        <div class="mt-2">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
            <div class="relative ml-2 mr-2">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search"  id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search Mockups, Logos..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </div>
        <x-plugins></x-plugins>

        </body>
    @else
<body class="border bg-gray-300">

    <div class="mt-2">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
        <div class="relative ml-2 mr-2">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" disabled cursor-not-allowed id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search Mockups, Logos..." required>
            <button type="submit" disabled class="cursor-not-allowed text-white absolute right-2.5 bottom-2.5 bg-gray-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>

    </div>
    <div  id="alert-additional-content" class="p-4 mb-4 bg-yellow-100 rounded-lg dark:bg-yellow-200 mt-12 h-full ml-2 mr-2" role="alert">
        <div class="flex items-center">
            <svg class="mr-2 w-5 h-5 text-yellow-700 dark:text-yellow-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <h3 class="text-lg font-medium text-yellow-700 dark:text-yellow-800">Attention</h3>
        </div>
        <div class="mt-2 mb-4 text-sm text-yellow-700 dark:text-yellow-800">
            You Don't Have Any Subscription Yet.
            Theme Select Disabled
        </div>
        <div class="flex">
            <button id="payment_modal" type="button" class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 mr-2 text-center inline-flex items-center dark:bg-yellow-800 dark:hover:bg-yellow-900">
                <svg class="-ml-0.5 mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                Add New Subscription
            </button>
            <button id="dismiss" type="button" class="text-yellow-700 bg-transparent border border-yellow-700 hover:bg-yellow-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-yellow-800 dark:text-yellow-800 dark:hover:text-white" data-dismiss-target="#alert-additional-content-4" aria-label="Close">
                Dismiss
            </button>
        </div>
    </div>
    @if(session()->has('message'))
            <div class="rounded-md bg-red-500 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/x-circle -->
                        <svg class="h-5 w-5 text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-white">Error</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul role="list" class="list-disc pl-5 space-y-1 text-white">
                                {{ session()->get('message') }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    @endif
    <x-payment_modal>

    </x-payment_modal>

    </body>
    @endif
@endsection
