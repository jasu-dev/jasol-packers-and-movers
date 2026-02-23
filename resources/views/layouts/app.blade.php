@php
    $branches = [
        'packers-and-movers-hinjewadi' => 'Hinjewadi',
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
    <title>Jasol Packers and Movers | Safe, Fast &amp; Reliable Relocation Services Across India</title>
    <meta name="robots" content="noindex">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    {{-- Vite resources --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('header-scripts')
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
                            <a href="/branches/{{ $slug }}"
                                class="px-3 py-2 text-sm rounded-md transition-colors {{ request()->is('branches/' . $slug) ? 'text-primary font-semibold' : 'text-foreground/80 hover:text-primary' }}">
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
                        services since 2010.
                    </p>
                    <div class="flex gap-3">
                        <a href="#"
                            class="w-9 h-9 rounded-full bg-secondary-foreground/10 flex items-center justify-center hover:bg-primary transition-colors group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="group-hover:text-primary-foreground transition-colors">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-9 h-9 rounded-full bg-secondary-foreground/10 flex items-center justify-center hover:bg-primary transition-colors group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="group-hover:text-primary-foreground transition-colors">
                                <path
                                    d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-9 h-9 rounded-full bg-secondary-foreground/10 flex items-center justify-center hover:bg-primary transition-colors group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="group-hover:text-primary-foreground transition-colors">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-9 h-9 rounded-full bg-secondary-foreground/10 flex items-center justify-center hover:bg-primary transition-colors group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="group-hover:text-primary-foreground transition-colors">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                <rect width="4" height="12" x="2" y="9" />
                                <circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4 text-secondary-foreground">Quick Links</h3>
                    <ul class="space-y-2 text-base text-secondary-foreground/60">
                        <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-primary transition-colors">About</a>
                        </li>
                        <li><a href="{{ route('gallery') }}" class="hover:text-primary transition-colors">Gallery</a>
                        </li>
                        <li><a href="{{ route('testimonials') }}"
                                class="hover:text-primary transition-colors">Testimonials</a>
                        </li>
                        <li><a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Contact</a>
                        </li>
                        <li><a href="{{ route('policies') }}"
                                class="hover:text-primary transition-colors">Policies</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4 text-secondary-foreground">Our Branches</h3>
                    <ul class="space-y-2 text-base text-secondary-foreground/60">
                        @foreach ($branches as $slug => $name)
                            <li><a href="{{ $slug }}"
                                    class="hover:text-primary transition-colors">{{ $name }}</a></li>
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

    @stack('footer-scripts')
</body>

</html>
