<section id="team" class="py-20 px-4">
    <div class="container mx-auto">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold">{{ $title }}</h2>
            <p class="text-base-content/70 mt-2">{{ $description }}</p>
        </div>
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($teams as $index => $member)
                <div class="card items-center text-center" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="avatar">
                        <div class="w-32 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                            <img src="{{ $member->photo ? Storage::url($member->photo) : 'https://via.placeholder.com/200' }}"
                                alt="{{ $member->name }}" />
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{ $member->name }}</h2>
                        <p>{{ $member->position }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
