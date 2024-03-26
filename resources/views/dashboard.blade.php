<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1 class="text-center posts dark:text-gray-200 mt-2">{{__('Posts')}}</h1>
    <div class="py-12">
        @include('layouts.categories')
        <div class="max-w-7xls mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @include('layouts.posts')
            </div>
        </div>
        @include('layouts.users')
    </div>
</x-app-layout>
