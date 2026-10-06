@extends('layouts.app')

@section('title', 'Packers and Movers in Baner, Pune | Jasol Packers & Movers')
@section('meta_description', 'Packers and movers in Baner, Pune with an office near Radha Chowk. House, bungalow and office shifting, bike and car transport. Call +91-7058332061.')

@php
    $office = config('services.branches.baner');
    $siteUrl = 'https://jasolpackersandmovers.in';

    $localities = [
        'Baner', 'Baner Gaon', 'Baner-Pashan Link Road', 'Pancard Club Road', 'Balewadi', 'Balewadi High Street', 'Pashan',
        'Sus', 'Sus Road', 'Aundh', 'Bavdhan', 'Sakal Nagar', 'Mahalunge', 'Sutarwadi', 'Pashan-Sus Road',
    ];

    $faqs = [
        [
            'q' => 'How much do packers and movers charge in Baner, Pune?',
            'a' => 'Local shifting in Baner costs around <b>₹3,000 to ₹7,000 for a 1 BHK</b>, ₹5,000 to ₹10,000 for a 2 BHK and ₹8,000 to ₹15,000 for a 3 BHK. Bungalows and row houses in Baner Gaon or Pashan–Sus Road are priced after a survey because of the larger furniture and garden items. Intercity moves from Baner start around ₹9,000 for a 1 BHK.',
        ],
        [
            'q' => 'Where is your Baner office?',
            'a' => 'Our Baner branch is at Office No. 412, Service Road, near Radha Chowk, next to EFC Prime, Baner, Pune 411045, right off the Mumbai–Bangalore highway service road. Call +91-7058332061 before you visit so a surveyor is available to meet you.',
        ],
        [
            'q' => 'Which areas around Baner do you serve?',
            'a' => 'From Baner we cover Baner Gaon, Baner-Pashan Link Road, Pancard Club Road, Balewadi, Balewadi High Street, Pashan, Sus, Sus Road, Aundh, Bavdhan, Sakal Nagar and Mahalunge. Wakad and Hinjewadi are handled by our other offices.',
        ],
        [
            'q' => 'Do you relocate offices and co-working spaces in Baner?',
            'a' => 'Yes. Baner has many startups, IT offices and co-working centres, and we schedule office moves on weekends or overnight to limit downtime. Workstations, chairs, monitors and server racks are labelled, packed in anti-static material and set up at the new premises in the agreed layout.',
        ],
        [
            'q' => 'Can you move a bungalow or row house in Baner?',
            'a' => 'Yes. We handle large homes in Baner Gaon, Pashan and Sus with wooden crating for glass tables, dismantling of modular wardrobes and careful handling of large appliances, plants and gym equipment. A free in-home survey lets us plan the right number of loaders and vehicles.',
        ],
        [
            'q' => 'Do you provide bike and car transport from Baner?',
            'a' => 'Yes. Two-wheelers and cars are picked up from your Baner address and transported in dedicated carriers to cities across India. Bike transport from Pune to Mumbai starts at about ₹2,500 and car transport from about ₹8,000; share your vehicle model and destination for an exact quote.',
        ],
        [
            'q' => 'Is storage available if my new home in Baner is not ready?',
            'a' => 'Yes. We offer short-term storage for packed household goods between a vacate date and a possession date, with items inventoried and sealed before they go into storage.',
        ],
        [
            'q' => 'How early should I book a move in Baner?',
            'a' => 'For weekday moves, 2 to 3 days notice is usually enough. For weekends, month-ends and intercity moves we recommend booking 5 to 7 days in advance so a crew and vehicle are reserved for your date.',
        ],
    ];

    $localBusinessSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'MovingCompany',
        '@id' => $siteUrl . '/#office-baner',
        'name' => $office['name'],
        'url' => url()->current(),
        'telephone' => '+91-' . $office['phone'],
        'image' => $siteUrl . '/assets/images/banner.png',
        'priceRange' => '₹₹',
        'parentOrganization' => ['@id' => $siteUrl . '/#organization'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $office['street'],
            'addressLocality' => 'Baner, Pune',
            'addressRegion' => 'Maharashtra',
            'postalCode' => $office['postal'],
            'addressCountry' => 'IN',
        ],
        'hasMap' => $office['map_link'],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            'opens' => '07:00',
            'closes' => '22:00',
        ],
        'areaServed' => array_map(fn($a) => ['@type' => 'Place', 'name' => $a . ', Pune'], $localities),
        'makesOffer' => array_map(fn($name) => [
            '@type' => 'Offer',
            'itemOffered' => ['@type' => 'Service', 'name' => $name . ' in Baner, Pune'],
        ], ['Household Shifting', 'Office Relocation', 'Bungalow and Villa Shifting', 'Bike and Car Transportation', 'Packing and Unpacking', 'Storage']),
    ];
