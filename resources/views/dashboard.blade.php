<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1 class="text-center posts dark:text-gray-200">Posts</h1>
    <div class="py-12">
        <div class="optionSection bg-white dark:bg-gray-800 text-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
            <h3 class="text-center mt-4">Categories</h3>
            @isset($categories)
                @foreach($categories as $category)
                <ul class="ml-4">
                    <li class="mt-4"><a href="#">{{$category->name}}</a></li>
                </ul>
                @endforeach
            @endisset
        </div>
        <div class="max-w-7xls mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @isset($posts)
                    @foreach ($posts as $post)
                    <div class="post_section">
                        <img class="logo" src="{{$post->users->avatar}}" alt="avatar">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <span>{{$post->created_at}}</span>
                    <section class="section">
                        <img class="post_image" src="{{$post->image}}" alt="avatar">
                        <h2>{{$post->description}}</h2>
                    </section>
                    <div class="post_section2">
                        <a href="#"><i><img class="likes_comments" src="images/heart.png" alt="icon"></i></a>
                        <a href="#"><i><img class="likes_comments" src="images/comment.png" alt="icon"></i></a>
                    </div>
                    @endforeach
                    <div class="m-4">
                        {{ $posts->links() }}
                    </div>
                    @endisset
                </div>
            </div>
        </div>
        <div class="optionSection bg-white dark:bg-gray-800 text-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
            <h3 class="text-center mt-4">Users</h3>
            @isset($users)
                @foreach($users as $user)
                <ul class="blog_users">
                    <a href="#"><img class="logo" src="{{$user->avatar}}" alt="avatar"></a>
                    <li><a href="#">{{$user->name}}</a></li>
                </ul>
                @endforeach
                @endisset
        </div>
    </div>
</x-app-layout>
