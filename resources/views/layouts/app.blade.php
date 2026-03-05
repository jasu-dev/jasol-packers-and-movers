@php
    $branches = [
        'packers-and-movers-wakad' => 'Wakad',
        'packers-and-movers-baner' => 'Baner',
        'packers-and-movers-mahalunge' => 'Mahalunge',
    ];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jasol Packers and Movers Hinjewadi, Pune')</title>
    <!--Design and developed by Tejaldigital.in-->
    <meta name="robots" content="index, follow">
    @stack('metas')
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/banner.png') }}">
    <meta name="google-site-verification" content="yF9T_fngjBbkTcELQnfGkvSiOrIR8OM9PqjgJmhfwQ0" />
    <link rel="canonical" href="{{ url()->current() }}">
    <!--Design and developed by Tejaldigital.in-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    {{-- Vite resources --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('header-scripts')
    <script type="application/ld+json">
    @verbatim
    {
    "@context": "https://schema.org",
    "@graph": [
        {
        "@type": "MovingCompany",
        "@id": "https://jasolpackersandmovers.in/#organization",
        "name": "Jasol Packers and Movers",
        "url": "https://jasolpackersandmovers.in/",
        "logo": "https://jasolpackersandmovers.in/assets/images/logo.svg",
        "telephone": "+91-7300293594",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Shop Number 06, Survey Number 261/3/2,  Sakhare Dhawale Wasti Near flour mill Laxmi chowk, Hinjawadi Phase 2 Road",
            "addressLocality": "Hinjewadi Phase 1",
            "addressRegion": "Pune, Pimpri-Chinchwad, Maharashtra",
            "postalCode": "411057",
            "addressCountry": "IN"
        },
        "sameAs": [
            "https://www.facebook.com/JasolPackersandmovers",
            "https://www.instagram.com/jasol_packers_and_movers"
        ],
        "areaServed": [
            { "@type": "City", "name": "Hinjewadi" },
            { "@type": "City", "name": "Wakad" },
            { "@type": "City", "name": "Baner" },
            { "@type": "City", "name": "Mahalunge" }
        ]
        },
        {
        "@type": "WebSite",
        "@id": "https://jasolpackersandmovers.in/#website",
        "url": "https://jasolpackersandmovers.in/",
        "name": "Jasol Packers and Movers",
        "publisher": { "@id": "https://jasolpackersandmovers.in/#organization" }
        }
    ]
    }
    @endverbatim
    </script>
    @stack('schema')
</head>

<body>
    <header id="main-navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white">
        <div class="container mx-auto flex items-center justify-between py-3 px-4">
            <a href="/" class="flex items-center gap-2">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Jasol Packers and Movers Logo" class="w-25">
            </a>

            <nav class="hidden lg:flex items-center gap-6">
                <a href="/"
                    class="text-sm font-medium transition-colors {{ request()->is('/') ? 'text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    Home
                </a>

                <a href="/about"
                    class="text-sm font-medium transition-colors {{ request()->routeIs('about') ? 'text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    About
                </a>

                <a href="/gallery"
                    class="text-sm font-medium transition-colors {{ request()->routeIs('gallery') ? 'text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    Gallery
                </a>

                <a href="/testimonials"
                    class="text-sm font-medium transition-colors {{ request()->routeIs('testimonials') ? 'text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    Testimonials
                </a>

                <a href="/contact"
                    class="text-sm font-medium transition-colors {{ request()->routeIs('contact') ? 'text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    Contact
                </a>

                <div class="relative group">
                    <button
                        class="flex items-center gap-1 text-sm font-medium transition-colors {{ request()->is('branches*') ? 'text-primary' : 'text-foreground/80 group-hover:text-primary' }}">
                        Branches
                        <x-icons.down class="transition-transform group-hover:rotate-180" />
                    </button>
                    <div
                        class="absolute left-0 top-full pt-2 hidden group-hover:block min-w-[160px] animate-in fade-in slide-in-from-top-1 z-50">
                        <div class="bg-white border border-border rounded-lg shadow-xl py-2 flex flex-col">
                            @foreach ($branches as $slug => $name)
                                <a href="{{ $slug }}"
                                    class="px-4 py-2 text-sm transition-colors {{ request()->is($slug) ? 'bg-primary/5 text-primary font-semibold' : 'text-foreground/80 hover:bg-slate-50 hover:text-primary' }}">
                                    {{ $name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </nav>

            <div class="hidden lg:flex items-center gap-3">
                <a href="tel:+91{{ config('services.static.mobile') }}">
                    <x-ui.secondary-button>
                        <x-icons.call />
                        Call Now
                    </x-ui.secondary-button>
                </a>
                <a href="{{ route('contact') }}">
                    <x-ui.primary-button>Get Quote</x-ui.primary-button>
                </a>
            </div>

            <button id="mobile-menu-toggle" class="lg:hidden p-2 text-foreground">
                <x-icons.menu id="menu-icon" class="w-6 h-6" />
                <x-icons.close id="close-icon" class="hidden w-6 h-6" />
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-background border-t border-border">
            <nav class="flex flex-col p-4 gap-3">
                <a href="/"
                    class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->is('/') ? 'bg-primary/10 text-primary' : 'text-foreground hover:text-primary' }}">
                    Home
                </a>

                <a href="/about"
                    class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->is('about') ? 'bg-primary/10 text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    About
                </a>

                <div class="flex flex-col gap-2 mt-2">
                    <span class="px-3 py-1 text-[10px] font-bold text-muted-foreground uppercase tracking-widest">
                        Our Branches
                    </span>
                    <div class="pl-4 flex flex-col gap-1 border-l-2 border-slate-100 ml-3">
                        @foreach ($branches as $slug => $name)
                            <a href="{{ $slug }}"
                                class="px-3 py-2 text-sm rounded-md transition-colors {{ request()->is($slug) ? 'text-primary font-semibold' : 'text-foreground/80 hover:text-primary' }}">
                                {{ $name }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="/gallery"
                    class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->is('gallery') ? 'bg-primary/10 text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    Gallery
                </a>

                <a href="/testimonials"
                    class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->is('testimonials') ? 'bg-primary/10 text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    Testimonials
                </a>

                <a href="/contact"
                    class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->is('contact') ? 'bg-primary/10 text-primary' : 'text-foreground/80 hover:text-primary' }}">
                    Contact
                </a>
            </nav>
        </div>
    </header>
    <main class="pt-15">
        @yield('content')
    </main>
    <section class="py-12 bg-secondary overflow-hidden border-y border-white/5">
        <div class="flex whitespace-nowrap animate-marquee">
            @php
                $cities = [
                    'Mumbai',
                    'Delhi',
                    'Bangalore',
                    'Hyderabad',
                    'Ahmedabad',
                    'Chennai',
                    'Kolkata',
                    'Pune',
                    'Jaipur',
                    'Lucknow',
                ];
            @endphp
            @foreach (array_merge($cities, $cities) as $city)
                <div class="flex items-center mx-8">
                    <span
                        class="text-white/40 text-5xl font-black uppercase tracking-tighter">{{ $city }}</span>
                    <div class="w-2 h-2 rounded-full bg-primary mx-8"></div>
                </div>
            @endforeach
        </div>
    </section>
    <footer class="bg-secondary text-secondary-foreground">
        <div class="container mx-auto px-4 py-12">
            <div class="grid md:grid-cols-4 gap-8">

                <div>
                    <div class="inline-flex items-center gap-2 mb-4 bg-white px-8 py-4 rounded-lg w-auto">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="Jasol Packers and Movers Logo"
                            class="w-20">
                    </div>
                    <p class="text-secondary-foreground/60 text-base mb-4">
                        India's trusted packers and movers providing safe, reliable and affordable relocation
                        services since 2015.
                    </p>
                    <div class="flex gap-3">
                        <a href="https://www.facebook.com/JasolPackersandmovers"
                            class="w-9 h-9 rounded-full bg-secondary-foreground/10 flex items-center justify-center hover:bg-primary transition-colors group">
                            <x-icons.facebook class="w-4 h-4 group-hover:text-primary-foreground transition-colors" />
                        </a>
                        <a href="https://www.instagram.com/jasol_packers_and_movers"
                            class="w-9 h-9 rounded-full bg-secondary-foreground/10 flex items-center justify-center hover:bg-primary transition-colors group">
                            <x-icons.instagram class="w-4 h-4 group-hover:text-primary-foreground transition-colors" />
                        </a>
                        <a href="https://wa.me/91{{ config('services.static.mobile') }}"
                            class="w-9 h-9 rounded-full bg-secondary-foreground/10 flex items-center justify-center hover:bg-primary transition-colors group">
                            <x-icons.whatsapp class="w-4 h-4 group-hover:text-primary-foreground transition-colors" />
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4 text-secondary-foreground">Quick Links</h3>
                    <ul class="space-y-2 text-base text-secondary-foreground/60">
                        <li>
                            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="hover:text-primary transition-colors">About</a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}" class="hover:text-primary transition-colors">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('testimonials') }}"
                                class="hover:text-primary transition-colors">Testimonials</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Contact</a>
                        </li>
                        <li>
                            <a href="{{ route('policies') }}"
                                class="hover:text-primary transition-colors">Policies</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4 text-secondary-foreground">Our Branches</h3>
                    <ul class="space-y-2 text-base text-secondary-foreground/60">
                        @foreach ($branches as $slug => $name)
                            <li>
                                <a href="{{ $slug }}"
                                    class="hover:text-primary transition-colors">{{ $name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4 text-secondary-foreground">Contact Info</h3>
                    <ul class="space-y-4 text-base text-secondary-foreground/60">
                        <li class="flex gap-2 items-center align-center">
                            <x-icons.location class="w-5 h-5 flex-shrink-0" />
                            {{ config('services.static.address') }}
                        </li>
                        <li class="flex gap-2 items-center align-center">
                            <x-icons.call class="w-5 h-5 flex-shrink-0" />
                            <a href="tel:+91{{ config('services.static.mobile') }}"
                                class="hover:text-primary transition-colors">+91-{{ config('services.static.mobile') }}</a>
                        </li>
                        <li class="flex gap-2 items-center align-center">
                            <x-icons.email class="w-5 h-5 flex-shrink-0" />
                            <a href="mailto:{{ config('services.static.email') }}"
                                class="hover:text-primary transition-colors">{{ config('services.static.email') }}</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="border-t border-secondary-foreground/10 py-6">
            <p class="text-center text-base text-secondary-foreground/40">
                © 2026 Jasol Packers and Movers. Developed by <a href="https://tejaldigital.in/" target="_blank"
                    class="hover:text-primary transition-colors">Tejaldigital</a>
            </p>
        </div>
    </footer>
    <div class="fixed bottom-10 right-10 flex flex-col items-center z-50">

        <div
            class="relative mb-3 bg-white text-gray-800 text-xs sm:text-sm font-bold py-2 px-4 rounded-lg shadow-xl border border-gray-100 animate-bounce">
            Call now
            <div
                class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-2 h-2 bg-white rotate-45 border-r border-b border-gray-100">
            </div>
        </div>

        <a href="https://wa.me/91{{ config('services.static.mobile') }}?text=Hello!" target="_blank"
            class="relative flex items-center justify-center w-14 h-14 bg-[#25D366] rounded-full shadow-2xl hover:scale-110 transition-transform duration-300">

            <span class="absolute inline-flex h-full w-full rounded-full bg-[#25D366] opacity-75 animate-ping"></span>

            <svg class="relative w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.888-9.886 9.888m8.415-18.3A11.334 11.334 0 0012.02 0C5.399 0 .007 5.392.004 12.013a11.276 11.276 0 001.533 5.727L0 24l6.435-1.687a11.302 11.302 0 005.58 1.459h.006c6.621 0 12.015-5.392 12.018-12.014a11.281 11.281 0 00-3.359-8.498z" />
            </svg>
        </a>
    </div>
    <script>
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        toggleBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    </script>

    <script>
        document.getElementById('quoteForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = e.target;
            const responseDiv = document.getElementById('formResponse');
            const btnText = document.getElementById('btnText');
            const submitBtn = document.getElementById('submitBtn');

            // Reset UI
            responseDiv.classList.add('hidden');
            responseDiv.classList.remove('bg-green-100', 'text-green-700', 'bg-red-100', 'text-red-700');
            btnText.innerText = "Processing...";
            submitBtn.disabled = true;

            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    // Success
                    responseDiv.innerText = "Thank you! We will call you back within 30 minutes.";
                    responseDiv.classList.remove('hidden');
                    responseDiv.classList.add('bg-green-100', 'text-green-700');
                    form.reset();
                } else {
                    // Validation Errors from Laravel
                    let errorMsg = result.message || "Something went wrong.";
                    if (result.errors) {
                        errorMsg = Object.values(result.errors).flat().join('<br>');
                    }
                    throw new Error(errorMsg);
                }
            } catch (error) {
                // Error display
                responseDiv.innerHTML = error.message;
                responseDiv.classList.remove('hidden');
                responseDiv.classList.add('bg-red-100', 'text-red-700');
            } finally {
                btnText.innerText = "Get Free Quote →";
                submitBtn.disabled = false;
            }
        });
    </script>

    @stack('footer-scripts')
</body>

</html>
