<section id="kontak" class="px-4 sm:px-10">
    <h1 class="text-center font-bold text-3xl text-emerald-800 mt-10">Hubungi Kami</h1>
    <div class="py-16 flex flex-col lg:flex-row gap-4">
        <div class="w-full lg:w-1/3 bg-gray-100 rounded-tr-3xl rounded-br-3xl border-r-4 border-emerald-500 px-10 py-10">
            <div class="flex items-center gap-4 mb-7">
                <img src="/img/kontak/location.png" alt="lokasi.img" class="w-8 h-8">
                <div class="font-normal">
                    <h1 class="text-xl font-bold text-emerald-950">Lokasi</h1>
                    <p class="text-sm text-gray-800">Kampus 2 UIN Sunan Gunung Djati Bandung, Jl. Cimencrang, Kec. Gedebage, Kota Bandung Jawa Barat 40292</p>
                </div>
            </div>
            <div class="flex items-center gap-4 mb-7">
                <img src="/img/kontak/mail.png" alt="mail.png" class="w-8 h-8">
                <div class="font-normal">
                    <h1 class="text-xl font-bold text-emerald-950">Email</h1>
                    <p class="text-sm text-gray-800">misgd@uinsgd.ac.id</p>
                </div>
            </div>
            <div class="flex items-center gap-4 mb-7">
                <img src="/img/kontak/whatsapp.png" alt="mail.png" class="w-8 h-8">
                <div class="font-normal">
                    <h1 class="text-xl font-bold text-emerald-950">Whatsapp</h1>
                    <p class="text-sm text-gray-800">081255332022</p>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.59947256209!2d107.7027722737112!3d-6.9383788679174705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c31a204a1567%3A0x502663c2c531d608!2sMI%20Sunan%20Gunung%20Djati%20Bandung!5e0!3m2!1sid!2sid!4v1736737997395!5m2!1sid!2sid"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <div class="w-full lg:w-2/3 px-10 py-10">
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <div class="mb-4 font-normal">
                    <label for="nama-lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama-lengkap" name="nama_lengkap" class="mt-1 block w-full p-2 border border-gray-300 rounded-2xl shadow-sm focus:ring-emerald-500 focus:border-emerald-500" placeholder="Nama Lengkap" required>
                </div>
                
                <div class="mb-4 font-normal">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-2xl shadow-sm focus:ring-emerald-500 focus:border-emerald-500" placeholder="Email" required>
                </div>
                
                <div class="mb-4 font-normal">
                    <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-2xl shadow-sm focus:ring-emerald-500 focus:border-emerald-500" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                
                <div>
                    <button type="submit" class="w-full bg-emerald-500 text-white font-semibold py-2 px-4 rounded-2xl shadow hover:bg-emerald-600 hover:text-emerald-200 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-opacity-75">
                        Kirim Pesan
                    </button>
                </div>
            </form>
            
        </div>
    </div>
</section>
