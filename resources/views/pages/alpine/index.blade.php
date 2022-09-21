@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="w-3/4 mx-auto bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700 min-h-screen">
            <div
                class="flex flex-wrap text-sm font-medium text-center text-gray-500 bg-gray-50 rounded-t-lg border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                <div class="mr-2">
                    <button type="button"
                        class="inline-block text-lg p-4 text-blue-600 rounded-tl-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500 hover:text-blue-600 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500">Alpine</button>
                </div>
            </div>
            <div>
                <div class="p-4 bg-white rounded-lg md:p-8 md:pt-6 dark:bg-gray-800">
                    {{-- <x-dropdown/> --}}
                    <h2 class="text-xl mb-5 font-medium mb-1">Dropdown</h2>
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button>Show More...</button>
                        </x-slot>
                        
                        <ul>
                            <li><button wire:click="archive">Archive</button></li>
                            <li><button wire:click="delete">Delete</button></li>
                        </ul>
                    </x-dropdown>
                    
                    <h2 class="text-xl mb-5 font-medium mb-1 mt-5">Counter</h2>
                    <p>Interacting With Livewire From Alpine: $wire</p>
                    <livewire:counter>
                </div>
            </div>
        </div>
    </div>
@endsection
