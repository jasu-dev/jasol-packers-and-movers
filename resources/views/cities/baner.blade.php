@extends('layouts.app')

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
                        Baner, Pune
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-foreground leading-tight mb-6">
                        Best <span class="text-primary">Packers and Movers</span> in Baner, Pune
                    </h1>
                    <p class="text-lg text-secondary-foreground/80 mb-8 max-w-lg">
                        Jasol Packers and Movers in Baner, Pune offers reliable home shifting, office relocation, vehicle
                        transportation, and local moving services with safe packing, secure transport, affordable pricing,
                        and timely delivery solutions across Pune and India.
                    </p>
                    <x-ui.primary-button href="#quote">
                        Get Free Quote
                    </x-ui.primary-button>
                </div>

                <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                    <form action="#" method="POST" class="bg-card rounded-2xl shadow-2xl p-6 md:p-8 space-y-4">
                        @csrf
                        <h2 class="text-3xl font-bold text-card-foreground mb-2">
                            Get a Free <span class="text-primary">Quote</span>
                        </h2>
                        <p class="text-sm text-muted-foreground mb-4">Fill the form below and get a callback
                            within 30 minutes</p>

                        <x-form.input name="name" placeholder="Your Name" required />

                        <x-form.input type="tel" name="phone" placeholder="Phone Number" required />

                        <div class="grid grid-cols-2 gap-3">
                            <x-form.input type="text" name="from_city" placeholder="From City" required />
                            <x-form.input type="text" name="to_city" placeholder="To City" required />
                        </div>

                        <x-form.input type="date" name="moving_date" required />

                        <div class="relative">
                            <select name="service" required
                                class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring appearance-none cursor-pointer">
                                <option value="" disabled selected>Service Required</option>
                                <option value="House Relocation">House Relocation</option>
                                <option value="Office Relocation">Office Relocation</option>
                                <option value="Car Transportation">Car Transportation</option>
                                <option value="Loading & Unloading">Loading & Unloading</option>
                                <option value="Pet Relocation">Pet Relocation</option>
                                <option value="International Relocation">International Relocation</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-muted-foreground">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </div>
                        </div>
                        <x-ui.primary-button type="submit" class="w-full">
                            Get Free Quote →
                        </x-ui.primary-button>
                    </form>
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
                            Movers in Baner, Pune</h2>
                        <div class="text-foreground/70 space-y-4 leading-relaxed">
                            <p>
                                Jasol Packers and Movers is a reliable and professional relocation service provider offering
                                the best packing and moving services in Baner, Pune for residential and commercial shifting
                                needs.
                            </p>
                            <p>
                                Relocation can be a challenging and time-consuming task, but hiring experienced packers and
                                movers helps in safely packing and transporting household or office goods from one location
                                to another with ease.
                            </p>
                            <p>
                                Professional movers handle packing, loading, transportation, unloading, and unpacking
                                services to ensure a smooth moving experience.
                            </p>
                            <p>
                                We provide complete relocation solutions using high-quality packing materials and modern
                                equipment to ensure the safety of your belongings during the entire shifting process. Our
                                trained staff carefully handle furniture, electronic appliances, kitchen items, and fragile
                                goods to minimize the risk of damage during transit.
                            </p>
                            <h3 class="text-xl font-heading font-bold text-foreground mb-4">
                                Complete Home and Office Relocation Services
                            </h3>
                            <p>
                                Jasol Packers and Movers Baner Pune offers a wide range of packing and moving services
                                including household shifting, office relocation, local shifting, domestic relocation,
                                vehicle transportation, furniture shifting, and warehouse storage services.
                            </p>
                            <p>
                                Professional relocation companies in Baner provide secure moving services with affordable
                                charges and quick customer support for customers relocating within Pune or to other cities
                                across India.
                            </p>
                            <h3 class="text-xl font-heading font-bold text-foreground mb-4">
                                Safe Packing and Secure Transportation
                            </h3>
                            <p>
                                We use premium quality packing materials such as bubble wrap, corrugated sheets, packing
                                paper, foam sheets, and stretch film to ensure maximum protection of your valuable
                                belongings. Packers and movers in Baner also provide additional services such as furniture
                                disassembly, packing, loading, unloading, transport, and storage facilities for smooth
                                relocation.
                            </p>
                            <p>
                                Our fleet of well-maintained transport vehicles ensures secure and timely delivery of your
                                goods to the destination.
                            </p>
                            <h3 class="text-xl font-heading font-bold text-foreground mb-4">
                                Affordable and Timely Moving Solutions
                            </h3>
                            <p>
                                At Jasol Packers and Movers Baner Pune, we offer budget-friendly relocation services without
                                compromising on quality. Packers and movers services in Baner provide 100% secure moving
                                services with affordable shifting charges suitable for different customer budgets.
                            </p>
                            <p>
                                Our goal is to provide stress-free home and office shifting services in Baner Pune with
                                complete customer satisfaction through professional and timely relocation solutions.
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
                                <a href="#get-free-quote">
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
                    Ready to Move in Baner, Pune?
                </h2>
                <p class="text-primary-foreground/80 mb-8 max-w-xl mx-auto">
                    Get a free, no-obligation quote from Baner's
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
                <h2 class="section-title">Our Packing and Moving Services in Baner, Pune</h2>
                <p class="section-subtitle">
                    Jasol Packers and Movers provide professional home shifting, office relocation, vehicle transportation,
                    loading unloading and local moving services in Baner Pune at affordable rates.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.home
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">House Shifting in Baner Pune</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Safe and affordable household shifting services in Baner Pune including packing, loading,
                        transportation, unloading and unpacking for secure home relocation.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.office
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Office Relocation in Baner Pune</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Professional office and corporate relocation services in Baner Pune with minimal downtime for smooth
                        and efficient business shifting.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.car
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Car Transportation in Baner</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Secure and insured car and bike transportation services from Baner Pune using modern vehicle
                        carriers
                        for safe delivery anywhere in India.
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
                        Expert loading and unloading services in Baner Pune for safe handling of heavy furniture,
                        appliances and fragile items during relocation.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.home
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Local Shifting Services in Baner</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Fast and reliable local shifting services within Baner Pune for homes, flats, apartments and offices
                        at budget-friendly prices.
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
                        High-quality packing and unpacking services in Baner Pune using bubble wrap, cartons and protective
                        materials for damage-free relocation.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Why Choose Us Section --}}
    <section class="section-padding bg-gray-50">
        <div class="container mx-auto">

            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Why Choose Jasol Packers and Movers in Baner, Pune?</h2>
                <p class="section-subtitle">
                    Looking for the best packers and movers in Baner Pune? Jasol Packers and Movers provide safe,
                    affordable, and professional home shifting, office relocation, and vehicle transportation services in
                    Baner Pune.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.delivery class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Professional Packing Services in Baner</h3>
                    <p class="text-sm text-gray-600">
                        We use high-quality packing materials like bubble wrap, cartons, foam sheets and stretch film to
                        ensure complete safety of your belongings during relocation in Baner Pune.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.load class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Safe Loading and Unloading</h3>
                    <p class="text-sm text-gray-600">
                        Our trained team ensures careful handling of furniture, appliances, electronics and fragile goods
                        for safe loading and unloading services in Baner Pune.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.award class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Affordable and Transparent Pricing</h3>
                    <p class="text-sm text-gray-600">
                        Jasol Packers and Movers Baner Pune offer budget-friendly shifting services with transparent pricing
                        and no hidden charges for local and domestic relocation.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.date-check class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">On-Time Pickup and Delivery</h3>
                    <p class="text-sm text-gray-600">
                        We provide timely pickup and safe delivery services to make your household or office shifting
                        experience smooth and hassle-free in Baner Pune.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.home class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Local and Domestic Shifting Services</h3>
                    <p class="text-sm text-gray-600">
                        Whether you are moving locally within Baner Pune or relocating to another city in India,
                        we provide reliable packing and moving services tailored to your needs.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.heart class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">100% Customer Satisfaction</h3>
                    <p class="text-sm text-gray-600">
                        Our goal is to provide stress-free moving services in Baner Pune with expert support from packing
                        to final delivery ensuring complete customer satisfaction.
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
                <p class="section-subtitle">Jasol Packers and Movers Baner Pune FAQs</p>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do you provide household shifting services in Baner Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, Jasol Packers and Movers provide safe and professional household shifting services in Baner
                            Pune
                            including packing, loading, transportation, unloading and unpacking.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Can you transport my car or bike from Baner Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, we offer secure car and bike transportation services from Baner Pune using specialized
                            vehicle
                            carriers for safe delivery across India.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do you offer office relocation services in Baner?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            We provide professional office relocation services in Baner Pune with proper planning and
                            minimal
                            downtime for smooth business shifting.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do you provide packing and unpacking services in Baner Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, we use high-quality packing materials such as bubble wrap, cartons, foam sheets and stretch
                            film for safe packing and unpacking services in Baner Pune.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>How long does local shifting take in Baner Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Local shifting in Baner Pune usually takes a few hours depending on the number of items and
                            distance.
                            Our team ensures fast and timely relocation services.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
