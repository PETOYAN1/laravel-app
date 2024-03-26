<div>
    <img
        {{$attributes->merge([
            'width' => '280px',
            'heigth' => '150px'
    ])}}
    class="post_logo" src="{{$slot}}" draggable="false" alt="post_image">
</div>
