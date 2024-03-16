<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1 class="text-center posts">Posts</h1>
    <div class="py-12">
        <div class="optionSection">
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
                        <img class="logo" src="{{$post->image}}" alt="avatar">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <section class="section">
                        <h2>{{$post->description}}</h2>
                    </section>
                    <div class="post_section2">
                        <a href="#"><i><img class="likes_comments" src="images/heart.png" alt="icon"></i></a>
                        <a href="#"><i><img class="likes_comments" src="images/comment.png" alt="icon"></i></a>
                    </div>
                    @endforeach
                    @endisset
                </div>
                {{ $posts->links() }}
            </div>
        </div>
        <div class="optionSection">
            <h3 class="text-center mt-4">Options</h3>
        </div>
    </div>
</x-app-layout>
