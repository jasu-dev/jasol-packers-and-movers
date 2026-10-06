@props([
    /** array<int, array{name: string, url?: string}> */
    'items' => [],
    'light' => true,
])

@php
    $crumbs = array_merge([['name' => 'Home', 'url' => url('/')]], $items);

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => collect($crumbs)
            ->values()
            ->map(function ($crumb, $index) {
                $item = [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'name' => $crumb['name'],
                ];
                if (!empty($crumb['url'])) {
                    $item['item'] = $crumb['url'];
                }
                return $item;
            })
            ->all(),
    ];

    $textClass = $light ? 'text-white/60' : 'text-muted-foreground';
    $linkClass = $light ? 'text-primary hover:text-white' : 'text-primary hover:text-foreground';
@endphp

<nav aria-label="Breadcrumb" {{ $attributes->merge(['class' => 'text-sm font-medium uppercase tracking-widest']) }}>
    <ol class="flex flex-wrap items-center justify-center gap-2">
        @foreach ($crumbs as $crumb)
            <li class="flex items-center gap-2">
                @if (!$loop->last && !empty($crumb['url']))
                    <a href="{{ $crumb['url'] }}" class="{{ $linkClass }} transition-colors">{{ $crumb['name'] }}</a>
                    <span class="{{ $textClass }}" aria-hidden="true">/</span>
                @else
                    <span class="{{ $textClass }}" aria-current="page">{{ $crumb['name'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>

@push('schema')
    <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush
