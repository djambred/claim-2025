<section id="about" class="py-16 bg-base-100 text-base-content">
    <div class="container mx-auto px-6 text-center">
        @if ($about)
            @if ($about->logo)
                <div class="flex justify-center mb-6">
                    <img src="{{ Storage::url($about->logo) }}" alt="Logo" class="h-20">
                </div>
            @endif

            <h2 class="text-4xl font-bold text-primary mb-4">{{ $about->title }}</h2>
            <p class="text-lg text-base-content/80 max-w-3xl mx-auto">
                {{ $about->description }}
            </p>
        @else
            <p>Data belum tersedia.</p>
        @endif
    </div>
</section>
