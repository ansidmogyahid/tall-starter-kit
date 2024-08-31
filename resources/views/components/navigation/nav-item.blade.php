@props([
    'url' => '',
    'title' => '',
    'icon' => '',
    'isActive' => true,
    'hasSubLinks' => false,
    'showBadge' => false,
    'badgeContent' => '',
    'iconClass' => 'h-5 w-5 text-gray-700',
])

@php
    $isActiveClass = $isActive ? 'bg-gray-100 rounded-md' : 'hover:bg-gray-100 hover:rounded-md';
@endphp

<a href="{{ $url }}" {{ $attributes->merge(['class' => "flex items-center justify-between px-3 py-1.5 text-gray-500 $isActiveClass"]) }}>
    <div class="flex items-center">
        @svg($icon, ['class' => "$iconClass"])
        <span class="ml-2.5 font-semibold text-gray-600capitalize">{{ $title }}</span>
    </div>

    @if($showBadge)
        <span class="py-0.5 rounded text-blue-600 bg-blue-50 font-semibold px-1 text-xs border">
            @isset($badgeContent)
                {{ $badgeContent }}
            @endisset
        </span>
    @endif
</a>
