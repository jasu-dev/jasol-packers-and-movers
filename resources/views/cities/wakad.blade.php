@extends('layouts.app')

@section('title', 'Packers and Movers in Wakad, Pune | Jasol Packers & Movers')
@section('meta_description', 'Packers and movers in Wakad, Pune with a local branch at Bhumkar Nagar. House shifting from ₹3,000, office moves and bike transport. Call +91-7058332061.')

@php
    $office = config('services.branches.wakad');
    $siteUrl = 'https://jasolpackersandmovers.in';

    $localities = [
        'Wakad', 'Bhumkar Nagar', 'Kaspate Wasti', 'Datta Mandir Road', 'Bhumkar Chowk', 'Dange Chowk', 'Kalewadi Phata',
        'Thergaon', 'Kalewadi', 'Rahatani', 'Pimple Saudagar', 'Pimple Nilakh', 'Tathawade', 'Punawale', 'Hinjewadi Phase 1',
    ];

    $faqs = [
        [
            'q' => 'How much do packers and movers charge in Wakad, Pune?',
            'a' => 'For local shifting within Wakad or to nearby areas like Hinjewadi and Baner, expect roughly <b>₹3,000 to ₹7,000 for a 1 BHK</b>, ₹5,000 to ₹10,000 for a 2 BHK and ₹8,000 to ₹15,000 for a 3 BHK. Charges go up if the society has no lift, if the truck has to park far from the building, or if you need full packing of kitchen and wardrobes. We confirm a fixed price before the move.',
        ],
        [
            'q' => 'Do you have an office in Wakad?',
            'a' => 'Yes. Our Wakad branch is at Shop No. 4, near Shree Datta Krupa Battery on Laxmi Chowk Road, Vinode Wasti, Bhumkar Nagar, Wakad 411057. You are welcome to visit to see our packing material and vehicles, or call +91-7058332061 to book a free survey.',
        ],
        [
            'q' => 'Which areas near Wakad do you cover?',
            'a' => 'From the Wakad office we serve Bhumkar Nagar, Kaspate Wasti, Datta Mandir Road, Dange Chowk, Kalewadi Phata, Thergaon, Kalewadi, Rahatani, Pimple Saudagar, Pimple Nilakh, Tathawade and Punawale. Hinjewadi and Baner are covered by our other two offices, so cross-area moves are easy to schedule.',
        ],
        [
            'q' => 'How long does a local shift within Wakad take?',
            'a' => 'A 1 or 2 BHK move within Wakad, or from Wakad to Hinjewadi or Pimple Saudagar, is usually finished in 4 to 6 hours including packing, loading, unloading and reassembling beds and wardrobes. Larger 3 BHK homes take most of a day.',
        ],
        [
            'q' => 'Can you handle high-rise societies and lift bookings in Wakad?',
            'a' => 'Yes. Most of our Wakad moves are in gated high-rise societies along Datta Mandir Road and the Wakad–Hinjewadi road. We help you book the service lift slot, carry society entry documents for our crew and vehicle, and use trolleys and corner guards so common areas are not damaged.',
        ],
        [
            'q' => 'Do you offer bike transport from Wakad?',
            'a' => 'Yes. We pick up two-wheelers from any Wakad address, pack them and send them in dedicated carriers to cities across India. Pune to Mumbai starts at about ₹2,500 and longer routes such as Bangalore or Delhi range from ₹4,000 to ₹9,000; call us with your bike model and destination for an exact quote.',
        ],
        [
            'q' => 'Is packing material included in the quote?',
            'a' => 'Yes. Our quotes include cartons, bubble wrap, stretch film, corrugated sheets and fabric covers for furniture. We bring extra material on the day so nothing is left unprotected, and you only pay for what is used.',
        ],
        [
            'q' => 'Do you move from Wakad to other cities in India?',
            'a' => 'Yes. We run regular household moves from Wakad and Pimpri-Chinchwad to Mumbai, Bangalore, Hyderabad, Delhi NCR, Chennai, Ahmedabad and other cities, with GPS tracking and optional transit insurance. Delivery usually takes 2 to 7 days depending on the distance.',
        ],
    ];

    $localBusinessSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'MovingCompany',
        '@id' => $siteUrl . '/#office-wakad',
        'name' => $office['name'],
        'url' => url()->current(),
        'telephone' => '+91-' . $office['phone'],
        'image' => $siteUrl . '/assets/images/banner.png',
        'priceRange' => '₹₹',
        'parentOrganization' => ['@id' => $siteUrl . '/#organization'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $office['street'],
            'addressLocality' => 'Wakad, Pune',
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
            'itemOffered' => ['@type' => 'Service', 'name' => $name . ' in Wakad, Pune'],
        ], ['Household Shifting', 'Office Relocation', 'Local Shifting', 'Bike and Car Transportation', 'Packing and Unpacking', 'Loading and Unloading']),
    ];
