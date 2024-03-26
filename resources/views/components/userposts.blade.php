<div {{ $attributes->merge([
    'class' => 'user_post text-gray-100 dark:text-dray-800',
    'style' => 'width: 45%'
])}}>
    {{ $slot }}
</div>
