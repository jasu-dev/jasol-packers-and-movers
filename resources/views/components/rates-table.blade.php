@props([
    'heading' => 'Packers and Movers Charges',
    'intro' => null,
    /** array<int, array{0: string, 1: string, 2: string}> — [move type, local rate, intercity rate] */
    'rows' => null,
    'columns' => ['Type of Move', 'Local Shifting (within Pune)', 'Pune to Other City'],
    'note' => 'Rates are indicative and depend on volume of goods, floor and lift availability, packing material, distance and date of the move. Share your inventory for an exact, no-obligation quote.',
])

@php
    $rows = $rows ?? [
        ['1 BHK household', '₹3,000 – ₹7,000', '₹9,000 – ₹18,000'],
        ['2 BHK household', '₹5,000 – ₹10,000', '₹13,000 – ₹26,000'],
        ['3 BHK household', '₹8,000 – ₹15,000', '₹18,000 – ₹38,000'],
        ['4 BHK / Villa', '₹14,000 – ₹25,000', '₹30,000 – ₹60,000'],
        ['Few items / small office', '₹2,000 – ₹6,000', '₹7,000 – ₹15,000'],
        ['Bike transport', '₹1,200 – ₹2,500', '₹2,500 – ₹9,000'],
        ['Car transport', '₹3,000 – ₹6,000', '₹8,000 – ₹25,000'],
    ];
@endphp

<section {{ $attributes->merge(['class' => 'section-padding bg-card overflow-hidden']) }}>
    <div class="container mx-auto max-w-5xl px-4">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="section-title">{!! $heading !!}</h2>
            @if ($intro)
                <p class="section-subtitle max-w-3xl mx-auto">{!! $intro !!}</p>
            @endif
        </div>

        <div class="overflow-x-auto rounded-2xl border border-border shadow-sm" data-aos="fade-up" data-aos-delay="100">
            <table class="w-full text-left text-sm md:text-base">
                <thead class="bg-secondary text-secondary-foreground">
                    <tr>
                        @foreach ($columns as $column)
                            <th scope="col" class="px-5 py-4 font-semibold">{{ $column }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="divide-y divide-border bg-background">
                    @foreach ($rows as $row)
                        <tr class="hover:bg-muted/60 transition-colors">
                            @foreach ($row as $cellIndex => $cell)
                                @if ($cellIndex === 0)
                                    <th scope="row" class="px-5 py-4 font-semibold text-foreground">{{ $cell }}</th>
                                @else
                                    <td class="px-5 py-4 text-muted-foreground whitespace-nowrap">{{ $cell }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if ($note)
            <p class="mt-4 text-sm text-muted-foreground text-center">{{ $note }}</p>
        @endif

        {{ $slot }}
    </div>
</section>
