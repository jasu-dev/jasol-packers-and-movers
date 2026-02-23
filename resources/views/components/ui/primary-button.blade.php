@php
    $classes =
        'inline-flex items-center justify-center gap-2 bg-primary text-primary-foreground hover:bg-primary/90 h-9 px-4 rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring cursor-pointer disabled:pointer-events-none disabled:opacity-50';
@endphp

<button {{ $attributes->merge([
    'class' => $classes,
    'type' => 'button',
]) }}>
    {{ $slot }}
</button>
