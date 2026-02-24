@extends('layouts.app')

@section('content')
    <section class="relative bg-secondary py-20 px-4 overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <nav class="flex justify-center gap-2 text-primary text-sm font-medium mb-4 uppercase tracking-widest">
                <a href="/">Home</a> <span>/</span> <span class="text-white/60">About Us</span>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                About Us Jasol Packers and Movers
            </h1>
            <p class="text-white/70 max-w-2xl mx-auto text-lg leading-relaxed">
                Your trusted logistics partners for every move.
            </p>
        </div>
    </section>

    <section class="py-24 px-4 bg-white">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="relative">
                        <img src="{{ asset('assets/images/truck.jpeg') }}" class="rounded-3xl shadow-2xl relative z-10"
                            alt="Moving Team">
                        <div class="absolute -bottom-6 -right-6 w-full h-full border-2 border-primary rounded-3xl -z-0">
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2" data-aos="fade-left">
                    <span class="text-primary font-bold uppercase tracking-widest text-sm">Since 2015</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-4 mb-6 leading-tight">From a Single Truck to
                        a Pan-India Logistics Giant</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Jasol Packers and Movers began in Mumbai with a simple belief: <strong class="text-slate-900">Moving
                            shouldn't be stressful.</strong> We saw families struggling with broken promises and damaged
                        goods, and we decided to build a company rooted in transparency.
                    </p>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Today, our GPS-tracked fleet and multi-layered packing technology ensure that whether you're moving
                        a studio apartment or a corporate headquarters, your world is in safe hands.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50 border-y border-slate-200">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="flip-left">
                    <div class="p-10 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <x-icons.target class="w-8 h-8 text-primary group-hover:text-white" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4 group-hover:text-white">Our Mission</h3>
                        <p class="text-slate-600 group-hover:text-white/80 leading-relaxed text-lg">
                            To simplify relocations through innovative packing techniques and honest pricing, ensuring every
                            customer feels "at home" even before they arrive.
                        </p>
                    </div>
                </div>
                <div data-aos="flip-right">
                    <div class="p-10 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                            <x-icons.vision class="w-8 h-8 text-primary group-hover:text-white" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4 group-hover:text-white">Our Vision</h3>
                        <p class="text-slate-600 group-hover:text-white/80 leading-relaxed text-lg">
                            To be the digital-first leader in Indian logistics, setting benchmarks for safety, punctuality,
                            and
                            zero-damage delivery across the globe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white px-4">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-16">The Pillars of Our Success</h2>
            <div class="grid md:grid-cols-3 gap-12">
                <div data-aos="fade-up">
                    <div class="mb-6 inline-block p-5 bg-primary/10 text-primary rounded-full">
                        <x-icons.heart class="w-8 h-8" />
                    </div>
                    <h4 class="text-xl font-bold mb-3">Customer First</h4>
                    <p class="text-slate-500">We don't just move boxes; we move memories. Our 24/7 support ensures you are
                        never alone during the process.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-6 inline-block p-5 bg-primary/10 text-primary rounded-full">
                        <x-icons.secure class="w-8 h-8" />
                    </div>
                    <h4 class="text-xl font-bold mb-3">Quality Assured</h4>
                    <p class="text-slate-500">From 5-layer corrugated sheets to bubble wraps and foam, we use the
                        industry’s highest grade packing materials.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-6 inline-block p-5 bg-primary/10 text-primary rounded-full">
                        <x-icons.plan class="w-8 h-8" />
                    </div>
                    <h4 class="text-xl font-bold mb-3">Pan-India Reach</h4>
                    <p class="text-slate-500">With warehouses in every metro city, we provide local expertise with the
                        backing of a national network.</p>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section />
@endsection
