<section id="products" class="bg-base-200 py-20 px-4">
    <div class="text-center mb-12" data-aos="fade-up">
        <h2 class="text-3xl lg:text-4xl font-bold">{{ $title }}</h2>
        <p class="text-base-content/70 mt-2">{{ $description }}</p>
    </div>
    <div class="max-w-screen-xl mx-auto">
        <div id="product-carousel" class="flex overflow-x-auto gap-6 px-4 py-4 snap-x snap-mandatory scroll-smooth">
            @foreach ($products as $product)
                <div class="card w-72 flex-shrink-0 bg-base-100 shadow-md snap-center" data-aos="zoom-in">
                    <figure>
                        <img src="{{ $product->image_url }}" alt="{{ $product->title }}"
                            class="object-cover w-full h-40" />
                    </figure>
                    <div class="card-body text-center">
                        <h2 class="card-title justify-center">{{ $product->title }}</h2>
                        <p class="text-sm">{{ $product->description }}</p>
                        @if ($product->button_url)
                            <div class="card-actions justify-center mt-4">
                                <a href="{{ $product->button_url }}" class="btn btn-primary" target="_blank"
                                    rel="noopener">
                                    {{ $product->button_text }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
