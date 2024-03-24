<div class="optionSection bg-white dark:bg-gray-800 text-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
    <h3 class="text-center mt-4">Users</h3>
    @isset($users)
        @foreach($users as $user)
        <ul class="blog_users">
            <a href="{{ route('profile.show', $user->id)}}"><img class="logo" src="{{$user->avatar}}" alt="avatar"></a>
            <li><a href="{{ route('profile.show', $user->id)}}">{{$user->name}}</a></li>
        </ul>
        @endforeach
    @endisset
</div>
