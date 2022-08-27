@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="flex justify-center">
            <div class="md:grid-cols-8 mt-5">
                <h1 class="text-3xl font-bold underline text-clifford">
                    Hello world!
                </h1>
                <a href="#"
                    class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                        acquisitions 2021</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                        acquisitions of 2021 so far, in reverse chronological order.</p>
                </a>
            </div>
        </div>
    </div>
@endsection
