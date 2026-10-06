@props([
    'heading' => 'Frequently Asked Questions',
    'subheading' => null,
    /** array<int, array{q: string, a: string}> — answers may contain simple inline HTML */
    'faqs' => [],
    'id' => 'faq',
])

@php
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($faqs)
            ->map(fn($faq) => [
                '@type' => 'Question',
                'name' => trim(strip_tags($faq['q'])),
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => trim(preg_replace('/\s+/', ' ', strip_tags($faq['a']))),
                ],
            ])
            ->values()
            ->all(),
    ];
@endphp

<section id="{{ $id }}" {{ $attributes->merge(['class' => 'section-padding overflow-hidden bg-background']) }}>
    <div class="container mx-auto max-w-4xl px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="section-title">{!! $heading !!}</h2>
            @if ($subheading)
                <p class="section-subtitle">{!! $subheading !!}</p>
            @endif
        </div>

        <div class="space-y-4" data-aos="fade-up" data-aos-delay="150">
            @foreach ($faqs as $index => $faq)
                @php $panelId = $id . '-panel-' . ($index + 1); @endphp
                <div class="faq-item border border-border rounded-xl px-6 bg-card card-hover">
                    <h3 class="m-0">
                        <button type="button" aria-expanded="false" aria-controls="{{ $panelId }}"
                            class="faq-trigger w-full py-5 flex items-center justify-between gap-4 font-bold text-left focus:outline-none text-base md:text-lg">
                            <span>{!! $faq['q'] !!}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="faq-icon flex-shrink-0 transition-transform duration-300"
                                aria-hidden="true">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                    </h3>
                    <div id="{{ $panelId }}" class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-muted-foreground leading-relaxed">
                            {!! $faq['a'] !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('schema')
    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush
