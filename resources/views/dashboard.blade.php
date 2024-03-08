<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1 class="text-center posts">Posts</h1>
    <div class="py-12">
        <div class="optionSection">
            <h3 class="text-center">Options</h3>
            <ul>
                <li><a href="#">hhu</a></li>
            </ul>
        </div>
        <div class="max-w-7xls mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($posts as $post)
                    <div class="post_section">
                        <img class="logo" src="{{$post->image}}" alt="avatar">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <section>
                        <h2>{{$post->description}}</h2>
                    </section>
                    <div class="post_section2">
                        <a href="#"><i><img class="likes_comments" src="images/heart.png" alt="icon"></i></a>
                        <a href="#"><i><img class="likes_comments" src="images/comment.png" alt="icon"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="optionSection">
            <h3 class="text-center">Categories</h3>
        </div>
    </div>
</x-app-layout>
