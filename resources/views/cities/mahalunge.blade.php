@extends('layouts.app')

@section('title', 'Packers and Movers in Mahalunge, Pune | Jasol Packers & Movers')
@section('meta_description', 'Packers and movers in Mahalunge, Pune for new-society moves, home shifting, office relocation and bike transport. Fixed quotes. Call +91-7058332061.')

@php
    $siteUrl = 'https://jasolpackersandmovers.in';

    $localities = [
        'Mahalunge', 'Mahalunge-Maan', 'Maan', 'Marunji', 'Hinjewadi Phase 3', 'Hinjewadi Phase 2', 'Balewadi', 'Balewadi High Street',
        'Baner', 'Sus', 'Nande', 'Mumbai–Bangalore Highway (Mahalunge stretch)',
    ];

    $faqs = [
        [
            'q' => 'How much do packers and movers charge in Mahalunge, Pune?',
            'a' => 'Local shifting into or out of Mahalunge costs about <b>₹3,000 to ₹7,000 for a 1 BHK</b>, ₹5,000 to ₹10,000 for a 2 BHK and ₹8,000 to ₹15,000 for a 3 BHK. Many Mahalunge moves are into brand-new societies, so we also add protective floor and lift covering at no extra charge where the society requires it.',
        ],
        [
            'q' => 'Do you have an office in Mahalunge?',
            'a' => 'Mahalunge is served by our two nearest offices: the Baner branch near Radha Chowk (about 10 minutes away by the highway) and our Hinjewadi head office near Laxmi Chowk for the Mahalunge-Maan and Marunji side. Either team can reach you for a free survey on the same day. Call +91-7058332061 to book.',
        ],
        [
            'q' => 'Which areas near Mahalunge do you cover?',
            'a' => 'We cover Mahalunge village, Mahalunge-Maan, Maan, Marunji, Hinjewadi Phase 2 and 3, Balewadi, Balewadi High Street, Baner, Sus and Nande, plus all the new townships along the Mumbai–Bangalore highway stretch.',
        ],
        [
            'q' => 'Can you help with a possession or move-in to a new society in Mahalunge?',
            'a' => 'Yes. New-society moves are our most common job in Mahalunge. We coordinate with the society or builder for truck entry, lift use and timing, protect the new flooring and walls while unloading, and assemble beds, wardrobes and dining sets so the flat is ready to live in the same day.',
        ],
        [
            'q' => 'Do you move from Mahalunge to other cities?',
            'a' => 'Yes. We run household moves from Mahalunge to Mumbai, Bangalore, Hyderabad, Delhi NCR, Chennai, Ahmedabad and other cities with GPS tracking and optional transit insurance. The highway location makes Mahalunge an easy start point for intercity trucks.',
        ],
        [
            'q' => 'Do you provide bike or car transport from Mahalunge?',
            'a' => 'Yes. Two-wheelers and cars are collected from your Mahalunge address and shipped in dedicated carriers across India. Bike transport from Pune to Mumbai starts at about ₹2,500 and takes 1 to 2 days; longer routes take 3 to 7 days. Call us with your vehicle details for an exact quote.',
        ],
        [
            'q' => 'Are weekend moves available in Mahalunge?',
            'a' => 'Yes. Weekends and month-ends are busy, so we recommend booking 4 to 5 days ahead. Weekday moves can often be arranged with 1 to 2 days notice.',
        ],
        [
            'q' => 'What packing material do you use?',
            'a' => 'Five-ply cartons, bubble wrap, foam sheets, stretch film, corrugated rolls and fabric covers for sofas and mattresses. Fragile items such as TVs, glass and crockery get double-layer wrapping and are loaded last so they travel on top.',
        ],
    ];

    $serviceSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => url()->current() . '#service',
        'name' => 'Packers and Movers in Mahalunge, Pune',
        'serviceType' => 'Packing and moving services',
        'url' => url()->current(),
        'provider' => ['@id' => $siteUrl . '/#organization'],
        'availableChannel' => [
            '@type' => 'ServiceChannel',
            'servicePhone' => ['@type' => 'ContactPoint', 'telephone' => '+91-' . config('services.static.mobile'), 'contactType' => 'customer service'],
            'serviceUrl' => route('contact'),
        ],
        'areaServed' => array_map(fn($a) => ['@type' => 'Place', 'name' => $a . ', Pune'], $localities),
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Moving services in Mahalunge',
            'itemListElement' => array_map(fn($name) => [
                '@type' => 'Offer',
                'itemOffered' => ['@type' => 'Service', 'name' => $name],
            ], ['Household Shifting in Mahalunge', 'New Society Move-in Service', 'Office Relocation', 'Bike and Car Transportation', 'Packing and Unpacking', 'Domestic Relocation from Mahalunge']),
        ],
    ];
@endphp

