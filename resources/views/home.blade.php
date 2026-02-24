@extends('layouts.app')

@section('title', 'Best Packers and Movers in Hinjewadi Pune | Jasol Packers and Movers')

@push('metas')
    <meta name="title" content="Best Packers and Movers in Hinjewadi Pune | Jasol Packers and Movers">
    <meta name="description"
        content="Professional packers and movers in Hinjewadi. We offer reliable home shifting, office relocation, and storage services. Get a free quote today!">
    <meta property="og:title" content="Best Packers and Movers in Hinjewadi Pune | Jasol Packers and Movers">
    <meta property="og:description"
        content="Professional relocation services in Hinjewadi. Safe, fast, and affordable shifting.">
    <meta property="og:type" content="website">
@endpush

@push('schema')
    <x-schemas.hinjewadi />
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
                    <span
                        class="inline-block bg-primary/20 text-primary-foreground text-sm font-medium px-4 py-1.5 rounded-full mb-6">
                        #1 Rated Packers & Movers
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-foreground leading-tight mb-6">
                        Jasol <span class="text-primary">Packers and Movers</span> Services
                        Hinjewadi, Pune
                    </h1>
                    <p class="text-lg text-secondary-foreground/80 mb-8 max-w-lg">
                        Top packers and movers in Hinjewadi, Pune, providing safe, affordable house shifting, office
                        relocation, and vehicle transport with expert packing.
                    </p>
                    <div class="flex flex-wrap gap-6 text-secondary-foreground/70 text-sm">
                        <span class="flex items-center gap-2">✓ Insured Moving</span>
                        <span class="flex items-center gap-2">✓ {{ config('services.static.cities') }}+ Cities</span>
                        <span class="flex items-center gap-2">✓ 24/7 Support</span>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
                    <div class="bg-card rounded-2xl shadow-2xl p-6 md:p-8">
                        <x-quote-form />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="section-padding bg-card">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div data-aos="fade-right">
                    <h2 class="section-title text-left mb-6">
                        Trusted <span class="text-primary">Packers and Movers in Hinjewadi, Pune</span>
                    </h2>

                    <div class="prose prose-slate max-w-none text-muted-foreground">
                        <p class="mb-4">
                            Relocating within the bustling IT hub of Pune? <b>Jasol Packers & Movers</b> is your go-to
                            partner
                            for seamless shifting. With over {{ config('services.static.years') }}+ years of hands-on
                            experience, we specialize in providing top-tier <b>packers and movers services in Hinjewadi</b>
                            for
                            tech professionals, families, and businesses alike.
                        </p>

                        <p class="mb-4">
                            We understand that Hinjewadi’s traffic and high-rise apartments require a strategic approach.
                            Whether you are moving near <b>Phase 1, 2, or 3</b>, our professional team ensures a
                            "scratch-free"
                            guarantee. From premium packaging materials to GPS-tracked transportation, we handle your
                            valuables as if they were our own.
                        </p>

                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center gap-2">
                                <x-icons.check class="w-5 h-5 text-primary" />
                                Local shifting within Hinjewadi & Wakad
                            </li>
                            <li class="flex items-center gap-2">
                                <x-icons.check class="w-5 h-5 text-primary" />
                                Domestic relocation from Pune to anywhere in India
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 md:gap-6" data-aos="fade-left">
                    <div class="text-center p-6 rounded-xl bg-background border border-border card-hover shadow-sm">
                        <x-icons.users class="w-10 h-10 text-primary mx-auto mb-3" />
                        <div class="text-2xl md:text-4xl font-bold text-primary">
                            {{ config('services.static.clients') }}+
                        </div>
                        <p class="text-xs md:text-sm font-medium text-muted-foreground mt-1 uppercase tracking-wider">Happy
                            Clients</p>
                    </div>

                    <div class="text-center p-6 rounded-xl bg-background border border-border card-hover shadow-sm">
                        <x-icons.truck class="w-10 h-10 text-primary mx-auto mb-3" />
                        <div class="text-2xl md:text-4xl font-bold text-primary">
                            {{ config('services.static.delivered') }}+
                        </div>
                        <p class="text-xs md:text-sm font-medium text-muted-foreground mt-1 uppercase tracking-wider">Moves
                            Done</p>
                    </div>

                    <div class="text-center p-6 rounded-xl bg-background border border-border card-hover shadow-sm">
                        <x-icons.location class="w-10 h-10 text-primary mx-auto mb-3" />
                        <div class="text-2xl md:text-4xl font-bold text-primary">
                            {{ config('services.static.cities') }}+
                        </div>
                        <p class="text-xs md:text-sm font-medium text-muted-foreground mt-1 uppercase tracking-wider">
                            Cities
                            Covered</p>
                    </div>

                    <div class="text-center p-6 rounded-xl bg-background border border-border card-hover shadow-sm">
                        <x-icons.award class="w-10 h-10 text-primary mx-auto mb-3" />
                        <div class="text-2xl md:text-4xl font-bold text-primary">
                            {{ config('services.static.years') }}+
                        </div>
                        <p class="text-xs md:text-sm font-medium text-muted-foreground mt-1 uppercase tracking-wider">Years
                            Exp.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <x-how-we-work-section />

    {{-- Landing page cta --}}
    <section class="py-20 bg-secondary relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute -top-20 -right-20 w-80 h-80 rounded-full bg-primary-foreground"></div>
            <div class="absolute -bottom-20 -left-20 w-60 h-60 rounded-full bg-primary-foreground"></div>
        </div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <div data-aos="fade-up">
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

    {{-- Why Choose Jasol Packers & Movers Section --}}
    <section class="section-padding bg-card overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">Why Choose <span class="text-primary">Jasol Packers & Movers</span></h2>
                <p class="section-subtitle max-w-2xl mx-auto">
                    We are the preferred choice for <b>reliable shifting in Hinjewadi, Pune</b>, offering a blend of
                    technology
                    and care to ensure your peace of mind.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="flex flex-col h-full gap-5 p-8 rounded-2xl bg-background border border-border card-hover shadow-sm">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.users class="w-7 h-7 text-primary" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Expert Shifting Team</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Our team consists of highly trained <b>professional packers in Pune</b> who specialize in
                                handling delicate electronics, heavy furniture, and IT equipment common in Hinjewadi
                                households.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="flex flex-col h-full gap-5 p-8 rounded-2xl bg-background border border-border card-hover shadow-sm">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.award class="w-7 h-7 text-primary" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Transparent Pricing</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Get the most <b>competitive packers and movers rates in Hinjewadi</b>. We provide upfront
                                quotes with no hidden charges, ensuring affordable home shifting without compromising on
                                quality.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="flex flex-col h-full gap-5 p-8 rounded-2xl bg-background border border-border card-hover shadow-sm">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.call class="w-7 h-7 text-primary" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">24/7 Dedicated Support</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Need an update at midnight? Our customer care is available round-the-clock to manage your
                                <b>relocation queries in Pune</b>, ensuring you are never left in the dark during your move.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="flex flex-col h-full gap-5 p-8 rounded-2xl bg-background border border-border card-hover shadow-sm">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.secure class="w-7 h-7 text-primary" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Zero-Damage Guarantee</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                We use premium multi-layer bubble wrap, corrugated sheets, and stretch film. Our <b>safe
                                    packing techniques</b> ensure zero scratches on your valuables during Hinjewadi's
                                transit.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="flex flex-col h-full gap-5 p-8 rounded-2xl bg-background border border-border card-hover shadow-sm">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.truck class="w-7 h-7 text-primary" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Live GPS Tracking</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Stay connected with your belongings. We provide <b>real-time GPS tracking</b> for all
                                long-distance and local Pune moves, so you know exactly when your truck will arrive.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="flex flex-col h-full gap-5 p-8 rounded-2xl bg-background border border-border card-hover shadow-sm">
                        <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <x-icons.delivery class="w-7 h-7 text-primary" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">On-Time Completion</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                We value your time. Our logistics team expertly navigates <b>Pune traffic</b> to ensure your
                                household or office goods are delivered and unpacked exactly as per the committed schedule.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section id="services" class="section-padding overflow-hidden bg-background">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">Premium <span class="text-primary">Relocation Services</span></h2>
                <p class="section-subtitle max-w-3xl mx-auto">
                    As the leading <b>packers and movers in Hinjewadi, Pune</b>, we offer specialized moving solutions
                    tailored
                    to the unique needs of the IT community and residential hubs.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-10">

                <div data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="group p-8 md:p-10 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary transition-all duration-300">
                            <x-icons.home
                                class="w-8 h-8 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Household Shifting in Hinjewadi</h3>
                        <p class="text-muted-foreground leading-relaxed mb-4">
                            Moving your home near Hinjewadi Phase 1, 2, or 3? Our residential relocation service is
                            designed for the modern lifestyle. We handle everything from premium furniture packing to
                            delicate kitchenware handling.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="group p-8 md:p-10 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary transition-all duration-300">
                            <x-icons.office
                                class="w-8 h-8 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Office Relocation in Hinjewadi</h3>
                        <p class="text-muted-foreground leading-relaxed mb-4">
                            Minimize downtime for your business. We are experts in <b>office relocation in Hinjewadi</b>,
                            specializing in the safe transit of server racks, workstations, and sensitive IT
                            infrastructure with systematic labeling.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="group p-8 md:p-10 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary transition-all duration-300">
                            <x-icons.car
                                class="w-8 h-8 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Vehicle Transportation Services</h3>
                        <p class="text-muted-foreground leading-relaxed mb-4">
                            Relocating outside of Pune? Our <b>car and bike transportation services in Hinjewadi</b> utilize
                            specialized enclosed trailers to protect your vehicle from road debris and weather, ensuring
                            doorstep delivery across India.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="group p-8 md:p-10 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary transition-all duration-300">
                            <x-icons.load
                                class="w-8 h-8 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Loading and Unloading Services</h3>
                        <p class="text-muted-foreground leading-relaxed mb-4">
                            Avoid the risk of injury or damage. Our expert labor team provides <b>professional loading and
                                unloading in Hinjewadi</b>, using modern equipment like trolleys and pulleys to navigate
                            narrow
                            corridors and elevators safely.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="group p-8 md:p-10 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary transition-all duration-300">
                            <x-icons.pet
                                class="w-8 h-8 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Safe Pet Relocation</h3>
                        <p class="text-muted-foreground leading-relaxed mb-4">
                            We know pets are family. Our <b>pet moving service in Hinjewadi</b> ensures a stress-free
                            journey
                            for your furry friends with climate-controlled transport and regular updates, making us the most
                            trusted movers for pet owners.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="group p-8 md:p-10 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary transition-all duration-300">
                            <x-icons.plan
                                class="w-8 h-8 text-primary group-hover:text-primary-foreground transition-colors duration-300" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Global Shifting Solutions</h3>
                        <p class="text-muted-foreground leading-relaxed mb-4">
                            Moving abroad from Pune? Our <b>international packers and movers Hinjewadi</b> team manages
                            sea/air
                            freight, customs documentation, and global door-to-door logistics so you can focus on your new
                            journey.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-cta-section />

    <section class="section-padding bg-background overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title">How to Choose the Best <span class="text-primary">Movers in Hinjewadi</span>
                </h2>
                <p class="section-subtitle max-w-2xl mx-auto">
                    Smart tips for a stress-free relocation in Pune’s busiest IT hub.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="p-8 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <x-icons.office class="w-7 h-7 text-primary" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Verify Local Office Presence</h3>
                        <div class="text-base text-muted-foreground leading-relaxed space-y-4">
                            <p>
                                When searching for <b>reliable packers and movers in Hinjewadi</b>, always
                                prioritize companies with a physical office in Pune. Many "fly-by-night" operators list
                                online
                                but lack a local base.
                            </p>
                            <p>
                                Visit their facility to inspect their fleet of vehicles and packing
                                materials. A physical verification protects you from scams and ensures you are dealing with
                                <b>licensed shifting experts in Hinjewadi</b>.
                            </p>
                            <p>
                                Check their GST registration and IBA approval status, as these credentials distinguish
                                professional moving companies from local transporters.
                                Physical presence also makes it easier to resolve disputes if any transit issues occur
                                during
                                your relocation.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="p-8 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <x-icons.notes class="w-7 h-7 text-primary" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Demand a Virtual or In-Home Survey</h3>
                        <div class="text-base text-muted-foreground leading-relaxed space-y-4">
                            <p>
                                Never settle for a quote over the phone. To get the <b>most accurate packers and movers
                                    rates in Hinjewadi</b>, request an in-home survey. Professional movers need to assess
                                the volume of goods,
                                the number of fragile IT gadgets, and the accessibility of your apartment.
                            </p>
                            <p>
                                In Hinjewadi’s
                                high-rise societies, factors like lift availability and walking distance from the parking
                                slot
                                to the lobby can affect the <b>total cost of shifting in Pune</b>. A detailed pre-move
                                survey
                                prevents "hidden charges" from being added on moving day and allows the team to bring the
                                right
                                amount of bubble wrap and corrugated boxes.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="p-8 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <x-icons.secure class="w-7 h-7 text-primary" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Prioritize Transit Insurance</h3>
                        <div class="text-base text-muted-foreground leading-relaxed space-y-4">
                            <p>
                                Even with the <b>best household shifting services in Hinjewadi</b>, road conditions during
                                Pune
                                monsoons can be unpredictable. Ensure your chosen mover offers comprehensive
                                <b>goods-in-transit insurance</b>. This covers your valuables against accidental damage,
                                fire, or theft during the journey.
                            </p>
                            <p>
                                Many cheap movers skip this, but a professional service will provide an insurance
                                certificate with a clear declared value. For expensive furniture and electronics common in
                                <b>Hinjewadi IT professional homes</b>, this 3% extra cost provides 100% peace of mind.
                            </p>
                            <p>
                                Always ask for the "all-risk" insurance package to ensure your high-end appliances are fully
                                protected
                                during the move.
                            </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="p-8 rounded-2xl bg-card border border-border card-hover cursor-pointer h-full">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                            <x-icons.heart class="w-7 h-7 text-primary" />
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Read Hinjewadi-Specific Reviews</h3>
                        <div class="text-base text-muted-foreground leading-relaxed space-y-4">
                            <p>
                                Don’t just look at the overall star rating. Filter reviews for mentions of <b>"Hinjewadi
                                    shifting"</b> or <b>"Pune local move"</b>. This helps you understand if the crew is
                                familiar with
                                local restrictions in societies like Blue Ridge, Megapolis, or Life Republic.
                            </p>
                            <p>
                                Expert <b>movers and packers in Hinjewadi Pune</b> know the entry timings for heavy vehicles
                                and the specific elevator policies of these major townships.
                            </p>
                            <p>
                                Reading recent customer feedback on Google Business Profile or Trustpilot about their
                                punctuality in Pune’s traffic will give you a realistic expectation of their service
                                quality. Consistent positive reviews for "damage-free delivery" are the best indicator of a
                                reliable partner.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- why choose us section --}}
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

    {{-- testimonials section --}}
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

    {{-- faq section --}}
    <section class="section-padding overflow-hidden bg-background">
        <div class="container mx-auto max-w-4xl px-4">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="section-title">Hinjewadi Relocation <span class="text-primary">FAQs</span></h2>
                <p class="section-subtitle">Everything you need to know about hiring packers and movers in Hinjewadi, Pune.
                </p>
            </div>

            <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-item border border-border rounded-xl px-6 bg-card card-hover">
                    <button
                        class="faq-trigger w-full py-5 flex items-center justify-between font-bold text-left focus:outline-none text-lg">
                        <span>How much do packers and movers cost in Pune?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-5 text-muted-foreground leading-relaxed">
                            The cost of <b>packers and movers in Pune</b> typically ranges from ₹3,000 to ₹8,000 for a 1BHK
                            local shift, and ₹10,000 to ₹25,000 for larger 3BHK homes. Prices vary based on the volume of
                            goods, quality of packing materials, and the distance between locations like Hinjewadi to Wakad
                            or Baner.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card card-hover">
                    <button
                        class="faq-trigger w-full py-5 flex items-center justify-between font-bold text-left focus:outline-none text-lg">
                        <span>What is the minimum charge for packers and movers in Hinjewadi?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-5 text-muted-foreground leading-relaxed">
                            At Jasol Packers, our minimum charge for small-scale shifting or few-item relocation in
                            <b>Hinjewadi</b> starts as low as ₹2,000. This includes basic loading, transport, and unloading
                            by
                            our professional team.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card card-hover">
                    <button
                        class="faq-trigger w-full py-5 flex items-center justify-between font-bold text-left focus:outline-none text-lg">
                        <span>Why are companies leaving Hinjewadi, and does it affect moving services?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-5 text-muted-foreground leading-relaxed">
                            Some companies have shifted operations due to infrastructure and traffic concerns, but Hinjewadi
                            remains a massive IT hub. This movement has actually increased the demand for <b>commercial
                                office relocation</b> and employee home shifting services in the Pune West region.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card card-hover">
                    <button
                        class="faq-trigger w-full py-5 flex items-center justify-between font-bold text-left focus:outline-none text-lg">
                        <span>Which phase is best in Hinjewadi for residential living?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-5 text-muted-foreground leading-relaxed">
                            <b>Hinjewadi Phase 1</b> is highly preferred due to its proximity to the highway and better
                            connectivity to Wakad. However, Phase 2 and 3 offer more premium, spacious gated societies. We
                            provide specialized shifting services across all three phases, including high-rise apartment
                            moving.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card card-hover">
                    <button
                        class="faq-trigger w-full py-5 flex items-center justify-between font-bold text-left focus:outline-none text-lg">
                        <span>How long does a local move within Hinjewadi take?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-5 text-muted-foreground leading-relaxed">
                            Most local shifts within <b>Hinjewadi, Pune</b> are completed within 4 to 8 hours. Our team
                            ensures
                            that your furniture is dismantled, packed, moved, and reassembled on the same day to minimize
                            disruption to your IT work schedule.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card card-hover">
                    <button
                        class="faq-trigger w-full py-5 flex items-center justify-between font-bold text-left focus:outline-none text-lg">
                        <span>Are packers and movers available on weekends in Pune?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-5 text-muted-relaxed">
                            Yes, weekends are our busiest times. We recommend booking your <b>Hinjewadi shifting service</b>
                            at
                            least 3-4 days in advance for Saturday or Sunday moves to ensure slot availability.
                        </p>
                    </div>
                </div>

                <div class="faq-item border border-border rounded-xl px-6 bg-card card-hover">
                    <button
                        class="faq-trigger w-full py-5 flex items-center justify-between font-bold text-left focus:outline-none text-lg">
                        <span>How do you handle fragile IT equipment during shifting?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="faq-icon transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="pb-5 text-muted-foreground leading-relaxed">
                            As specialist <b>packers and movers in Hinjewadi, Pune</b>, we use anti-static bubble wrap and
                            custom-sized crates for monitors, servers, and CPUs. Our staff is trained in the delicate
                            handling of tech gear to ensure zero data or hardware damage.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-map-section />
@endsection
