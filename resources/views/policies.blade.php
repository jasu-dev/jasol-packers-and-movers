@extends('layouts.app')

@section('title', 'Privacy Policy & Terms of Service | Jasol Packers and Movers')

@push('metas')
    <meta name="title" content="Privacy Policy & Terms of Service | Jasol Packers and Movers">
    <meta name="description"
        content="Read the terms, conditions, and privacy policies of Jasol Packers and Movers. We are committed to transparent service and protecting your data during your relocation.">
    <meta property="og:title" content="Privacy Policy & Terms of Service | Jasol Packers and Movers">
    <meta property="og:description"
        content="Read the terms, conditions, and privacy policies of Jasol Packers and Movers. We are committed to transparent service and protecting your data during your relocation.">
    <meta property="og:type" content="website">
@endpush

@push('schema')
    <script type="application/ld+json">
        @verbatim
        {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Jasol Packers and Movers Policies",
        "description": "The official privacy policy and terms of service for Jasol Packers and Movers in Pune.",
        "url": "{{ url()->current() }}",
        "publisher": {
            "@id": "https://jasolpackersandmovers.in/#organization"
        },
        "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://jasolpackersandmovers.in/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Policies",
                "item": "https://jasolpackersandmovers.in/policies"
            }
            ]
        }
        }
        @endverbatim
    </script>
@endpush

@section('content')
    <section class="relative bg-secondary py-20 px-4 overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <nav class="flex justify-center gap-2 text-primary text-sm font-medium mb-4 uppercase tracking-widest">
                <a href="/">Home</a> <span>/</span> <span class="text-white/60">Policy</span>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                Jasol Packers and Movers Policies
            </h1>
            <p class="text-slate-500">Last Updated: February 2026</p>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <span class="text-primary font-bold uppercase tracking-widest text-sm">Strategic Excellence</span>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-secondary mt-4 mb-6 leading-tight">
                        Building a Legacy of <br><span class="text-primary">Reliable Relocation</span>
                    </h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-8">
                        At Jasol Packers and Movers, our strategy is built on the foundation of <strong>Brand Growth
                            through Execution</strong>. We don't just plan; we manufacture results. By identifying unique
                        market opportunities and maintaining a rigorous standard of service, we have established ourselves
                        as a leader in the logistics industry.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="p-4 border-l-4 border-primary bg-slate-50">
                            <h4 class="font-bold text-secondary">Customer Retention</h4>
                            <p class="text-sm text-slate-500">Protecting and serving our recurring client base with priority
                                support.</p>
                        </div>
                        <div class="p-4 border-l-4 border-primary bg-slate-50">
                            <h4 class="font-bold text-secondary">Referral Excellence</h4>
                            <p class="text-sm text-slate-500">Transforming satisfied clients into brand ambassadors through
                                quality work.</p>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=800"
                        alt="Strategic Logistics Planning" class="rounded-3xl shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-primary text-white p-8 rounded-2xl hidden md:block">
                        <p class="text-3xl font-black">100%</p>
                        <p class="text-sm uppercase tracking-wider">Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="prose prose-slate max-w-none">
                <p class="text-lg text-slate-600 leading-relaxed mb-8">
                    At <strong>Jasol Packers and Movers</strong>, we value the trust you place in us when sharing your
                    personal information. This Privacy Policy explains how we collect, use, and protect your data during
                    your relocation journey.
                </p>

                <div class="grid gap-10">
                    <div class="flex gap-6">
                        <div
                            class="hidden sm:flex flex-shrink-0 w-12 h-12 rounded-xl bg-primary/10 items-center justify-center text-primary">
                            <x-icons.users class="w-6 h-6" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-2">1. Information We Collect</h3>
                            <p class="text-slate-600">We collect information necessary to provide seamless moving services,
                                including:</p>
                            <ul class="list-disc pl-5 mt-2 text-slate-600 space-y-1">
                                <li>Contact details (Name, Phone Number, Email).</li>
                                <li>Pickup and Delivery addresses.</li>
                                <li>Inventory details for quoting purposes.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div
                            class="hidden sm:flex flex-shrink-0 w-12 h-12 rounded-xl bg-primary/10 items-center justify-center text-primary">
                            <x-icons.date-check class="w-6 h-6" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-2">2. How We Use Your Data</h3>
                            <p class="text-slate-600">Your information is strictly used for:</p>
                            <ul class="list-disc pl-5 mt-2 text-slate-600 space-y-1">
                                <li>Generating accurate moving quotes.</li>
                                <li>Scheduling packing and transportation.</li>
                                <li>Providing real-time shipment tracking updates.</li>
                                <li>Processing insurance claims (if applicable).</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div
                            class="hidden sm:flex flex-shrink-0 w-12 h-12 rounded-xl bg-primary/10 items-center justify-center text-primary">
                            <x-icons.secure class="w-6 h-6" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-2">3. Data Security</h3>
                            <p class="text-slate-600">
                                We implement industry-standard security measures to prevent unauthorized access. <strong>We
                                    never sell or trade your personal data to third-party marketing companies.</strong>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div
                            class="hidden sm:flex flex-shrink-0 w-12 h-12 rounded-xl bg-primary/10 items-center justify-center text-primary">
                            <x-icons.call class="w-6 h-6" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary mb-2">4. Contact Us</h3>
                            <p class="text-slate-600">
                                If you have any questions regarding your privacy or wish to update your records, please
                                contact our support team at <a href="mailto:{{ config('services.static.email') }}"
                                    class="text-primary font-bold hover:underline">{{ config('services.static.email') }}</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section />
@endsection
