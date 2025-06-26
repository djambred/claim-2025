<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $seo->title ?? config('app.name', 'Livewire Landing Page') }}</title>
    <meta name="description" content="{{ $seo->description ?? '' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">
    <meta name="author" content="djambred">
    <meta name="robots" content="{{ $seo->robots ?? 'index, follow' }}">

    <!-- Canonical -->
    <link rel="canonical" href="{{ $seo->canonical_url ?? url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $seo->title ?? config('app.name') }}">
    <meta property="og:description" content="{{ $seo->description ?? '' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image"
        content="{{ $seo->og_image ? asset('storage/' . $seo->og_image) : asset('default-og.jpg') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo->title ?? config('app.name') }}">
    <meta name="twitter:description" content="{{ $seo->description ?? 'Livewire Landing Page' }}">
    <meta name="twitter:image"
        content="{{ $seo->og_image ? asset('storage/' . $seo->og_image) : asset('default-og.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ $seo->og_image ? asset('storage/' . $seo->og_image) : asset('favicon.ico') }}"
        type="image/x-icon">

    <!-- Tailwind & DaisyUI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
        html {
            scroll-behavior: smooth;
        }

        .hero {
            background-image: url('{{ Storage::url($seo->og_image ?? 'images/hero.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.6);
        }
    </style>

    @livewireStyles
</head>
