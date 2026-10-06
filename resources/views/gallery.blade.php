@extends('layouts.app')

@section('title', 'Packing & Moving Gallery | Jasol Packers and Movers Pune')
@section('meta_description', 'Photos of Jasol Packers and Movers at work in Pune: household packing, bike transport loading, furniture wrapping and our trucks in Hinjewadi, Wakad and Baner.')
@section('og_image', asset('assets/images/gallery/jasol-packers-movers.jpg'))

@section('content')
    <section class="relative bg-secondary py-20 px-4 overflow-hidden">
        <div class="container mx-auto text-center relative z-10">
            <x-breadcrumbs :items="[['name' => 'Gallery']]" class="mb-4" />
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                Packing and Moving <span class="text-primary">Gallery</span>
            </h1>
            <p class="text-white/70 max-w-2xl mx-auto text-lg leading-relaxed">
                Real photos from Jasol Packers and Movers jobs in Pune: household packing, furniture wrapping,
                bike transport loading and our closed-body trucks.
            </p>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="section-title">Our Work in <span class="text-primary">Pictures</span></h2>
            <p class="text-center text-muted-foreground max-w-3xl mx-auto mb-12">
                Every photo below is from an actual move handled by our teams in
                <a href="{{ route('home') }}" class="text-primary font-semibold hover:underline">Hinjewadi</a>,
                <a href="{{ route('wakad') }}" class="text-primary font-semibold hover:underline">Wakad</a> and
                <a href="{{ route('baner') }}" class="text-primary font-semibold hover:underline">Baner</a>. See how we pack
                sofas and kitchens, crate fragile items and secure two-wheelers for bike transport from Pune.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $images = [
                        [
                            'url' => 'assets/images/gallery/bick-transport.jpg',
                            'width' => 1002,
                            'height' => 540,
                            'title' => 'Secure Bike Transport',
                            'alt' => 'Jasol Packers specialized motorcycle transportation in a secure carrier',
                        ],
                        [
                            'url' => 'assets/images/gallery/bike-packing.jpg',
                            'width' => 885,
                            'height' => 1200,
                            'title' => 'Professional Bike Packing',
                            'alt' => 'Multi-layer protective bubble wrap packing for two-wheelers',
                        ],
                        [
                            'url' => 'assets/images/gallery/bike-transport-loaded.jpg',
                            'width' => 675,
                            'height' => 1200,
                            'title' => 'Vehicle Loading',
                            'alt' => 'Bikes securely loaded and fastened in a transit truck for relocation',
                        ],
                        [
                            'url' => 'assets/images/gallery/boxes.jpg',
                            'width' => 276,
                            'height' => 250,
                            'title' => 'Packing Materials',
                            'alt' => 'High-quality corrugated boxes and packing sheets used by Jasol Packers',
                        ],
                        [
                            'url' => 'assets/images/gallery/jasol-packers-movers.jpg',
                            'width' => 864,
                            'height' => 1152,
                            'title' => 'Expert Moving Team',
                            'alt' => 'Professional staff of Jasol Packers and Movers handling a relocation project',
                        ],
                        [
                            'url' => 'assets/images/gallery/jasol-packers.jpg',
                            'width' => 864,
                            'height' => 1152,
                            'title' => 'Household Packing',
                            'alt' => 'Expert packing services for household goods and furniture',
                        ],
                        [
                            'url' => 'assets/images/gallery/packages.jpeg',
                            'width' => 600,
                            'height' => 450,
                            'title' => 'Securely Sealed Packages',
                            'alt' => 'Packed items sealed with heavy-duty tape and protective wrap',
                        ],
                        [
                            'url' => 'assets/images/gallery/packed-parcels.jpg',
                            'width' => 720,
                            'height' => 595,
                            'title' => 'Parcel Services',
                            'alt' => 'Consolidated parcels ready for long-distance domestic transport',
                        ],
                        [
                            'url' => 'assets/images/gallery/packed-parcles.jpg',
                            'width' => 721,
                            'height' => 960,
                            'title' => 'Inventory Management',
                            'alt' => 'Organized inventory of packed parcels ready for lifting',
                        ],
                        [
                            'url' => 'assets/images/gallery/packers-movers-chinchead.jpg',
                            'width' => 720,
                            'height' => 862,
                            'title' => 'Professional Handling',
                            'alt' => 'Trained movers managing fragile items during the loading process',
                        ],
                        [
                            'url' => 'assets/images/gallery/packers-in-baners.jpg',
                            'width' => 720,
                            'height' => 1280,
                            'title' => 'Local Shifting Services',
                            'alt' => 'Jasol Packers providing local relocation services in the Baner area',
                        ],
                        [
                            'url' => 'assets/images/gallery/packers-and-movers-truck.jpg',
                            'width' => 1280,
                            'height' => 960,
                            'title' => 'Reliable Transport Vehicle',
                            'alt' => 'Jasol Packers and Movers dedicated closed-body container truck',
                        ],
                        [
                            'url' => 'assets/images/gallery/packing-foam-sheet.jpg',
                            'width' => 500,
                            'height' => 500,
                            'title' => 'Shock-Proof Protection',
                            'alt' => 'EPE foam sheets used for shock-proofing electronic and fragile items',
                        ],
                        [
                            'url' => 'assets/images/gallery/packing-wale.jpg',
                            'width' => 720,
                            'height' => 1280,
                            'title' => 'Skilled Packers',
                            'alt' => 'Experienced packing team ensuring damage-free household shifting',
                        ],
                        [
                            'url' => 'assets/images/gallery/packing.jpg',
                            'width' => 720,
                            'height' => 1280,
                            'title' => 'Standard Packing Procedure',
                            'alt' => 'Systematic packing process for office and home relocation',
                        ],
                        [
                            'url' => 'assets/images/gallery/parcel.jpg',
                            'width' => 780,
                            'height' => 1040,
                            'title' => 'Single Unit Parcel',
                            'alt' => 'Single package securely wrapped for individual parcel delivery',
                        ],
                        [
                            'url' => 'assets/images/gallery/ready-parcels.jpg',
                            'width' => 1000,
                            'height' => 562,
                            'title' => 'Ready for Dispatch',
                            'alt' => 'Final packed goods waiting for dispatch to the destination',
                        ],
                        [
                            'url' => 'assets/images/gallery/sofa-packing.jpg',
                            'width' => 720,
                            'height' => 960,
                            'title' => 'Furniture Protection',
                            'alt' => 'Professional sofa packing using stretch film and corrugated wrap',
                        ],
                    ];
                @endphp

                @foreach ($images as $index => $img)
                    <div data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                        <div class="gallery-item group relative overflow-hidden rounded-2xl cursor-zoom-in shadow-md hover:shadow-2xl transition-all duration-500"
                            data-full="{{ asset($img['url']) }}" data-alt="{{ $img['alt'] }}">
                            <img src="{{ asset($img['url']) }}" alt="{{ $img['alt'] }}" width="{{ $img['width'] }}" height="{{ $img['height'] }}"
                                loading="{{ $index < 3 ? 'eager' : 'lazy' }}" decoding="async"
                                class="w-full h-72 object-cover transition-transform duration-700 group-hover:scale-110">

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                <p
                                    class="text-white text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                    {{ $img['title'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @push('schema')
        <script type="application/ld+json">{!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'ImageGallery',
            '@id' => url()->current() . '#gallery',
            'name' => 'Jasol Packers and Movers Service Gallery',
            'description' => 'Photos of household packing, bike transport loading and moving trucks from Jasol Packers and Movers jobs in Pune.',
            'url' => url()->current(),
            'author' => ['@id' => 'https://jasolpackersandmovers.in/#organization'],
            'about' => ['@id' => 'https://jasolpackersandmovers.in/#organization'],
            'associatedMedia' => collect($images)->map(fn($img) => [
                '@type' => 'ImageObject',
                'contentUrl' => asset($img['url']),
                'name' => $img['title'],
                'description' => $img['alt'],
                'width' => $img['width'],
                'height' => $img['height'],
            ])->values()->all(),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endpush

    <div id="lightbox"
        class="fixed inset-0 z-[100] bg-slate-950/95 backdrop-blur-md hidden items-center justify-center p-4 md:p-10 opacity-0 transition-all duration-500">
        <button id="close-lightbox" type="button" aria-label="Close image preview"
            class="absolute top-6 right-6 z-[110] bg-white/10 hover:bg-white/20 text-white p-3 rounded-full backdrop-blur-xl transition-all border border-white/10">
            <x-icons.close class="w-6 h-6" />
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
