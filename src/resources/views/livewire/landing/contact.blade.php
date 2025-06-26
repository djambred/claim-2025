<section id="contact" class="bg-base-200 py-20 px-4">
    <div class="container mx-auto">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold">{{ $title }}</h2>
            <p class="text-base-content/70 mt-2">{{ $description }}</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-start max-w-4xl mx-auto">
            <div data-aos="fade-right">
                <h3 class="text-xl font-bold mb-4">Kirim Pesan</h3>

                @if (session()->has('success'))
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form wire:submit.prevent="send" class="space-y-4">
                    <input type="text" wire:model.defer="name" placeholder="Nama Anda"
                        class="input input-bordered w-full @error('name') input-error @enderror" required />
                    @error('name')
                        <small class="text-error">{{ $message }}</small>
                    @enderror

                    <input type="email" wire:model.defer="email" placeholder="Email Anda"
                        class="input input-bordered w-full @error('email') input-error @enderror" required />
                    @error('email')
                        <small class="text-error">{{ $message }}</small>
                    @enderror

                    <textarea wire:model.defer="message"
                        class="textarea textarea-bordered w-full h-32 @error('message') textarea-error @enderror" placeholder="Pesan Anda"
                        required></textarea>
                    @error('message')
                        <small class="text-error">{{ $message }}</small>
                    @enderror

                    <button class="btn btn-primary" type="submit">Kirim Pesan</button>
                </form>
            </div>

            <div data-aos="fade-left" data-aos-delay="150">
                <h3 class="text-xl font-bold mb-4">Informasi Kontak</h3>
                @if ($info)
                    <div class="space-y-4 text-base-content/80">
                        <p><strong>Alamat:</strong><br>{{ $info->address }}</p>
                        <p><strong>Email:</strong><br>{{ $info->email }}</p>
                        <p><strong>Telepon:</strong><br>{{ $info->phone }}</p>
                    </div>
                @else
                    <p class="text-base-content/70">Belum ada informasi kontak.</p>
                @endif
            </div>
        </div>
    </div>
</section>
