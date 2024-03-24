<div class="optionSection dropdown  bg-white dark:bg-gray-800 text-gray-200">
    <div class="dropdown">
        <h3 class="text-center mt-4">Categories</h3>
        @isset($categories)
        <ul class="dropdown-menu">
            @foreach($categories as $category)
                <li><a href="#">{{$category->name}}</a></li>
                @endforeach
            </ul>
        @endisset
    </div>
</div>
