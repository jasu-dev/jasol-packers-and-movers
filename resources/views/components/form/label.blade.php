@props(['value', 'required' => false])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-card-foreground/70']) }}>
    {{ $value ?? $slot }}
    @if ($required)
        <span class="text-destructive" title="Required field">*</span>
    @endif
</label>
