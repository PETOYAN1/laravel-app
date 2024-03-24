<div class="p-6 text-gray-900 dark:text-gray-100">
    @isset($posts)
        @foreach ($posts as $post)
        <div class="post_section">
            <div>
                <a href="{{ route('profile.show', $post->users->id)}}"><img class="logo" src="{{$post->users->avatar}}" alt="avatar"></a>
                <a href="{{ route('profile.show', $post->users->id)}}"><h2>{{$post->users->name}}</h2></a>
            </div>
            <span>{{$post->created_at}}</span>
        </div>
        <section class="section">
            <h3 class="text-center mb-4 mt-4">{{$post->title}}</h3>
            <img class="post_image" src="{{$post->image}}" alt="avatar">
            <h2 class="post_title">{{$post->description}}</h2>
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
