<section id="features" class="container mx-auto py-20 px-4">
    <div class="text-center mb-12" data-aos="fade-up">
        <h2 class="text-3xl lg:text-4xl font-bold">{{ $title }}</h2>
        <p class="text-base-content/70 mt-2">{{ $description }}</p>
    </div>
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($features as $index => $feature)
            <div class="card bg-base-200/50 p-6 text-center" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                <div class="flex justify-center mb-4">
                    {{-- Icon bisa HTML SVG atau <x-icon> custom --}}
                    {{-- {!! $feature->icon !!} --}}
                    <x-dynamic-component :component="$feature->icon" class="w-10 h-10 text-primary" />

                </div>
                <h3 class="text-xl font-semibold">{{ $feature->title }}</h3>
                <p class="mt-2 text-sm text-base-content/70">{{ $feature->description }}</p>
            </div>
        @endforeach
    </div>
</section>
