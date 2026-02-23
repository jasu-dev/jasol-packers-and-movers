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
                        Mahalunge, Pune
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-foreground leading-tight mb-6">
                        Best <span class="text-primary">Packers and Movers</span> in Mahalunge, Pune
                    </h1>
                    <p class="text-lg text-secondary-foreground/80 mb-8 max-w-lg">
                        Jasol Packers and Movers in Hinjewadi, Pune offer reliable, safe, and affordable home and office
                        relocation services with expert packing, secure transportation, timely delivery, and professional
                        handling for a smooth, hassle-free moving experience.
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
                            Movers in Hinjewadi, Pune</h2>
                        <div class="text-foreground/70 space-y-4 leading-relaxed">
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Jasol Packers and Movers in Hinjewadi, Pune is a trusted name in the relocation industry,
                                offering reliable and professional moving solutions for both residential and commercial
                                clients. With years of experience and a skilled team of trained staff, we specialize in safe
                                packing, careful handling, secure loading, and timely transportation of your valuable
                                belongings.
                            </p>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Our goal is to make your relocation process smooth, stress-free, and completely hassle-free.
                                We use high-quality packing materials and modern equipment to ensure that all your household
                                items, office furniture, electronics, and fragile goods are protected throughout the moving
                                process.
                            </p>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Whether you are shifting locally within Hinjewadi or planning a long-distance move, our
                                customized relocation services are designed to meet your specific needs and budget.
                            </p>
                            <p class="text-gray-600 leading-relaxed">
                                At Jasol Packers and Movers, we focus on customer satisfaction by providing on-time
                                delivery, transparent pricing, and end-to-end logistics support. From packing and loading to
                                unloading and unpacking, our dedicated team takes care of every step with professionalism
                                and attention to detail.
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
            <div  data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-primary-foreground mb-4">
                    Ready to Move in Hinjewadi, Pune?
                </h2>
                <p class="text-primary-foreground/80 mb-8 max-w-xl mx-auto">
                    Get a free, no-obligation quote from Hinjewadi's
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
                <h2 class="section-title">Our Packing and Moving Services in Hinjewadi, Pune</h2>
                <p class="section-subtitle">
                    Jasol Packers and Movers offer reliable home shifting, office relocation, vehicle transportation and
                    local moving services in Hinjewadi Pune.
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
                    <h3 class="font-semibold text-lg mb-2">House Shifting in Hinjewadi</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Safe and affordable household relocation services in Hinjewadi Pune including packing, loading,
                        transportation, unloading and unpacking with complete care.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.office
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Office Relocation in Hinjewadi Pune</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Professional office and corporate shifting services in Hinjewadi with minimal downtime for smooth
                        and efficient business relocation.
                    </p>
                </div>

                <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                        <x-icons.car
                            class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Car Transportation in Hinjewadi</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Secure and insured car and bike transportation services from Hinjewadi Pune using modern vehicle
                        carriers across India.
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
                        Expert loading and unloading services in Hinjewadi Pune for safe handling of heavy furniture,
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
                    <h3 class="font-semibold text-lg mb-2">Local Shifting Services</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Fast and reliable local shifting services within Hinjewadi Pune at affordable prices for homes,
                        flats and offices.
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
                        High-quality packing and unpacking services in Hinjewadi Pune using bubble wrap, cartons and
                        protective materials for damage-free relocation.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Why Choose Us Section --}}
    <section class="section-padding bg-gray-50">
        <div class="container mx-auto max-w-6xl px-4">

            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Why Choose Jasol Packers and Movers in Hinjewadi, Pune?</h2>
                <p class="section-subtitle">
                    Looking for reliable packers and movers in Hinjewadi, Pune? Jasol Packers and Movers provide safe,
                    affordable, and professional home and office relocation services.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.delivery class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Professional Packing Services</h3>
                    <p class="text-sm text-gray-600">
                        We use high-quality packing materials like bubble wrap, cartons, and foam sheets to protect your
                        valuable items from damage during relocation.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.load class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Safe Loading and Unloading</h3>
                    <p class="text-sm text-gray-600">
                        Our trained team ensures careful handling of furniture, electronics, and fragile goods for safe
                        loading and unloading at your doorstep.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.award class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Affordable Pricing</h3>
                    <p class="text-sm text-gray-600">
                        Jasol Packers and Movers offer budget-friendly and transparent pricing without any hidden charges
                        for local and long-distance shifting.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.date-check class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Timely Delivery</h3>
                    <p class="text-sm text-gray-600">
                        We ensure on-time pickup and delivery services to make your home or office relocation smooth and
                        hassle-free in Hinjewadi, Pune.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.home class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Local and Domestic Shifting</h3>
                    <p class="text-sm text-gray-600">
                        Whether you are moving locally within Hinjewadi or to another city, we provide reliable relocation
                        services tailored to your needs.
                    </p>
                </div>

                <div class="p-6 bg-white rounded-xl border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                        <x-icons.heart class="w-5 h-5 text-primary" />
                    </div>
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Customer Satisfaction</h3>
                    <p class="text-sm text-gray-600">
                        Our focus is to provide stress-free moving experiences with expert support from packing to final
                        delivery.
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
                <p class="section-subtitle">Jasol Packers and Movers Hinjewadi FAQs</p>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>What services are offered by Jasol Packers and Movers in Hinjewadi, Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Jasol Packers and Movers provide home shifting, office relocation, packing, loading, unloading,
                            transportation, unpacking, and storage services in Hinjewadi, Pune at affordable prices.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do Jasol Packers and Movers offer local shifting services in Hinjewadi?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, we offer reliable and safe local household and office shifting services within Hinjewadi
                            and nearby Pune locations with professional packing and timely delivery.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Are packing materials provided by Jasol Packers and Movers Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            We use high-quality packing materials such as bubble wrap, cartons, foam sheets, and stretch
                            film to ensure complete protection of your belongings during relocation.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>How much do packers and movers charge in Hinjewadi, Pune?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Charges depend on distance, number of items, packing requirements, and type of relocation. Jasol
                            Packers and Movers offer transparent and budget-friendly pricing.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Why choose Jasol Packers and Movers in Hinjewadi for relocation services?</span>
                        <x-icons.down class="faq-icon w-4 h-4 transition-transform duration-300" />
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            We ensure safe handling, on-time delivery, experienced staff, modern equipment, and
                            customer-focused relocation solutions for stress-free home and office shifting in Hinjewadi,
                            Pune.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