@endphp

@push('schema')
    <script type="application/ld+json">{!! json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
    <x-city-hero badge="Wakad, Pune · Branch at Bhumkar Nagar"
        title="Packers and Movers in <span class='text-primary'>Wakad, Pune</span>"
        intro="Jasol Packers and Movers runs a local branch in Wakad for fast, affordable home and office shifting. Trained packers, closed trucks, transparent pricing and same-day moves across Wakad, Thergaon, Pimple Saudagar, Tathawade and Hinjewadi."
        :crumbs="[['name' => 'Packers and Movers in Wakad']]" />

    {{-- About section --}}
    <section class="section-padding bg-white border-b border-slate-200">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-10">
                <div class="lg:col-span-2">
                    <article data-aos="fade-right">
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-foreground mb-6">
                            Local Packers and Movers in Wakad You Can Visit
                        </h2>
                        <div class="text-foreground/70 space-y-4 leading-relaxed">
                            <p>
                                Wakad sits between the Hinjewadi IT park and Pimpri-Chinchwad, and it is one of the busiest
                                shifting areas in Pune. Families move in for the schools and the Mumbai–Bangalore highway
                                access, and IT professionals move in and out of the high-rise societies along Datta Mandir
                                Road and Kaspate Wasti every month. Jasol Packers and Movers opened a dedicated
                                <b>Wakad branch at Bhumkar Nagar</b> so that a survey team and a truck are never more than a
                                few minutes away.
                            </p>
                            <p>
                                Unlike listing-only movers, we are a registered local business with offices you can walk
                                into in <a href="{{ route('home') }}" class="text-primary font-semibold hover:underline">Hinjewadi</a>,
                                Wakad and <a href="{{ route('baner') }}" class="text-primary font-semibold hover:underline">Baner</a>.
                                You deal with our own crew, our own packing material and our own vehicles from the first
                                call to the last carton.
                            </p>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                What We Move in Wakad
                            </h3>
                            <ul class="grid sm:grid-cols-2 gap-x-6 gap-y-2 list-none pl-0">
                                <li class="flex items-start gap-2"><x-icons.check class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />1, 2 and 3 BHK flats in gated societies</li>
                                <li class="flex items-start gap-2"><x-icons.check class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />PG and bachelor room shifts (few items)</li>
                                <li class="flex items-start gap-2"><x-icons.check class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />Small offices, clinics and shops</li>
                                <li class="flex items-start gap-2"><x-icons.check class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />Bikes and cars to other cities</li>
                                <li class="flex items-start gap-2"><x-icons.check class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />Wakad to any city in India</li>
                                <li class="flex items-start gap-2"><x-icons.check class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />Short-term storage between homes</li>
                            </ul>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                How a Typical Wakad Move Works
                            </h3>
                            <p>
                                You call or WhatsApp us with your address and a rough list of items. We do a quick video or
                                in-person survey, confirm a fixed price and the service-lift slot with your society, and
                                arrive on moving day with cartons, bubble wrap, stretch film and furniture covers. Beds and
                                wardrobes are dismantled, every carton is labelled by room, and the truck is loaded in a
                                planned order so fragile items travel on top. At the new home we unload, reassemble furniture
                                and place cartons in the right rooms.
                            </p>

                            <h3 class="text-xl font-heading font-bold text-foreground pt-2">
                                Why Wakad Residents Choose Jasol
                            </h3>
                            <p>
                                Our crews know the entry rules and lift timings of the large Wakad societies, which avoids
                                delays on the day. Pricing is fixed in advance with no surprise labour or material charges,
                                and every move is covered by our damage policy with optional transit insurance for
                                high-value goods. Most local moves are completed the same day.
                            </p>
                        </div>
                    </article>
                </div>

                <aside class="relative">
                    <div data-aos="fade-left" class="sticky top-32 space-y-6">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm border-primary/20">
                            <div class="flex flex-col space-y-1.5 p-6 bg-primary/5 rounded-t-lg">
                                <h3 class="font-semibold tracking-tight text-lg flex items-center gap-2">Wakad Branch</h3>
                            </div>
                            <div class="p-6 space-y-4">
                                <address class="not-italic flex items-start gap-3 text-foreground/80">
                                    <x-icons.location class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" />
                                    <p class="text-sm leading-relaxed">{{ $office['street'] }}, Wakad, Pune 411057</p>
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
                            <h3 class="font-semibold mb-3">Areas we cover from Wakad</h3>
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
                <h2 class="section-title">Packing and Moving Services in Wakad</h2>
                <p class="section-subtitle max-w-3xl mx-auto">
                    One team for every kind of move from Wakad: within the society, across Pune or to another city.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $services = [
                        ['icon' => 'home', 'title' => 'House Shifting in Wakad', 'text' => 'Full-service household shifting: packing, dismantling, loading, transport, unloading and reassembly for flats and row houses in Wakad.'],
                        ['icon' => 'office', 'title' => 'Office Relocation in Wakad', 'text' => 'Weekend and after-hours office moves for the small IT firms, clinics and shops around Dange Chowk and Kalewadi Phata, with labelled workstation packing.'],
                        ['icon' => 'car', 'title' => 'Bike and Car Transport from Wakad', 'text' => 'Door-to-door two-wheeler and car transport in dedicated carriers to Mumbai, Bangalore, Hyderabad, Delhi and more.'],
                        ['icon' => 'load', 'title' => 'Loading and Unloading Labour', 'text' => 'Trained loaders with trolleys and straps if you have arranged your own vehicle or need help shifting within the same society.'],
                        ['icon' => 'truck', 'title' => 'Wakad to Other Cities', 'text' => 'Domestic relocation with shared or dedicated trucks, GPS tracking and door delivery in 2 to 7 days.'],
                        ['icon' => 'delivery', 'title' => 'Packing and Storage', 'text' => 'Packing-only service and short-term storage when your new flat in Wakad is not ready for possession yet.'],
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
    <x-rates-table heading="Packers and Movers Charges in Wakad, Pune"
        intro="Indicative price ranges for moves starting in Wakad. Societies without a lift, long carrying distance from the truck and full kitchen packing add to the cost." />

    {{-- How We Work Section --}}
    <x-how-we-work-section />

    {{-- Why Choose Us Section --}}
    <section class="section-padding bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Why Choose Jasol Packers and Movers in Wakad?</h2>
                <p class="section-subtitle max-w-3xl mx-auto">
                    A local office, our own crew and vehicles, and pricing you can check before you book.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $reasons = [
                        ['icon' => 'location', 'title' => 'Office in Wakad', 'text' => 'Visit us at Bhumkar Nagar, see our packing material and meet the team that will handle your move.'],
                        ['icon' => 'delivery', 'title' => 'Quality Packing Material', 'text' => 'Multi-layer bubble wrap, five-ply cartons, foam sheets, stretch film and fabric covers for sofas and wardrobes.'],
                        ['icon' => 'award', 'title' => 'Fixed, Transparent Pricing', 'text' => 'The quote you approve is the amount you pay. No extra labour, floor or fuel charges on moving day.'],
                        ['icon' => 'date-check', 'title' => 'On-Time, Same-Day Moves', 'text' => 'Local Wakad shifts are completed the same day, including furniture reassembly at the new home.'],
                        ['icon' => 'secure', 'title' => 'Damage Protection', 'text' => 'Careful handling backed by our damage policy and optional goods-in-transit insurance for long-distance moves.'],
                        ['icon' => 'users', 'title' => 'Society-Friendly Crew', 'text' => 'We carry ID and vehicle documents, respect lift slots and protect lobbies and corridors while moving.'],
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
    <x-branch-office branch="wakad" heading="Visit Our Wakad Office"
        intro="Our Wakad branch is on Laxmi Chowk Road at Bhumkar Nagar, a short drive from Datta Mandir Road, Dange Chowk and the Wakad–Hinjewadi bridge." />

    {{-- CTA Section --}}
    <x-cta-section />

    {{-- Other branches --}}
    <x-service-areas exclude="wakad" heading="Also Serving <span class='text-primary'>Nearby Areas</span>"
        intro="Moving between Wakad and another part of Pune? Our other offices cover Hinjewadi, Baner and Mahalunge." />

    {{-- FAQ section --}}
    <x-faq-section heading="Packers and Movers in Wakad: <span class='text-primary'>FAQs</span>"
        subheading="Common questions from Wakad residents about costs, timing and our local office." :faqs="$faqs" class="bg-white" />
@endsection
