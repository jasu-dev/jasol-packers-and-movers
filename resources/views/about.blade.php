@extends('layouts.app')

@section('title', 'About Jasol Packers and Movers | Pune Movers Since 2015')
@section('meta_description', 'Jasol Packers and Movers is a Pune relocation company founded in 2015 with offices in Hinjewadi, Wakad and Baner. Meet the team behind safe, insured moves.')

@section('content')
    <section class="relative bg-secondary py-20 px-4 overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <x-breadcrumbs :items="[['name' => 'About Us']]" class="mb-4" />
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                About Jasol Packers and Movers
            </h1>
            <p class="text-white/70 max-w-2xl mx-auto text-lg leading-relaxed">
                Pune's trusted packers and movers since 2015, with offices in Hinjewadi, Wakad and Baner.
            </p>
        </div>
    </section>

    <section class="py-24 px-4 bg-white">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="relative">
                        <img src="{{ asset('assets/images/truck.jpeg') }}" class="rounded-3xl shadow-2xl relative z-10"
                            alt="Jasol Packers and Movers truck and team at a household shifting job in Pune" width="1280" height="960" loading="lazy" decoding="async">
                        <div class="absolute -bottom-6 -right-6 w-full h-full border-2 border-primary rounded-3xl -z-0">
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-bold uppercase tracking-widest text-sm">Since 2015</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-4 mb-6 leading-tight">From a Single Truck to
                        Three Offices Across Pune</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Jasol Packers and Movers began in 2015 with one truck and a simple belief: <strong class="text-slate-900">moving
                            shouldn't be stressful.</strong> We saw families struggling with broken promises, hidden charges
                        and damaged goods, and we decided to build a company rooted in transparency.
                    </p>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Today we operate from our head office in
                        <a href="{{ route('home') }}" class="text-primary font-semibold hover:underline">Hinjewadi</a> and
                        branches in <a href="{{ route('wakad') }}" class="text-primary font-semibold hover:underline">Wakad</a> and
                        <a href="{{ route('baner') }}" class="text-primary font-semibold hover:underline">Baner</a>, serving
                        the whole of west Pune and Pimpri-Chinchwad for local shifting, and sending household goods, bikes
                        and cars to cities across India.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Our GPS-tracked fleet and multi-layer packing standards mean that whether you are moving a studio
                        apartment, a bungalow or a corporate office, your belongings are in safe hands.
                    </p>
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <p class="text-2xl font-bold text-primary">{{ config('services.static.years') }}+</p>
                            <p class="text-xs uppercase tracking-wider text-slate-500 mt-1">Years</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <p class="text-2xl font-bold text-primary">{{ config('services.static.clients') }}+</p>
                            <p class="text-xs uppercase tracking-wider text-slate-500 mt-1">Customers</p>
                        </div>
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <p class="text-2xl font-bold text-primary">3</p>
                            <p class="text-xs uppercase tracking-wider text-slate-500 mt-1">Pune Offices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50 border-y border-slate-200">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="flip-left">
                    <div class="p-10 bg-card rounded-2xl border border-border card-hover h-full">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <x-icons.target class="w-8 h-8 text-primary" />
                        </div>
                        <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
                        <p class="text-slate-600 leading-relaxed text-lg">
                            To simplify relocations through careful packing, trained crews and honest pricing, so every
                            customer feels at home even before they arrive.
                        </p>
                    </div>
                </div>
                <div data-aos="flip-right">
                    <div class="p-10 bg-card rounded-2xl border border-border card-hover h-full">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <x-icons.vision class="w-8 h-8 text-primary" />
                        </div>
                        <h2 class="text-2xl font-bold mb-4">Our Vision</h2>
                        <p class="text-slate-600 leading-relaxed text-lg">
                            To be Pune's most recommended packers and movers, setting the benchmark for safety,
                            punctuality and damage-free delivery on every local and intercity move.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white px-4">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-16">What We Stand For</h2>
            <div class="grid md:grid-cols-3 gap-12">
                <div data-aos="fade-up">
                    <div class="mb-6 inline-block p-5 bg-primary/10 text-primary rounded-full">
                        <x-icons.heart class="w-8 h-8" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Customer First</h3>
                    <p class="text-slate-500">We don't just move boxes; we move homes and memories. One coordinator and
                        24/7 phone support mean you are never alone during the process.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-6 inline-block p-5 bg-primary/10 text-primary rounded-full">
                        <x-icons.secure class="w-8 h-8" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Quality Packing</h3>
                    <p class="text-slate-500">Five-ply corrugated cartons, bubble wrap, foam sheets and wooden crating for
                        fragile items. We use the same material on a one-room move as on a bungalow.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-6 inline-block p-5 bg-primary/10 text-primary rounded-full">
                        <x-icons.plan class="w-8 h-8" />
                    </div>
                    <h3 class="text-xl font-bold mb-3">Local Roots, India-Wide Reach</h3>
                    <p class="text-slate-500">Three offices in Pune for local expertise, plus a trusted partner network for
                        household, bike
                        and car moves to any city in India.</p>
                </div>
            </div>
        </div>
    </section>

    <x-service-areas heading="Where to Find <span class='text-primary'>Us</span>"
        intro="Visit any of our three Pune offices, or read about the areas each one serves." />

    <x-cta-section />
@endsection
