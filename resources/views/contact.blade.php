@extends('layouts.app')

@section('title', 'Contact Jasol Packers and Movers | Get Free Quote')

@push('metas')
    <meta name="title" content="Contact Jasol Packers and Movers | Get Free Quote">
    <meta name="description"
        content="Contact Jasol Packers and Movers in Hinjewadi, Pune. Call +91-7300293594 for a free estimate on home shifting, office relocation, and car transport.">
    <meta property="og:title" content="Contact Jasol Packers and Movers | Get Free Quote">
    <meta property="og:description"
        content="Contact Jasol Packers and Movers in Hinjewadi, Pune. Call +91-7300293594 for a free estimate on home shifting, office relocation, and car transport.">
    <meta property="og:type" content="website">
@endpush

@push('schema')
    <x-schemas.hinjewadi />
    <script type="application/ld+json">
        @verbatim
            {
            "@context": "https://schema.org",
            "@type": "ContactPage",
            "mainEntity": {
                "@id": "https://jasolpackersandmovers.in/#organization"
            },
            "name": "Contact Jasol Packers and Movers",
            "description": "The official contact page for Jasol Packers and Movers. Book your relocation or get a free quote.",
            "url": "{{ url()->current() }}"
            }
        @endverbatim
    </script>
@endpush

@section('content')
    <section class="relative bg-secondary py-20 px-4 overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <nav class="flex justify-center gap-2 text-primary text-sm font-medium mb-4 uppercase tracking-widest">
                <a href="/">Home</a> <span>/</span> <span class="text-white/60">Contact Us</span>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                Let's Plan Your <span class="text-primary">Next Move</span>
            </h1>
            <p class="text-white/70 max-w-2xl mx-auto text-lg leading-relaxed">
                Whether it's a home, office, or vehicle relocation, our experts are ready to provide you with a
                customized, no-obligation quote.
            </p>
        </div>
    </section>

    <section class="py-24 px-4 bg-white relative overflow-hidden">
        <div class="container mx-auto max-w-6xl">
            <div class="grid lg:grid-cols-12 gap-16">

                <div class="lg:col-span-5 space-y-10" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-6">Contact Information</h2>
                        <p class="text-slate-600 mb-8">Reach out to us through any of these channels or visit our head
                            office.</p>

                        <div class="space-y-8">
                            <div class="flex gap-5 group">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                                    <x-icons.location class="w-6 h-6" />
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900">Head Office</h3>
                                    <p class="text-slate-500 text-sm leading-relaxed">
                                        {{ config('services.static.address') }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-5 group">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                                    <x-icons.call class="w-6 h-6" />
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900">Phone Support</h3>
                                    <p class="text-slate-500 text-sm">+91-{{ config('services.static.mobile') }}</p>
                                </div>
                            </div>

                            <div class="flex gap-5 group">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center flex-shrink-0">
                                    <x-icons.email class="w-6 h-6" />
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900">Email Inquiries</h3>
                                    <p class="text-slate-500 text-sm">{{ config('services.static.email') }}</p>
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

    <x-map-section />

    {{-- <section class="py-24 bg-slate-50 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-slate-900">Our Regional Hubs</h2>
                <p class="text-slate-500 mt-4">Visit our local offices for direct consultations.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl border border-slate-200 hover:border-primary transition-colors duration-300 group"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">North India Hub</h3>
                    <p class="text-slate-500 text-sm mb-4 italic">Delhi & NCR Region</p>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">45, Okhla Industrial Estate, Phase III, New
                        Delhi 110020</p>
                    <a href="tel:+919876543210" class="text-primary font-bold text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        Call Branch
                    </a>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200 hover:border-primary transition-colors duration-300 group"
                    data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">South India Hub</h3>
                    <p class="text-slate-500 text-sm mb-4 italic">Bangalore & Chennai</p>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">12, Whitefield Main Road, Near Hope Farm,
                        Bangalore 560066</p>
                    <a href="tel:+919876543210" class="text-primary font-bold text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        Call Branch
                    </a>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200 hover:border-primary transition-colors duration-300 group"
                    data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">West India Hub</h3>
                    <p class="text-slate-500 text-sm mb-4 italic">Gujarat & Rajasthan</p>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">Sec-10, Near Gandhinagar Crossing, Ahmedabad
                        382010</p>
                    <a href="tel:+919876543210" class="text-primary font-bold text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        Call Branch
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!--FAQ Section-->
    <section class="section-padding overflow-hidden">
        <div class="container mx-auto max-w-3xl">
            <div class="text-center mb-10" data-aos="fade-up">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Got questions? We've got answers.</p>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>How do I get an accurate moving quote?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Fill out the form above. For a detailed quote, we offer a free video survey or home visit to
                            assess your inventory.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Are my belongings insured during transit?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, we provide comprehensive transit insurance for all relocations to ensure complete
                            peace of mind.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>How early should I book my move?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            We recommend booking at least 7-10 days in advance, especially for long-distance moves or
                            weekend relocations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
