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
                    <span
                        class="inline-block bg-primary/20 text-primary-foreground text-sm font-medium px-4 py-1.5 rounded-full mb-6">
                        #1 Rated Packers & Movers
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-foreground leading-tight mb-6">
                        Safe, Fast & Reliable <span class="text-primary">Packers and Movers</span> Services
                        Across India
                    </h1>
                    <p class="text-lg text-secondary-foreground/80 mb-8 max-w-lg">
                        Professional Relocation Services for Homes, Offices, Vehicles & Pets
                    </p>
                    <div class="flex flex-wrap gap-6 text-secondary-foreground/70 text-sm">
                        <span class="flex items-center gap-2">✓ Insured Moving</span>
                        <span class="flex items-center gap-2">✓ {{ config('services.static.cities') }}+ Cities</span>
                        <span class="flex items-center gap-2">✓ 24/7 Support</span>
                    </div>
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

    <!-- About Section -->
    <section id="about" class="section-padding bg-card">
        <div class="container mx-auto">
            <div data-aos="fade-up">
                <h2 class="section-title">
                    About <span class="text-primary">Jasol Packers &amp; Movers</span>
                </h2>
                <p class="section-subtitle">
                    With over {{ config('services.static.years') }}+ years of experience, we provide safe, reliable and
                    affordable packing and moving services across India. Our professional team ensures your
                    belongings reach their destination without a scratch.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center p-6 rounded-xl bg-background border border-border card-hover">
                        <x-icons.users class="w-10 h-10 text-primary mx-auto mb-3" />
                        <div class="text-3xl md:text-4xl font-bold text-primary">{{ config('services.static.clients') }}+
                        </div>
                        <p class="text-sm text-muted-foreground mt-1">Happy Clients</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center p-6 rounded-xl bg-background border border-border card-hover">
                        <x-icons.truck class="w-10 h-10 text-primary mx-auto mb-3" />
                        <div class="text-3xl md:text-4xl font-bold text-primary">{{ config('services.static.delivered') }}+
                        </div>
                        <p class="text-sm text-muted-foreground mt-1">Moves Completed</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center p-6 rounded-xl bg-background border border-border card-hover">
                        <x-icons.location class="w-10 h-10 text-primary mx-auto mb-3" />
                        <div class="text-3xl md:text-4xl font-bold text-primary">{{ config('services.static.cities') }}+
                        </div>
                        <p class="text-sm text-muted-foreground mt-1">Cities Covered</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="text-center p-6 rounded-xl bg-background border border-border card-hover">
                        <x-icons.award class="w-10 h-10 text-primary mx-auto mb-3" />
                        <div class="text-3xl md:text-4xl font-bold text-primary">{{ config('services.static.years') }}+
                        </div>
                        <p class="text-sm text-muted-foreground mt-1">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <x-how-we-work-section />

    <!-- why choose us -->
    <section class="section-padding bg-card overflow-hidden">
        <div class="container mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Why Choose Us</h2>
                <p class="section-subtitle">We go above and beyond to make your relocation experience smooth
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div data-aos="fade-up" data-aos-delay="0">
                    <div class="flex gap-4 p-6 rounded-xl bg-background border border-border card-hover">
                        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.users class="w-5 h-5 text-primary" />
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Experienced Staff</h3>
                            <p class="text-sm text-muted-foreground">Trained professionals handling your valuables
                                with utmost care</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="flex gap-4 p-6 rounded-xl bg-background border border-border card-hover">
                        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.award class="w-5 h-5 text-primary" />
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Affordable Pricing</h3>
                            <p class="text-sm text-muted-foreground">Competitive rates without compromising on
                                service quality</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="flex gap-4 p-6 rounded-xl bg-background border border-border card-hover">
                        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.call class="w-5 h-5 text-primary" />
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">24/7 Support</h3>
                            <p class="text-sm text-muted-foreground">Round the clock customer service for all your
                                queries</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="flex gap-4 p-6 rounded-xl bg-background border border-border card-hover">
                        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.secure class="w-5 h-5 text-primary" />
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Damage Free Moving</h3>
                            <p class="text-sm text-muted-foreground">Multi-layer packing ensures zero damage during
                                transit</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="flex gap-4 p-6 rounded-xl bg-background border border-border card-hover">
                        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.truck class="w-5 h-5 text-primary" />
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">GPS Tracking</h3>
                            <p class="text-sm text-muted-foreground">Track your shipment in real-time from pickup
                                to delivery</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="500">
                    <div class="flex gap-4 p-6 rounded-xl bg-background border border-border card-hover">
                        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.delivery class="w-5 h-5 text-primary" />
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Timely Delivery</h3>
                            <p class="text-sm text-muted-foreground">We respect your time and deliver on the
                                promised date</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="section-padding overflow-hidden">
        <div class="container mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Our Services</h2>
                <p class="section-subtitle">Comprehensive relocation solutions tailored to your needs</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div data-aos="fade-up" data-aos-delay="0">
                    <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                            <x-icons.home
                                class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="font-semibold text-lg mb-2">House Relocation</h3>
                        <p class="text-sm text-muted-foreground mb-4">Complete household packing, loading,
                            transportation and unpacking services with care.</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                            <x-icons.office
                                class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Office Relocation</h3>
                        <p class="text-sm text-muted-foreground mb-4">Minimize downtime with our efficient
                            corporate and office relocation solutions.</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                            <x-icons.car
                                class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Car Transportation</h3>
                        <p class="text-sm text-muted-foreground mb-4">Safe and insured vehicle transport using
                            enclosed carriers across India.</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                            <x-icons.load
                                class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Loading & Unloading</h3>
                        <p class="text-sm text-muted-foreground mb-4">Professional labor services for heavy
                            lifting, loading and unloading at any location.</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                            <x-icons.pet
                                class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="font-semibold text-lg mb-2">Pet Relocation</h3>
                        <p class="text-sm text-muted-foreground mb-4">Stress-free pet transport with proper
                            ventilation, food and veterinary care.</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="500">
                    <div class="group p-6 rounded-xl bg-card border border-border card-hover cursor-pointer">
                        <div
                            class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary transition-colors duration-300">
                            <x-icons.plan
                                class="w-5 h-5 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="font-semibold text-lg mb-2">International Relocation</h3>
                        <p class="text-sm text-muted-foreground mb-4">Seamless overseas moving with customs
                            clearance and door-to-door delivery.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cta-section />

    <section class="py-24 bg-secondary text-white overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-4xl font-bold mb-6">We Don't Just Pack, <br><span class="text-primary">We
                            Protect.</span></h2>
                    <p class="text-white/80 mb-8 leading-relaxed text-lg">
                        We use 5-layer corrugated sheets, high-density bubble wraps, and customized crates for fragile items
                        like glass and electronics.
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Fabric Sheets for Scratch-Free Furniture</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Heavy-duty Corrugated Boxes</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Customized Wooden Crating for Antiques</span>
                        </li>
                    </ul>
                </div>
                <div class="relative" data-aos="fade-left">
                    <img src="{{ asset('assets/images/truck.jpeg') }}"
                        class="rounded-3xl shadow-2xl grayscale hover:grayscale-0 transition-all duration-700"
                        alt="Packing material">
                    <div class="absolute -bottom-10 -left-10 bg-primary p-8 rounded-2xl hidden md:block">
                        <p class="text-4xl font-black italic">Zero</p>
                        <p class="text-sm font-bold uppercase tracking-widest">Damage Record</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white overflow-hidden">
        <div class="container mx-auto">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="max-w-xl">
                    <h2 class="text-4xl font-bold text-slate-900 tracking-tight mb-4">
                        What Our Customers Say
                    </h2>
                    <p class="text-slate-600 text-lg">
                        Real reviews from people who moved with us.
                    </p>
                </div>

                <div class="flex gap-3">
                    <x-ui.secondary-button class="swiper-prev !rounded-full !w-12 !h-12">
                        <x-icons.left class="w-5 h-5" />
                    </x-ui.secondary-button>
                    <x-ui.secondary-button class="swiper-next !rounded-full !w-12 !h-12">
                        <x-icons.right class="w-5 h-5" />
                    </x-ui.secondary-button>
                </div>
            </div>

            <div class="swiper testimonialSwiper !overflow-visible">
                <div class="swiper-wrapper">

                    <div class="swiper-slide !h-auto">
                        <div
                            class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                            <div class="flex gap-1 mb-6 text-orange-400">
                                @for ($i = 0; $i < 5; $i++)
                                    <x-icons.star class="w-5 h-5 fill-current" />
                                @endfor
                            </div>

                            <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                                "Excellent service! The team was punctual, professional and handled our furniture with great
                                care. Highly recommended for anyone planning a long-distance move."
                            </p>

                            <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                                <div
                                    class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                    RK</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 leading-none mb-1">Rajesh Kumar</h4>
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Mumbai →
                                        Delhi</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide !h-auto">
                        <div
                            class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                            <div class="flex gap-1 mb-6 text-orange-400">
                                @for ($i = 0; $i < 5; $i++)
                                    <x-icons.star class="w-5 h-5 fill-current" />
                                @endfor
                            </div>

                            <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                                "Professional staff and very transparent pricing. They made a stressful move very easy for
                                my family."
                            </p>

                            <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                                <div
                                    class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                    AV</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 leading-none mb-1">Amit Verma</h4>
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Pune →
                                        Delhi</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide !h-auto">
                        <div
                            class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                            <div class="flex gap-1 mb-6 text-orange-400">
                                @for ($i = 0; $i < 5; $i++)
                                    <x-icons.star class="w-5 h-5 fill-current" />
                                @endfor
                            </div>

                            <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                                "Very smooth experience. The packing quality was outstanding and everything arrived in
                                perfect condition."
                            </p>

                            <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                                <div
                                    class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                    PS</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 leading-none mb-1">Priya Sharma</h4>
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Bangalore →
                                        Hyderabad</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide !h-auto">
                        <div
                            class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                            <div class="flex gap-1 mb-6 text-orange-400">
                                @for ($i = 0; $i < 5; $i++)
                                    <x-icons.star class="w-5 h-5 fill-current" />
                                @endfor
                            </div>

                            <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                                "Professional staff and very transparent pricing. They made a stressful move very easy for
                                my family."
                            </p>

                            <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                                <div
                                    class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                    AV</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 leading-none mb-1">Amit Verma</h4>
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Pune →
                                        Delhi</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination !-bottom-12"></div>
            </div>
        </div>
    </section>

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
                        <span>How much time does relocation take?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Depending on the distance and volume, local moves take 1-2 days while intercity
                            moves take 3-7 days. We provide an estimated timeline during the survey.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do you provide insurance?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, we offer transit insurance covering damage or loss during transportation. Our
                            insurance plans are affordable and give you complete peace of mind.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Is packing included in the service?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes! Our standard service includes professional packing with quality materials like
                            bubble wrap, corrugated sheets, and sturdy cartons.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Do you move vehicles?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Absolutely. We provide enclosed car carrier services for safe transportation of
                            two-wheelers and four-wheelers across India.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card">
                    <button
                        class="faq-trigger w-full py-4 flex items-center justify-between font-medium text-left focus:outline-none">
                        <span>Can you relocate pets?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-4 text-muted-foreground text-sm">
                            Yes, we have specialized pet relocation services with proper ventilation, food, and
                            veterinary support during transit.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-map-section />
@endsection
