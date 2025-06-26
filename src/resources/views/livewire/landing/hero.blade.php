@if ($hero)
    <section class="hero min-h-screen bg-base-200 bg-cover bg-center px-6 relative" {{-- style="background-image: url('{{ asset($hero->background_image) }}');"> --}} <div
        class="hero-overlay bg-black bg-opacity-50 absolute inset-0 z-0">
        </div>
        <div class="hero-content text-center text-neutral-content relative z-10">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold text-white">{{ $hero->title }}</h1>
                <p class="py-6 text-lg text-white/90">
                    {{ $hero->subtitle }}
                </p>
                <div class="flex justify-center gap-4 mt-6">
                    <a href="#about" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    <a href="#contact"
                        class="btn btn-outline text-white border-white hover:bg-white hover:text-black">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
@endif
