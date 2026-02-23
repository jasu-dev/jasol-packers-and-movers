@php
    $classes =
        'inline-flex items-center justify-center border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 px-3 rounded-md text-sm font-medium gap-2 transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring cursor-pointer disabled:pointer-events-none disabled:opacity-50';
@endphp

<button {{ $attributes->merge([
    'class' => $classes,
    'type' => 'button',
]) }}>
    {{ $slot }}
</button>
