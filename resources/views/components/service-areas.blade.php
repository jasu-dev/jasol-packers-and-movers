@props([
    'heading' => 'Packers and Movers Near You in <span class="text-primary">West Pune</span>',
    'intro' => 'We run three offices across Pune\'s IT corridor, so a local crew can reach you quickly for a survey or a same-day move.',
    /** slug of the current page to exclude from the list (e.g. 'wakad') */
    'exclude' => null,
])

@php
    $areas = [
        'hinjewadi' => [
            'name' => 'Hinjewadi',
            'url' => route('home'),
            'label' => 'Packers and Movers in Hinjewadi',
            'text' => 'Head office near Laxmi Chowk. Serving Phase 1, 2 and 3, Marunji, Maan and nearby IT park societies.',
        ],
        'wakad' => [
            'name' => 'Wakad',
            'url' => route('wakad'),
            'label' => 'Packers and Movers in Wakad',
            'text' => 'Branch at Bhumkar Nagar. Covers Wakad, Thergaon, Kalewadi, Tathawade, Punawale and Pimple Saudagar.',
        ],
        'baner' => [
            'name' => 'Baner',
            'url' => route('baner'),
            'label' => 'Packers and Movers in Baner',
            'text' => 'Branch near Radha Chowk. Covers Baner, Balewadi, Pashan, Sus, Aundh and Bavdhan.',
        ],
        'mahalunge' => [
            'name' => 'Mahalunge',
            'url' => route('mahalunge'),
            'label' => 'Packers and Movers in Mahalunge',
            'text' => 'Fast service for the new societies along the Mumbai–Bangalore highway, Mahalunge-Maan and Balewadi.',
        ],
    ];

    if ($exclude) {
        unset($areas[$exclude]);
    }
@endphp

<section {{ $attributes->merge(['class' => 'section-padding bg-background overflow-hidden']) }}>
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="section-title">{!! $heading !!}</h2>
            <p class="section-subtitle max-w-2xl mx-auto">{!! $intro !!}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 {{ count($areas) >= 5 ? 'lg:grid-cols-3 xl:grid-cols-5' : 'lg:grid-cols-4' }} gap-6">
            @foreach ($areas as $key => $area)
                <a href="{{ $area['url'] }}"
                    class="group block h-full p-6 rounded-2xl bg-card border border-border card-hover shadow-sm hover:border-primary/40 transition-colors"
                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
                            <x-icons.location class="w-6 h-6 text-primary group-hover:text-primary-foreground transition-colors" />
                    </div>
                    <h3 class="font-bold text-lg mb-2 group-hover:text-primary transition-colors">{{ $area['label'] }}</h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">{{ $area['text'] }}</p>
                    <span class="inline-block mt-4 text-sm font-semibold text-primary">View {{ $area['name'] }} details →</span>
                </a>
            @endforeach
        </div>

        <p class="text-center text-sm text-muted-foreground mt-10 max-w-3xl mx-auto">
            Also serving {{ implode(', ', array_slice(config('services.service_areas'), 6, 13)) }} and all of Pimpri-Chinchwad.
        </p>
    </div>
</section>
