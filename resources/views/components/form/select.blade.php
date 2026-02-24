<select
    {{ $attributes->merge([
        'class' =>
            'flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm transition-colors focus:outline-none focus:ring-2 focus:ring-ring disabled:cursor-not-allowed disabled:opacity-50',
    ]) }}>
    {{ $slot }}
</select>
