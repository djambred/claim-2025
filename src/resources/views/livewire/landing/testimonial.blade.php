<section id="testimonials" class="py-20 px-4">
    <div class="container mx-auto">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold">{{ $title }}</h2>
            <p class="text-base-content/70 mt-2">{{ $description }}</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($testimonials as $index => $testimonial)
                <div class="card bg-base-200/50 shadow-lg" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                    <div class="card-body">
                        <p class="text-base-content/80">"{{ $testimonial->content }}"</p>
                        <div class="flex items-center mt-4">
                            <div class="avatar">
                                <div class="w-12 rounded-full">
                                    <img
                                        src="{{ !empty($testimonial->author_photo) ? Storage::url($testimonial->author_photo) : asset('images/man.png') }}" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="font-bold">{{ $testimonial->author_name }}</div>
                                <div class="text-xs text-base-content/60">{{ $testimonial->author_position }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
