@php
    $beritas = \App\Models\Berita::all();
@endphp

<section id="berita-pengumuman" class="container mx-10 md:mx-auto mt-10 py-16 bg-gray-50 relative">
    <h2 class="text-2xl md:text-3xl font-bold text-center text-orange-500 mb-8">Berita dan Pengumuman</h2>

    <!-- Berita dan Pengumuman Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Berita Section (70%) -->
        <div class="md:col-span-2 space-y-8 bg-gray-50 shadow-md p-6 md:p-10 rounded-t-3xl border-t-4 border-orange-500">
            <h3 class="text-xl md:text-2xl font-semibold text-center text-gray-800">Berita Terbaru</h3>

            <!-- Berita Cards Grid -->
            @foreach ( $beritas as $berita)
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{ asset('storage/' . $berita->image) }})" title="{{ $berita->title }}">
                </div>
                <div class="border-orange-400  bg-white rounded-b rounded-r-3xl shadow-md border-r-2 p-4 flex flex-col justify-between leading-normal">
                  <div class="mb-8">
                    
                    <div class="text-gray-900 font-bold text-xl mb-2">{{ $berita->title }}</div>
                    <p class="text-gray-700 text-base">{{ $berita->description }}</p>
                  </div>
                  <div class="flex items-center">

                    <div class="text-sm">
                      <p class="text-gray-600">{{ $berita->created_at->diffForHumans() }}</p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
        </div>

        <!-- Pengumuman Section (30%) -->
        <div class="space-y-6 bg-gray-50 shadow-md p-6 md:p-10 rounded-t-3xl border-t-4 border-orange-500">
            <h3 class="text-xl md:text-2xl font-semibold text-center text-gray-800">Pengumuman</h3>

            <!-- List Pengumuman -->
            <ul class="space-y-6">
                <!-- Pengumuman 1 -->
                <li class="flex items-center space-x-4">
                    <img src="/img/cup.png" alt="Pengumuman 1" class="w-12 h-12 md:w-16 md:h-16 rounded-full">
                    <div>
                        <h4 class="text-md md:text-lg font-semibold text-orange-500">Pengumuman 1</h4>
                        <p class="text-gray-700 text-sm md:text-base">Deskripsi singkat pengumuman 1 yang baru saja diterbitkan.</p>
                    </div>
                </li>

                <!-- Pengumuman 2 -->
                <li class="flex items-center space-x-4">
                    <img src="/img/mortarboard.png" alt="Pengumuman 2" class="w-12 h-12 md:w-16 md:h-16 rounded-full">
                    <div>
                        <h4 class="text-md md:text-lg font-semibold text-orange-500">Pengumuman 2</h4>
                        <p class="text-gray-700 text-sm md:text-base">Deskripsi singkat pengumuman 2 yang baru saja diterbitkan.</p>
                    </div>
                </li>

                <!-- Pengumuman 3 -->
                <li class="flex items-center space-x-4">
                    <img src="/img/startup.png" alt="Pengumuman 3" class="w-12 h-12 md:w-16 md:h-16 rounded-full">
                    <div>
                        <h4 class="text-md md:text-lg font-semibold text-orange-500">Pengumuman 3</h4>
                        <p class="text-gray-700 text-sm md:text-base">Deskripsi singkat pengumuman 3 yang baru saja diterbitkan.</p>
                    </div>
                </li>

                <!-- Pengumuman 4 -->
                <li class="flex items-center space-x-4">
                    <img src="/img/cup.png" alt="Pengumuman 4" class="w-12 h-12 md:w-16 md:h-16 rounded-full">
                    <div>
                        <h4 class="text-md md:text-lg font-semibold text-orange-500">Pengumuman 4</h4>
                        <p class="text-gray-700 text-sm md:text-base">Deskripsi singkat pengumuman 4 yang baru saja diterbitkan.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
