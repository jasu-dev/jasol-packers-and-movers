<input
    {{ $attributes->merge([
        'class' =>
            'flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring disabled:cursor-not-allowed disabled:opacity-50' .
            ($errors->has($name) ? ' border-destructive ring-destructive' : ''),
    ]) }}>
