@extends('layouts.app')
@section('title', 'Expert Packers and Movers in Mahalunge | Household Shifting Pune')

@push('metas')
    <meta name="title" content="Expert Packers and Movers in Mahalunge | Household Shifting Pune">
    <meta name="description"
        content="Jasol Packers and Movers in Mahalunge offers safe packing and moving solutions. We specialize in local shifting and long-distance relocation.">
    <meta property="og:title" content="Expert Packers and Movers in Mahalunge">
    <meta property="og:description"
        content="Safe packing and moving solutions for local and long-distance relocation in Mahalunge.">
    <meta property="og:type" content="website">
@endpush

@push('schema')
    <x-schemas.mahalunge />
@endpush

@section('content')
    <!-- Hero Section -->
    <section id="quote" class="relative min-h-screen flex items-center overflow-hidden">

        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="Professional movers loading a truck"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-secondary/90"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10 py-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <div data-aos="fade-right" data-aos-duration="700">
                    <div
                        class="inline-flex items-center gap-2 bg-primary/20 text-primary-foreground text-sm font-medium px-4 py-1.5 rounded-full mb-6">
                        <x-icons.location class="w-4 h-4" />
                        Mahalunge, Pune
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-foreground leading-tight mb-6">
                        Best <span class="text-primary">Packers and Movers</span> in Mahalunge, Pune
                    </h1>
                    <p class="text-lg text-secondary-foreground/80 mb-8 max-w-lg">
                        Jasol Packers and Movers in Mahalunge, Pune offers professional home shifting, office relocation,
                        vehicle transportation, and local moving services with safe packing, secure transport, affordable
                        pricing, and timely delivery across Pune and India.
                    </p>
                    <a href="tel:+91{{ config('services.static.mobile') }}">
                        <x-ui.primary-button>
                            <x-icons.call class="w-5 h-5" />
                            Call Now
                        </x-ui.primary-button>
                    </a>
                </div>

                <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                    <div class="bg-card rounded-2xl shadow-2xl p-6 md:p-8">
                        <x-quote-form />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About section --}}
    <section class="section-padding bg-white border-b border-slate-200">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-3 gap-10">
                <div class="lg:col-span-2">
                    <div data-aos="fade-right">
                        <h2 class="text-2xl md:text-3xl font-heading font-bold text-foreground mb-6">About Jasol Packers and
                            Movers in Mahalunge, Pune</h2>
                        <div class="text-foreground/70 space-y-4 leading-relaxed">
                            <p>
                                Jasol Packers and Movers is a trusted and professional relocation service provider offering
                                reliable packing and moving services in Mahalunge, Pune for residential and commercial
                                shifting needs. Mahalunge is a rapidly developing area located in Mulshi Taluka of Pune
                                district, making it a preferred residential and commercial hub for families and businesses.
                            </p>
                            <p>
                                Relocation can be stressful without proper planning, but our experienced team ensures a
                                smooth and hassle-free moving experience by providing complete packing and moving solutions
                                tailored to your needs.
                            </p>
                            <h3 class="text-xl font-heading font-bold text-foreground mb-4">
                                Complete Home and Office Relocation Services
                            </h3>
                            <p>
                                We provide a wide range of relocation services in Mahalunge Pune including household
                                shifting, office relocation, local shifting, domestic relocation, vehicle transportation,
                                furniture shifting, and warehouse storage services.
                            </p>
                            <p>
                                Whether you are moving within Mahalunge, Baner, Wakad, or relocating to another city, Jasol
                                Packers and Movers offers end-to-end moving solutions including packing, loading,
                                transportation, unloading, and unpacking services for safe and secure relocation.
                            </p>
                            <h3 class="text-xl font-heading font-bold text-foreground mb-4">
                                Safe Packing and Secure Transportation
                            </h3>
                            <p>
                                At Jasol Packers and Movers Mahalunge Pune, we use high-quality packing materials such as
                                bubble wrap, corrugated sheets, foam sheets, packing paper, and waterproof cartons to ensure
                                maximum protection of your valuable belongings during transit.
                            </p>
                            <p>
                                Our trained professionals follow systematic loading and unloading procedures to minimize the
                                risk of damage. Our fleet of well-maintained transport vehicles ensures safe and timely
                                delivery of your household or office goods.
                            </p>
                            <h3 class="text-xl font-heading font-bold text-foreground mb-4">
                                Affordable and Timely Moving Solutions
                            </h3>
                            <p>
                                We understand the importance of time and budget during relocation. Jasol Packers and Movers
                                provide cost-effective packing and moving services in Mahalunge Pune without compromising on
                                quality. Our professional approach, transparent pricing, and timely execution help us
                                deliver stress-free home and office shifting services with complete customer satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div data-aos="fade-left" class="sticky top-24">
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm sticky top-24 border-primary/20">
                            <div class="flex flex-col space-y-1.5 p-6 bg-primary/5 rounded-t-lg">
                                <h3 class="font-semibold tracking-tight text-lg flex items-center gap-2">Quick Contact</h3>
                            </div>
                            <div class="p-6 space-y-4">
                                <a href="tel:+91{{ config('services.static.mobile') }}"
                                    class="flex items-center gap-3 text-foreground/80 hover:text-primary transition-colors">
                                    <x-icons.call class="w-5 h-5 text-primary" />
                                    <div>
                                        <p class="font-semibold">+91-{{ config('services.static.mobile') }}</p>
                                        <p class="text-xs text-muted-foreground">Available 24/7</p>
                                    </div>
                                </a>
                                <a href="mailto:{{ config('services.static.email') }}"
                                    class="flex items-center gap-3 text-foreground/80 hover:text-primary transition-colors">
                                    <x-icons.email class="w-5 h-5 text-primary" />
                                    <div>
                                        <p class="font-semibold">{{ config('services.static.email') }}</p>
                                        <p class="text-xs text-muted-foreground">Available 24/7</p>
                                    </div>
                                </a>
                                <a href="{{ route('contact') }}">
                                    <x-ui.primary-button class="w-full">
                                        <span>Get Free Quote</span>
                                    </x-ui.primary-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Landing page cta --}}
    <section class="py-20 bg-secondary relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute -top-20 -right-20 w-80 h-80 rounded-full bg-primary-foreground"></div>
            <div class="absolute -bottom-20 -left-20 w-60 h-60 rounded-full bg-primary-foreground"></div>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <div data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-primary-foreground mb-4">
                    Ready to Move in Mahalunge, Pune?
                </h2>
                <p class="text-primary-foreground/80 mb-8 max-w-xl mx-auto">
                    Get a free, no-obligation quote from Mahalunge's
                    most trusted packers and movers. Call now or fill our form!
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="tel:+91{{ config('services.static.mobile') }}">
                        <x-ui.primary-button>
                            <x-icons.call class="w-5 h-5" />
                            +91-{{ config('services.static.mobile') }}
                        </x-ui.primary-button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- How We Work Section --}}
    <x-how-we-work-section />

    {{-- Our services --}}
    <section id="services" class="section-padding bg-white overflow-hidden">
        <div class="container mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Our Packing and Moving Services in Mahalunge, Pune</h2>
                <p class="section-subtitle">
                    Jasol Packers and Movers provide reliable home shifting, office relocation, vehicle transportation,
                    loading unloading and local moving services in Mahalunge Pune.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer" data-aos="fade-up">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.home
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">House Shifting in Mahalunge Pune</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Safe and affordable household shifting services in Mahalunge Pune including packing, loading,
                        transportation, unloading and unpacking with complete care.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.office
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Office Relocation in Mahalunge Pune</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Professional office and corporate shifting services in Mahalunge Pune with minimal downtime for
                        smooth
                        and efficient business relocation.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.car
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Car Transportation in Mahalunge</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Secure and insured car and bike transportation services from Mahalunge Pune using modern vehicle
                        carriers for safe delivery across India.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.load
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Loading and Unloading Services</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Expert loading and unloading services in Mahalunge Pune for safe handling of heavy furniture,
                        appliances and fragile items.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.home
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Local Shifting Services in Mahalunge</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Fast and reliable local shifting services within Mahalunge Pune for homes, flats and offices
                        at affordable prices.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.delivery
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Packing and Unpacking Services</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        High-quality packing and unpacking services in Mahalunge Pune using bubble wrap, cartons and
                        protective materials for damage-free relocation.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Why Choose Us Section --}}
    <section class="section-padding bg-gray-50">
        <div class="container mx-auto">

            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Why Choose Jasol Packers and Movers in Mahalunge, Pune?</h2>
                <p class="section-subtitle">
                    We provide safe,affordable, and professional home shifting, office relocation, and vehicle
                    transportation services in Mahalunge Pune.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.delivery class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Professional Packing Services in Mahalunge</h3>
                    <p class="text-sm text-gray-600">
                        We use high-quality packing materials like bubble wrap, cartons, foam sheets and stretch film
                        for safe packing of your household and office goods during relocation.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.load class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Safe Loading and Unloading</h3>
                    <p class="text-sm text-gray-600">
                        Our trained staff ensures careful handling of furniture, appliances and fragile items
                        for safe loading and unloading services in Mahalunge Pune.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.award class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Affordable and Transparent Pricing</h3>
                    <p class="text-sm text-gray-600">
                        Jasol Packers and Movers Mahalunge Pune offer cost-effective shifting services with
                        transparent pricing and no hidden charges.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.date-check class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">On-Time Pickup and Delivery</h3>
                    <p class="text-sm text-gray-600">
                        We ensure timely pickup and safe delivery of your goods to make your home or office
                        shifting experience smooth and hassle-free.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.home class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Local and Domestic Shifting Services</h3>
                    <p class="text-sm text-gray-600">
                        Whether you are moving locally within Mahalunge Pune or relocating to another city in India,
                        we provide reliable packing and moving services tailored to your needs.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.heart class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">100% Customer Satisfaction</h3>
                    <p class="text-sm text-gray-600">
                        Our goal is to provide stress-free moving services in Mahalunge Pune with expert support
                        from packing to final delivery ensuring complete customer satisfaction.
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- CTA Section --}}
    <x-cta-section />

    {{-- FAQ section --}}
    <section class="section-padding overflow-hidden">
        <div class="container mx-auto max-w-3xl">
            <div class="text-center mb-10" data-aos="fade-up">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Jasol Packers and Movers Mahalunge Pune FAQs</p>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do you provide home shifting services in Mahalunge Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, Jasol Packers and Movers provide professional household shifting services in Mahalunge Pune
                            including packing, loading, transportation, unloading and unpacking.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Are your moving services available for local shifting in Mahalunge?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, we offer fast and reliable local shifting services within Mahalunge Pune for homes,
                            flats, apartments and offices at affordable rates.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do you offer intercity relocation from Mahalunge Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, Jasol Packers and Movers provide domestic relocation services from Mahalunge Pune
                            to any city across India with safe and secure transportation.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do you provide vehicle transportation services from Mahalunge?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            We offer secure car and bike transportation services from Mahalunge Pune using modern
                            vehicle carriers for safe delivery across India.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>What makes Jasol Packers and Movers the best in Mahalunge Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            We offer experienced staff, quality packing materials, modern transport vehicles,
                            timely delivery and affordable relocation services for safe and hassle-free shifting.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
