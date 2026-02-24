@extends('layouts.app')

@section('content')
    <section class="relative bg-secondary py-20 px-4 overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <nav class="flex justify-center gap-2 text-primary text-sm font-medium mb-4 uppercase tracking-widest">
                <a href="/">Home</a> <span>/</span> <span class="text-white/60">Testimonials</span>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                Trusted by <span class="text-primary">Thousands</span>
            </h1>
            <p class="text-white/70 max-w-2xl mx-auto text-lg leading-relaxed">
                Read real stories from families and businesses we've helped relocate across India.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Amazing relocation experience! The packing team was very skilled and ensured that even fragile
                            items were safely transported without any damage."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                SM</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Sandeep Mehta</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Jaipur →
                                    Noida</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="50">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "I was really impressed by their professionalism and commitment to timelines. Everything was
                            delivered exactly as promised."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                NG</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Neha Gupta</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Chandigarh →
                                    Mumbai</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Smooth and hassle-free shifting. The staff was polite, cooperative and handled our belongings
                            with great care."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                RS</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Rohit Sharma</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Delhi →
                                    Pune</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="150">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Excellent coordination from start to finish. The delivery was on time and nothing was damaged
                            during transit."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                AK</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Ankit Khanna</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Lucknow →
                                    Gurgaon</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "They packed everything very carefully and handled all furniture professionally. Highly
                            satisfied with their service."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                PS</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Pooja Singh</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Indore →
                                    Delhi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="250">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Very quick and efficient team. They made the entire moving process simple and stress-free for
                            us."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                VK</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Vikas Kumar</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Patna →
                                    Bangalore</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Fantastic service and very supportive staff. They handled our belongings like their own."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                MJ</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Manish Jain</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Surat →
                                    Delhi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="350">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "The move was completed smoothly without any delays. Great job by the entire team!"
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                RA</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Ritu Arora</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Delhi →
                                    Chennai</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Highly reliable movers. Everything reached the destination safely and on time."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                SP</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Sanjay Patel</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Ahmedabad →
                                    Jaipur</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="450">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Very professional packing and moving services. I would definitely recommend them."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                KD</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Kiran Desai</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Nagpur →
                                    Hyderabad</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Impressive teamwork and excellent customer support throughout the relocation."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                TJ</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Tarun Joshi</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Bhopal →
                                    Delhi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="550">
                    <div
                        class="flex flex-col h-full p-8 bg-card rounded-2xl border border-border card-hover cursor-pointer">
                        <div class="flex gap-1 mb-6 text-orange-400">
                            @for ($i = 0; $i < 5; $i++)
                                <x-icons.star class="w-5 h-5 fill-current" />
                            @endfor
                        </div>

                        <p class="text-slate-700 text-lg leading-relaxed mb-8 flex-grow italic">
                            "Best moving experience so far. The staff was friendly and extremely helpful."
                        </p>

                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center font-bold">
                                AS</div>
                            <div>
                                <h4 class="font-bold text-slate-900 leading-none mb-1">Anjali Saxena</h4>
                                <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">Kanpur →
                                    Gurgaon</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-primary overflow-hidden relative">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Want a seamless moving experience?</h2>
            <a href="/contact"
                class="inline-flex items-center justify-center px-8 py-3.5 bg-white text-primary font-bold rounded-lg hover:bg-slate-100 transition-colors shadow-lg">
                Join our Happy Customers
            </a>
        </div>
        <div class="absolute -top-24 -right-24 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
    </section>
@endsection