@endphp

@push('schema')
    <script type="application/ld+json">{!! json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
    <x-city-hero badge="Baner, Pune · Office near Radha Chowk"
        title="Packers and Movers in <span class='text-primary'>Baner, Pune</span>"
        intro="Jasol Packers and Movers has a Baner office on the highway service road near Radha Chowk. We shift flats, bungalows and offices across Baner, Balewadi, Pashan, Sus, Aundh and Bavdhan, and transport bikes and cars to any city in India."
        :crumbs="[['name' => 'Packers and Movers in Baner']]" />

    {{-- About section --}}
    <section class="section-padding bg-white border-b border-slate-200">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-10">
                <div class="lg:col-span-2">
                    <article data-aos="fade-right">
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-foreground mb-6">
                            Baner's Local Movers for Flats, Bungalows and Offices
                        </h2>
                        <div class="text-foreground/70 space-y-4 leading-relaxed">
                            <p>
                                Baner is one of Pune's most varied neighbourhoods to move in. Premium high-rises on
                                Baner-Pashan Link Road, older bungalows in Baner Gaon, row houses towards Sus and Pashan,
                                and hundreds of startups and co-working offices along the highway service road. Each needs a
                                different plan, crew size and vehicle, which is why Jasol Packers and Movers opened a
                                <b>Baner office near Radha Chowk</b> staffed by surveyors who know the area street by street.
                            </p>
                            <p>
                                We are a Pune company with three offices you can visit, in
                                <a href="{{ route('home') }}" class="text-primary font-semibold hover:underline">Hinjewadi</a>,
                                <a href="{{ route('wakad') }}" class="text-primary font-semibold hover:underline">Wakad</a> and Baner.
                                Our own trained crews, our own packing material and our own closed trucks handle your move
                                end to end.
                            </p>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                Household Shifting in Baner
                            </h3>
                            <p>
                                For flats we focus on speed and society rules: lift bookings, protected lobbies and a
                                same-day finish. For bungalows and row houses we bring wooden crating for glass and marble,
                                dismantle modular wardrobes and kitchens, and move large appliances, plants and gym
                                equipment with the right equipment. Every carton is labelled by room and unpacked where it
                                belongs.
                            </p>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                Office Relocation for Baner Businesses
                            </h3>
                            <p>
                                Baner's IT companies, design studios and co-working centres usually need to move over a
                                weekend. We tag workstations and chairs, pack monitors and servers in anti-static material,
                                move overnight if needed and set up the new office in the layout you share, so your team
                                starts work on Monday morning.
                            </p>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                Intercity Moves and Vehicle Transport from Baner
                            </h3>
                            <p>
                                Moving out of Pune? We run regular routes from Baner to Mumbai, Bangalore, Hyderabad,
                                Delhi NCR, Chennai and Ahmedabad with GPS tracking and optional transit insurance. Bikes and
                                cars travel in dedicated carriers with door pickup from your Baner address.
                            </p>
                        </div>
                    </article>
                </div>

                <aside class="relative">
                    <div data-aos="fade-left" class="sticky top-32 space-y-6">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-primary/20">
                            <div class="flex flex-col space-y-1.5 p-6 bg-primary/5 rounded-t-lg">
                                <h3 class="font-semibold tracking-tight text-lg flex items-center gap-2">Baner Branch</h3>
                            </div>
                            <div class="p-6 space-y-4">
                                <address class="not-italic flex items-start gap-3 text-foreground/80">
                                    <x-icons.location class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />
                                    <p class="text-sm leading-relaxed">{{ $office['street'] }}, Baner, Pune 411045</p>
                                </address>
                                <a href="tel:+91{{ $office['phone'] }}"
                                    class="flex items-center gap-3 text-foreground/80 hover:text-primary transition-colors">
                                    <x-icons.call class="w-5 h-5 text-primary" />
                                    <div>
                                        <p class="font-semibold">+91-{{ $office['phone'] }}</p>
                                        <p class="text-xs text-muted-foreground">24/7 phone support</p>
                                    </div>
                                </a>
                                <a href="mailto:{{ config('services.static.email') }}"
                                    class="flex items-center gap-3 text-foreground/80 hover:text-primary transition-colors">
                                    <x-icons.email class="w-5 h-5 text-primary" />
                                    <p class="font-semibold break-all">{{ config('services.static.email') }}</p>
                                </a>
                                <a href="{{ route('contact') }}">
                                    <x-ui.primary-button class="w-full">Get Free Quote</x-ui.primary-button>
                                </a>
                            </div>
                        </div>

                        <div class="rounded-lg border border-border bg-card p-6">
                            <h3 class="font-semibold mb-3">Areas we cover from Baner</h3>
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
                <h2 class="section-title">Packing and Moving Services in Baner</h2>
                <p class="section-subtitle max-w-3xl mx-auto">
                    From a single-room shift to a full bungalow or office, planned and executed by our Baner team.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $services = [
                        ['icon' => 'home', 'title' => 'House Shifting in Baner', 'text' => 'Packing, dismantling, transport and reassembly for 1 to 4 BHK flats on Baner-Pashan Link Road, Pancard Club Road and Balewadi.'],
                        ['icon' => 'home', 'title' => 'Bungalow and Villa Moves', 'text' => 'Wooden crating, large-appliance handling and multi-vehicle planning for independent homes in Baner Gaon, Sus and Pashan.'],
                        ['icon' => 'office', 'title' => 'Office Relocation in Baner', 'text' => 'Weekend and overnight moves for startups, IT offices and co-working spaces with labelled workstation packing.'],
                        ['icon' => 'car', 'title' => 'Bike and Car Transport from Baner', 'text' => 'Door pickup and dedicated carriers to Mumbai, Bangalore, Hyderabad, Delhi and other cities.'],
                        ['icon' => 'truck', 'title' => 'Baner to Other Cities', 'text' => 'Domestic household relocation with GPS tracking, optional insurance and door delivery in 2 to 7 days.'],
                        ['icon' => 'delivery', 'title' => 'Packing-Only and Storage', 'text' => 'Professional packing for self-moves and short-term storage between vacate and possession dates.'],
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
    <x-rates-table heading="Packers and Movers Charges in Baner, Pune"
        intro="Indicative ranges for moves starting in Baner. Bungalows, heavy furniture and glass or marble items are quoted after a free in-home survey." />

    {{-- How We Work Section --}}
    <x-how-we-work-section />

    {{-- Why Choose Us Section --}}
    <section class="section-padding bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Why Choose Jasol Packers and Movers in Baner?</h2>
                <p class="section-subtitle max-w-3xl mx-auto">
                    Local presence, experienced crews and clear pricing for every kind of Baner move.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $reasons = [
                        ['icon' => 'location', 'title' => 'Office near Radha Chowk', 'text' => 'A real Baner address on the highway service road, so surveys and moves start on time.'],
                        ['icon' => 'secure', 'title' => 'Crating for Fragile Items', 'text' => 'Custom wooden crates for glass tops, marble, artwork and large TVs common in Baner homes.'],
                        ['icon' => 'award', 'title' => 'Fixed Quotes', 'text' => 'Survey-based pricing with no hidden labour, floor or material charges on moving day.'],
                        ['icon' => 'office', 'title' => 'Weekend Office Moves', 'text' => 'Overnight and weekend scheduling so your Baner office is ready for Monday.'],
                        ['icon' => 'truck', 'title' => 'Closed, GPS-Tracked Trucks', 'text' => 'Weather-proof vehicles with live tracking for local and intercity moves.'],
                        ['icon' => 'heart', 'title' => 'Responsive Support', 'text' => 'One coordinator for your move from the first call to the final unpacking.'],
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

    {{-- Branch office + map --}}
    <x-branch-office branch="baner" heading="Visit Our Baner Office"
        intro="Find us on the Mumbai–Bangalore highway service road near Radha Chowk, next to EFC Prime, a few minutes from Balewadi High Street and Baner-Pashan Link Road." />

    {{-- CTA Section --}}
    <x-cta-section />

    {{-- Other branches --}}
    <x-service-areas exclude="baner" heading="Also Serving <span class='text-primary'>Nearby Areas</span>"
        intro="Moving between Baner and another part of Pune? Our other offices cover Hinjewadi, Wakad and Mahalunge." />

    {{-- FAQ section --}}
    <x-faq-section heading="Packers and Movers in Baner: <span class='text-primary'>FAQs</span>"
        subheading="Answers to the questions Baner residents and businesses ask us most." :faqs="$faqs" class="bg-white" />
@endsection
