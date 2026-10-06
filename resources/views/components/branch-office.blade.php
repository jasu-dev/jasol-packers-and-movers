@props([
    /** key in config('services.branches') */
    'branch',
    'heading' => null,
    'intro' => null,
    'showMap' => true,
])

@php
    $office = config("services.branches.$branch");
    $fullAddress = "{$office['street']}, {$office['area']}, {$office['city']}, Maharashtra {$office['postal']}";
@endphp

<section {{ $attributes->merge(['class' => 'section-padding bg-background overflow-hidden']) }}>
    <div class="container mx-auto px-4">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="section-title">{!! $heading ?? 'Our ' . e($office['locality']) . ' Office' !!}</h2>
            @if ($intro)
                <p class="section-subtitle max-w-3xl mx-auto">{!! $intro !!}</p>
            @endif
        </div>

        <div class="grid lg:grid-cols-5 gap-8 items-stretch">
            <address class="not-italic lg:col-span-2 rounded-2xl border border-border bg-card p-8 shadow-sm flex flex-col gap-6"
                data-aos="fade-right">
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                        <x-icons.location class="w-6 h-6" />
                    </div>
                    <div>
                        <h3 class="font-bold text-foreground mb-1">{{ $office['name'] }}</h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">{{ $fullAddress }}</p>
                        <a href="{{ $office['map_link'] }}" target="_blank" rel="noopener"
                            class="inline-block mt-2 text-sm font-semibold text-primary hover:underline">Get directions</a>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                        <x-icons.call class="w-6 h-6" />
                    </div>
                    <div>
                        <h3 class="font-bold text-foreground mb-1">Call or WhatsApp</h3>
                        <p class="text-sm text-muted-foreground">
                            <a href="tel:+91{{ $office['phone'] }}" class="hover:text-primary">+91-{{ $office['phone'] }}</a>
                            @foreach (config('services.static.phones') as $phone)
                                @if ($phone !== $office['phone'])
                                    · <a href="tel:+91{{ $phone }}" class="hover:text-primary">+91-{{ $phone }}</a>
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                        <x-icons.date-check class="w-6 h-6" />
                    </div>
                    <div>
                        <h3 class="font-bold text-foreground mb-1">Working Hours</h3>
                        <p class="text-sm text-muted-foreground">{{ config('services.static.hours_label') }}</p>
                    </div>
                </div>

                <div class="mt-auto pt-2">
                    <a href="{{ route('contact') }}">
                        <x-ui.primary-button class="w-full">Get a Free Quote</x-ui.primary-button>
                    </a>
                </div>
            </address>

            @if ($showMap)
                <div class="lg:col-span-3 rounded-2xl overflow-hidden border border-border shadow-sm min-h-[320px]"
                    data-aos="fade-left">
                    <iframe src="{{ $office['map'] }}" width="100%" height="100%" style="border:0; min-height: 320px;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Map showing {{ $office['name'] }}"></iframe>
                </div>
            @endif
        </div>
    </div>
</section>
