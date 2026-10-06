@extends('layouts.app')

@section('title', 'Contact Jasol Packers and Movers Pune | Call 7058332061')
@section('meta_description', 'Call or WhatsApp +91-7058332061 for a free shifting quote from Jasol Packers and Movers, or visit our Pune offices in Hinjewadi, Wakad and Baner.')

@php
    $faqs = [
        [
            'q' => 'How do I get an accurate moving quote?',
            'a' => 'Fill in the form on this page or call +91-' . config('services.static.mobile') . '. For a fixed quote we do a free video survey on WhatsApp or a home visit from the nearest office to check your inventory, floor and lift access.',
        ],
        [
            'q' => 'Which office should I contact?',
            'a' => 'Any of them. Our <a href="' . route('home') . '" class="text-primary font-semibold hover:underline">Hinjewadi head office</a> covers Hinjewadi, Marunji and Mahalunge-Maan; the <a href="' . route('wakad') . '" class="text-primary font-semibold hover:underline">Wakad branch</a> covers Wakad, Thergaon, Pimple Saudagar and Tathawade; and the <a href="' . route('baner') . '" class="text-primary font-semibold hover:underline">Baner branch</a> covers Baner, Balewadi, Pashan, Aundh and Mahalunge. One phone number reaches all three.',
        ],
        [
            'q' => 'Are my belongings insured during transit?',
            'a' => 'We offer goods-in-transit insurance on request, priced on the declared value of your goods. We recommend it for intercity moves and for high-value electronics, furniture and vehicles.',
        ],
        [
            'q' => 'How early should I book my move?',
            'a' => 'Weekday local moves can usually be arranged with 1 to 2 days notice. For weekends, month-ends and intercity or vehicle transport, book 5 to 7 days ahead so a crew and vehicle are reserved for your date.',
        ],
        [
            'q' => 'What are your working hours?',
            'a' => config('services.static.hours_label') . '. Moves can start as early as 7 AM, and our phone lines are answered round the clock for bookings and tracking updates.',
        ],
    ];

    $contactSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'ContactPage',
        '@id' => url()->current() . '#contactpage',
        'name' => 'Contact Jasol Packers and Movers',
        'description' => 'Contact page for Jasol Packers and Movers, Pune. Book a relocation or get a free quote.',
        'url' => url()->current(),
        'mainEntity' => ['@id' => 'https://jasolpackersandmovers.in/#organization'],
    ];
@endphp

@push('schema')
    <script type="application/ld+json">{!! json_encode($contactSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
    <section class="relative bg-secondary py-20 px-4 overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <x-breadcrumbs :items="[['name' => 'Contact Us']]" class="mb-4" />
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                Contact Jasol Packers and Movers, <span class="text-primary">Pune</span>
            </h1>
            <p class="text-white/70 max-w-2xl mx-auto text-lg leading-relaxed">
                Call, WhatsApp or fill the form for a free, no-obligation quote on home shifting, office relocation,
                bike or car transport. We call back within 30 minutes.
            </p>
        </div>
    </section>

    <section class="py-24 px-4 bg-white relative overflow-hidden">
        <div class="container mx-auto max-w-6xl">
            <div class="grid lg:grid-cols-12 gap-16">

                <div class="lg:col-span-5 space-y-10" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-6">Contact Information</h2>
                        <p class="text-slate-600 mb-8">Reach us through any of these channels or visit the office nearest
                            to you.</p>

                        <div class="space-y-8">
                            <div class="flex gap-5">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                                    <x-icons.call class="w-6 h-6" />
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900">Phone &amp; WhatsApp</h3>
                                    <ul class="text-slate-500 text-sm space-y-1 mt-1">
                                        @foreach (config('services.static.phones') as $phone)
                                            <li><a href="tel:+91{{ $phone }}" class="hover:text-primary">+91-{{ $phone }}</a></li>
                                        @endforeach
                                    </ul>
                                    <a href="https://wa.me/91{{ config('services.static.whatsapp') }}?text=Hi%2C%20I%20need%20a%20shifting%20quote"
                                        target="_blank" rel="noopener" class="inline-block mt-2 text-sm font-semibold text-primary hover:underline">Chat on WhatsApp</a>
                                </div>
                            </div>

                            <div class="flex gap-5">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                                    <x-icons.email class="w-6 h-6" />
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900">Email</h3>
                                    <p class="text-slate-500 text-sm"><a href="mailto:{{ config('services.static.email') }}" class="hover:text-primary">{{ config('services.static.email') }}</a></p>
                                </div>
                            </div>

                            <div class="flex gap-5">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                                    <x-icons.date-check class="w-6 h-6" />
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900">Working Hours</h3>
                                    <p class="text-slate-500 text-sm">{{ config('services.static.hours_label') }}</p>
                                </div>
                            </div>

                            <div class="flex gap-5">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                                    <x-icons.location class="w-6 h-6" />
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900">Head Office (Hinjewadi)</h3>
                                    <address class="not-italic text-slate-500 text-sm leading-relaxed">
                                        {{ config('services.branches.hinjewadi.street') }},
                                        {{ config('services.branches.hinjewadi.area') }}, Pune, Maharashtra {{ config('services.branches.hinjewadi.postal') }}
                                    </address>
                                    <a href="{{ config('services.branches.hinjewadi.map_link') }}" target="_blank" rel="noopener"
                                        class="inline-block mt-1 text-sm font-semibold text-primary hover:underline">Get directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7" data-aos="fade-left">
                    <div class="bg-card border border-slate-200 rounded-2xl p-6 md:p-8">
                        <x-quote-form />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Offices --}}
    <section class="py-24 bg-slate-50 px-4 border-y border-slate-200">
        <div class="container mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Our Offices in Pune</h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto">Three locations across west Pune. Visit for a consultation
                    or to see our packing material and vehicles.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach (config('services.branches') as $key => $office)
                    <div class="bg-white p-8 rounded-2xl border border-slate-200 hover:border-primary transition-colors duration-300 flex flex-col"
                        data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <h3 class="text-xl font-bold text-slate-900 mb-1">
                            <a href="{{ $office['route'] === 'home' ? route('home') : route($office['route']) }}" class="hover:text-primary">
                                {{ $office['locality'] }} {{ $key === 'hinjewadi' ? 'Head Office' : 'Branch' }}
                            </a>
                        </h3>
                        <p class="text-slate-500 text-sm mb-4 italic">Packers and Movers in {{ $office['locality'] }}, Pune</p>
                        <address class="not-italic text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                            {{ $office['street'] }}, {{ $office['area'] }}, {{ $office['city'] }}, Maharashtra {{ $office['postal'] }}
                        </address>
                        <div class="flex flex-wrap gap-4 text-sm font-bold">
                            <a href="tel:+91{{ $office['phone'] }}" class="text-primary flex items-center gap-2">
                                <x-icons.call class="w-4 h-4" /> Call
                            </a>
                            <a href="{{ $office['map_link'] }}" target="_blank" rel="noopener" class="text-primary flex items-center gap-2">
                                <x-icons.location class="w-4 h-4" /> Directions
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-map-section />

    <x-faq-section heading="Contact &amp; Booking <span class='text-primary'>FAQs</span>" subheading="Got questions? We've got answers." :faqs="$faqs" />
@endsection
