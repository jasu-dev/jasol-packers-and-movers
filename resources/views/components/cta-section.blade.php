<section class="py-10 md:py-20 bg-white border-y border-slate-200 px-4 overflow-hidden">
    <div class="container mx-auto">
        <div class="bg-primary rounded-2xl relative overflow-hidden shadow-2xl shadow-primary/30">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <div class="absolute -top-20 -right-20 w-96 h-96 rounded-full bg-white blur-3xl"></div>
                <div class="absolute -bottom-20 -left-20 w-80 h-80 rounded-full bg-slate-900 blur-3xl"></div>
            </div>

            <div class="grid lg:grid-cols-2 items-center relative z-10">
                <div class="p-8 md:p-16 lg:p-20 text-center lg:text-left" data-aos="fade-right">
                    <div
                        class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 border border-white/20">
                        <x-icons.secure class="w-5 h-5 text-white" />
                        <span class="text-white text-xs font-bold uppercase tracking-widest">
                            IBA Approved & Fully Insured
                        </span>
                    </div>

                    <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-[1.1]">
                        Ready to Start Your <br>Next Chapter?
                    </h2>

                    <p class="text-white/80 mb-10 text-lg max-w-xl mx-auto lg:mx-0">
                        Don't settle for "average" movers. Experience a 5-star relocation with our GPS-tracked fleet and
                        multi-layer safety packing.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('contact') }}">
                            <x-ui.secondary-button>Get Free Quote Now</x-ui.secondary-button>
                        </a>
                        <a href="tel:+919876543210">
                            <x-ui.primary-button class="border-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                                Call Support
                            </x-ui.primary-button>
                        </a>
                    </div>
                </div>

                <div class="relative h-64 lg:h-full min-h-[400px] hidden md:block" data-aos="fade-left">
                    <img src="{{ asset('assets/images/truck.jpeg') }}" alt="Professional packers at work"
                        class="absolute inset-0 w-full h-full object-cover grayscale-[0.2] hover:grayscale-0 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary via-transparent to-transparent"></div>

                    <div class="absolute bottom-10 right-10 bg-white p-6 rounded-2xl shadow-2xl">
                        <p class="text-primary font-black text-3xl leading-none">100%</p>
                        <p class="text-slate-500 text-[10px] font-bold uppercase tracking-tighter">On-Time Delivery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
