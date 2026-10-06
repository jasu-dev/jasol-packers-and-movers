@props([
    'badge',
    /** H1 HTML */
    'title',
    'intro',
    /** breadcrumb items after Home */
    'crumbs' => [],
    'heroAlt' => 'Jasol Packers and Movers crew loading packed goods into a moving truck in Pune',
])

<section id="quote" class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="{{ $heroAlt }}" class="w-full h-full object-cover"
            width="1920" height="1080" fetchpriority="high" decoding="async">
        <div class="absolute inset-0 bg-secondary/90"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 py-12">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <x-breadcrumbs :items="$crumbs" class="mb-5 !justify-start [&_ol]:justify-start" />

                <div
                    class="inline-flex items-center gap-2 bg-primary/20 text-primary-foreground text-sm font-medium px-4 py-1.5 rounded-full mb-6">
                    <x-icons.location class="w-4 h-4" />
                    {{ $badge }}
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-foreground leading-tight mb-6">
                    {!! $title !!}
                </h1>
                <p class="text-lg text-secondary-foreground/80 mb-8 max-w-lg">
                    {!! $intro !!}
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="tel:+91{{ config('services.static.mobile') }}">
                        <x-ui.primary-button>
                            <x-icons.call class="w-5 h-5" />
                            Call +91-{{ config('services.static.mobile') }}
                        </x-ui.primary-button>
                    </a>
                    <a href="https://wa.me/91{{ config('services.static.whatsapp') }}?text=Hi%2C%20I%20need%20a%20shifting%20quote"
                        target="_blank" rel="noopener">
                        <x-ui.secondary-button>
                            <x-icons.whatsapp class="w-4 h-4" />
                            WhatsApp Quote
                        </x-ui.secondary-button>
                    </a>
                </div>
                {{ $slot }}
            </div>

            <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                <div class="bg-card rounded-2xl shadow-2xl p-6 md:p-8">
                    <x-quote-form />
                </div>
            </div>
        </div>
    </div>
</section>
