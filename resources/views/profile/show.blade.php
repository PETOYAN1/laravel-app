<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profiles') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="profile_edit mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class="text-center posts dark:text-gray-200">User Profile</h1>
            <div class="flex justify-center user_profile">
                <img class="profile" src="{{$user->avatar}}" alt="avatar">
                <h3 class="text-center posts dark:text-gray-200">{{$user->name}}</h3>
            </div>
            <div class="flex justify-center user_data" style="flex-direction: column">
                <p class="text-gray-100">Email: {{$user->email}}</p>
                <p class="text-gray-100">Gender: {{$user->gender}}</p>
                <p class="text-gray-100">Date of Birth: {{$user->dob}}</p>
            </div>
        </div>
    </div>
</x-app-layout>
