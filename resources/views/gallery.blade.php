@extends('layouts.app')

@section('content')
    <section class="relative bg-secondary py-20 px-4 overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <nav class="flex justify-center gap-2 text-primary text-sm font-medium mb-4 uppercase tracking-widest">
                <a href="/">Home</a> <span>/</span> <span class="text-white/60">Gallery</span>
            </nav>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                Our Gallery
            </h1>
            <p class="text-white/70 max-w-2xl mx-auto text-lg leading-relaxed">
                A visual journey of our professional moving and packing
                services across India.
            </p>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $images = [
                        [
                            'src' => 'https://images.unsplash.com/photo-1600518464441-9154a4dea21b?w=600',
                            'alt' => 'Professional packing service',
                        ],
                        [
                            'src' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=600',
                            'alt' => 'Moving truck loaded',
                        ],
                        [
                            'src' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?w=600',
                            'alt' => 'Boxes ready for moving',
                        ],
                        [
                            'src' => 'https://images.unsplash.com/photo-1600585152220-90363fe7e115?w=600',
                            'alt' => 'New home setup',
                        ],
                        [
                            'src' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600',
                            'alt' => 'Office relocation',
                        ],
                        [
                            'src' => 'https://images.unsplash.com/photo-1600573472591-ee6981cf81f0?w=600',
                            'alt' => 'Furniture wrapped and ready',
                        ],
                        [
                            'src' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600',
                            'alt' => 'Delivered safely',
                        ],
                        [
                            'src' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600',
                            'alt' => 'Team at work',
                        ],
                    ];
                @endphp

                @foreach ($images as $index => $img)
                    <div data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                        <div class="gallery-item group relative overflow-hidden rounded-2xl cursor-zoom-in shadow-md hover:shadow-2xl transition-all duration-500"
                            data-full="{{ str_replace('w=600', 'w=1200', $img['src']) }}" data-alt="{{ $img['alt'] }}">
                            <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}"
                                class="w-full h-72 object-cover transition-transform duration-700 group-hover:scale-110">

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                <p
                                    class="text-white text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                    {{ $img['alt'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div id="lightbox"
        class="fixed inset-0 z-[100] bg-slate-950/95 backdrop-blur-md hidden items-center justify-center p-4 md:p-10 opacity-0 transition-all duration-500">
        <button id="close-lightbox"
            class="absolute top-6 right-6 z-[110] bg-white/10 hover:bg-white/20 text-white p-3 rounded-full backdrop-blur-xl transition-all border border-white/10">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg>
        </button>

        <div class="relative max-w-5xl w-full h-full flex flex-col items-center justify-center">
            <img id="lightbox-img" src="" alt=""
                class="max-w-full max-h-[80vh] rounded-lg shadow-2xl scale-90 transition-transform duration-500 ease-out">
            <p id="lightbox-caption" class="mt-6 text-white/70 text-sm tracking-widest uppercase font-medium"></p>
        </div>
    </div>
@endsection

@push('footer-scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxCaption = document.getElementById('lightbox-caption');
            const galleryItems = document.querySelectorAll('.gallery-item');
            const closeBtn = document.getElementById('close-lightbox');

            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const fullSrc = this.getAttribute('data-full');
                    const altText = this.getAttribute('data-alt');

                    lightboxImg.src = fullSrc;
                    lightboxImg.alt = altText;
                    if (lightboxCaption) lightboxCaption.innerText = altText;

                    lightbox.classList.remove('hidden');
                    lightbox.classList.add('flex');

                    // Trigger animations
                    setTimeout(() => {
                        lightbox.classList.add('opacity-100');
                        lightboxImg.classList.remove('scale-90');
                        lightboxImg.classList.add('scale-100');
                    }, 10);

                    document.body.style.overflow = 'hidden';
                });
            });

            const closeLightbox = () => {
                lightbox.classList.remove('opacity-100');
                lightboxImg.classList.remove('scale-100');
                lightboxImg.classList.add('scale-90');

                setTimeout(() => {
                    lightbox.classList.remove('flex');
                    lightbox.classList.add('hidden');
                }, 500);
                document.body.style.overflow = 'auto';
            };

            closeBtn.addEventListener('click', closeLightbox);
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox || e.target.closest('.relative') === null) closeLightbox();
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeLightbox();
            });
        });
    </script>
@endpush