@push('schema')
    <script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
    <x-city-hero badge="Mahalunge, Pune · Served from Baner & Hinjewadi"
        title="Packers and Movers in <span class='text-primary'>Mahalunge, Pune</span>"
        intro="Moving into one of Mahalunge's new societies, or out to another city? Jasol Packers and Movers reaches Mahalunge, Mahalunge-Maan, Marunji and Balewadi within minutes from our Baner and Hinjewadi offices, with fixed pricing and same-day moves."
        :crumbs="[['name' => 'Packers and Movers in Mahalunge']]" />

    {{-- About section --}}
    <section class="section-padding bg-white border-b border-slate-200">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-10">
                <div class="lg:col-span-2">
                    <article data-aos="fade-right">
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-foreground mb-6">
                            Specialists in New-Society Moves Around Mahalunge
                        </h2>
                        <div class="text-foreground/70 space-y-4 leading-relaxed">
                            <p>
                                Mahalunge, in Mulshi taluka on the western edge of Pune, has grown from a village into a
                                belt of large new townships along the Mumbai–Bangalore highway and the Mahalunge-Maan road
                                towards Hinjewadi Phase 3. Most of our customers here are moving into a flat they have just
                                taken possession of, which calls for a different approach from an ordinary shift:
                                coordinating with the builder or society for truck entry, protecting new floors and
                                lifts, and assembling furniture that often arrives flat-packed.
                            </p>
                            <p>
                                Jasol Packers and Movers serves Mahalunge from two nearby offices. Our
                                <a href="{{ route('baner') }}" class="text-primary font-semibold hover:underline">Baner branch</a>
                                near Radha Chowk covers the highway side and Balewadi, and our
                                <a href="{{ route('home') }}" class="text-primary font-semibold hover:underline">Hinjewadi head office</a>
                                covers Mahalunge-Maan, Maan and Marunji. Both can reach you for a survey the same day.
                            </p>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                Home Shifting into Mahalunge Societies
                            </h3>
                            <p>
                                We confirm the society's move-in timing and lift rules in advance, bring floor protection and
                                corner guards, and label every carton by room. Beds, wardrobes, dining tables and TV units are
                                assembled and placed before we leave, so the first night in your new Mahalunge home is
                                comfortable, not surrounded by boxes.
                            </p>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                Moving Out of Mahalunge to Hinjewadi, Baner, Wakad or Another City
                            </h3>
                            <p>
                                Short hops to <a href="{{ route('home') }}" class="text-primary font-semibold hover:underline">Hinjewadi</a>,
                                <a href="{{ route('baner') }}" class="text-primary font-semibold hover:underline">Baner</a> or
                                <a href="{{ route('wakad') }}" class="text-primary font-semibold hover:underline">Wakad</a> are done in
                                a single morning. For intercity moves, Mahalunge's highway access means trucks can leave
                                quickly for Mumbai, Bangalore, Hyderabad, Delhi NCR and other cities, with GPS tracking and
                                optional insurance.
                            </p>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                Bikes, Cars and Office Moves
                            </h3>
                            <p>
                                We also collect two-wheelers and cars from Mahalunge for transport across India, and handle
                                office relocation for the small companies and clinics setting up in the area's new
                                commercial complexes.
                            </p>
                        </div>
                    </article>
                </div>

                <aside class="relative">
                    <div data-aos="fade-left" class="sticky top-32 space-y-6">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-primary/20">
                            <div class="flex flex-col space-y-1.5 p-6 bg-primary/5 rounded-t-lg">
                                <h3 class="font-semibold tracking-tight text-lg flex items-center gap-2">Book a Mahalunge Move</h3>
                            </div>
                            <div class="p-6 space-y-4">
                                <a href="tel:+91{{ config('services.static.mobile') }}"
                                    class="flex items-center gap-3 text-foreground/80 hover:text-primary transition-colors">
                                    <x-icons.call class="w-5 h-5 text-primary" />
                                    <div>
                                        <p class="font-semibold">+91-{{ config('services.static.mobile') }}</p>
                                        <p class="text-xs text-muted-foreground">24/7 phone support</p>
                                    </div>
                                </a>
                                <a href="mailto:{{ config('services.static.email') }}"
                                    class="flex items-center gap-3 text-foreground/80 hover:text-primary transition-colors">
                                    <x-icons.email class="w-5 h-5 text-primary" />
                                    <p class="font-semibold break-all">{{ config('services.static.email') }}</p>
                                </a>
                                <div class="text-sm text-muted-foreground border-t border-border pt-4 space-y-2">
                                    <p><span class="font-semibold text-foreground">Nearest offices:</span></p>
                                    <p><a href="{{ route('baner') }}" class="text-primary hover:underline">Baner</a> – {{ config('services.branches.baner.street') }}, Baner 411045</p>
                                    <p><a href="{{ route('home') }}" class="text-primary hover:underline">Hinjewadi</a> – {{ config('services.branches.hinjewadi.street') }}, Hinjewadi 411057</p>
                                </div>
                                <a href="{{ route('contact') }}">
                                    <x-ui.primary-button class="w-full">Get Free Quote</x-ui.primary-button>
                                </a>
                            </div>
                        </div>

                        <div class="rounded-lg border border-border bg-card p-6">
                            <h3 class="font-semibold mb-3">Areas we cover around Mahalunge</h3>
                            <ul class="flex flex-wrap gap-2">
                                @foreach ($localities as $locality)
                                    <li class="text-xs font-medium bg-muted text-foreground/80 px-2.5 py-1 rounded-full">{{ $locality }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    {{-- Our services --}}
    <section id="services" class="section-padding bg-background overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Packing and Moving Services in Mahalunge</h2>
                <p class="section-subtitle max-w-3xl mx-auto">
                    Everything a new-society move or an intercity relocation from Mahalunge needs, handled by one team.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $services = [
                        ['icon' => 'home', 'title' => 'New Society Move-in Service', 'text' => 'Builder and society coordination, floor and lift protection, and full furniture assembly for possession-day moves in Mahalunge.'],
                        ['icon' => 'home', 'title' => 'House Shifting in Mahalunge', 'text' => 'Complete packing, transport, unloading and set-up for 1 to 4 BHK flats in Mahalunge, Mahalunge-Maan and Balewadi.'],
                        ['icon' => 'office', 'title' => 'Office Relocation', 'text' => 'Weekend moves for the offices, clinics and showrooms in Mahalunge\'s new commercial complexes.'],
                        ['icon' => 'car', 'title' => 'Bike and Car Transport from Mahalunge', 'text' => 'Door pickup and dedicated carriers for two-wheelers and cars to cities across India.'],
                        ['icon' => 'truck', 'title' => 'Mahalunge to Other Cities', 'text' => 'Quick highway access for intercity household moves with GPS tracking and optional insurance.'],
                        ['icon' => 'load', 'title' => 'Loading, Unloading and Storage', 'text' => 'Labour-only help for self-moves and short-term storage if your possession date slips.'],
                    ];
                @endphp
                @foreach ($services as $service)
                    <div class="group p-6 rounded-xl bg-card border border-border card-hover" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                            <x-dynamic-component :component="'icons.' . $service['icon']" class="w-6 h-6 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="font-semibold text-lg mb-2">
                            @isset($service['link'])
                                <a href="{{ $service['link'] }}" class="hover:text-primary transition-colors">{{ $service['title'] }}</a>
                            @else
                                {{ $service['title'] }}
                            @endisset
                        </h3>
                        <p class="text-sm text-muted-foreground">{{ $service['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Rates --}}
    <x-rates-table heading="Packers and Movers Charges in Mahalunge, Pune"
        intro="Indicative ranges for moves starting or ending in Mahalunge. New-society moves include floor and lift protection at no extra cost." />

    {{-- How We Work Section --}}
    <x-how-we-work-section />

    {{-- Why Choose Us Section --}}
    <section class="section-padding bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Why Choose Jasol Packers and Movers in Mahalunge?</h2>
                <p class="section-subtitle max-w-3xl mx-auto">
                    Two nearby offices, crews experienced with new townships, and pricing fixed before the move.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $reasons = [
                        ['icon' => 'location', 'title' => 'Minutes Away', 'text' => 'Our Baner and Hinjewadi offices both border Mahalunge, so surveys and moves start on time.'],
                        ['icon' => 'secure', 'title' => 'New-Home Protection', 'text' => 'Floor sheets, corner guards and lift padding so your freshly handed-over flat stays spotless.'],
                        ['icon' => 'award', 'title' => 'Fixed Pricing', 'text' => 'Survey-based quotes with no extra labour, floor or fuel charges on the day.'],
                        ['icon' => 'plan', 'title' => 'Furniture Assembly Included', 'text' => 'Beds, wardrobes, dining sets and TV units assembled and placed before we leave.'],
                        ['icon' => 'truck', 'title' => 'Highway-Ready Fleet', 'text' => 'Closed, GPS-tracked trucks for quick intercity departures from the Mahalunge stretch.'],
                        ['icon' => 'heart', 'title' => 'One Point of Contact', 'text' => 'A single coordinator handles your booking, society paperwork and moving-day updates.'],
                    ];
                @endphp
                @foreach ($reasons as $reason)
                    <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                            <x-dynamic-component :component="'icons.' . $reason['icon']" class="w-6 h-6 text-primary" />
                        </div>
                        <h3 class="font-semibold text-lg text-gray-800 mb-2">{{ $reason['title'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $reason['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Nearest office + map --}}
    <x-branch-office branch="baner" heading="Nearest Office: Baner Branch"
        intro="Mahalunge is about 10 minutes from our Baner office near Radha Chowk on the highway service road. Our Hinjewadi head office covers the Mahalunge-Maan and Marunji side." />

    {{-- CTA Section --}}
    <x-cta-section />

    {{-- Other branches --}}
    <x-service-areas exclude="mahalunge" heading="Also Serving <span class='text-primary'>Nearby Areas</span>"
        intro="Moving between Mahalunge and another part of Pune? See our Hinjewadi, Wakad and Baner pages." />

    {{-- FAQ section --}}
    <x-faq-section heading="Packers and Movers in Mahalunge: <span class='text-primary'>FAQs</span>"
        subheading="Costs, timing and new-society moves in Mahalunge explained." :faqs="$faqs" class="bg-white" />
@endsection
