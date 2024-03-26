<div class="py-12">
    <div class="profile_edit mx-auto sm:px-6 lg:px-8 space-y-6">
        @if (isset($user))
        <x-h1>
            {{ __('User Profile') }}
        </x-h1>
        <div class="flex justify-center user_profile">
            <img class="profile" src="{{$user->avatar}}" alt="avatar">
            <h3 class="mt-4 text-center posts dark:text-gray-200">{{$user->name}}</h3>
        </div>
        <div class="flex justify-center user_data dark:text-gray-50">
            <div>
                <p>{{__('Email:')}}</p>
                <p>{{$user->email}}</p>
            </div>
            <div>
                <p>{{__('Gender:')}}</p>
                <p>{{$user->gender}}</p>
            </div>
            <div>
                <p>{{__('Date of Birth:')}}</p>
                <p>{{$user->dob}}</p>
            </div>
        </div>
        @if ($posts->isNotEmpty())
        <div class="flex flex-wrap post-card justify-center">
            @foreach ($posts as $post)
                <x-userposts>
                        <x-h1>{{$post->title}}</x-h1>
                        <x-postimage>
                            {{$post->image}}
                        </x-postimage>
                        <h2 class="text-center mt-4">Category: {{$post->categories->name}}</h2>
                </x-userposts>
                @endforeach
            </div>
            @else
        <div class="not_found">
            <x-h1>{{__('Nothing to posted')}}</x-h1>
        </div>
            @endif
        @else
    <div class="not_found mb-4">
        <x-h1>{{__('User Not Found')}}</x-h1>
    </div>
        @endif
    </div>
</div>
