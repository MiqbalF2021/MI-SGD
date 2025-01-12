@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
<section class="hero text-center pt-20 pb-10">
    <!-- Hero Section Baris 1 (Judul dan Deskripsi) -->
    <div class=" container mx-auto flex flex-col md:flex-row items-center justify-between space-y-8 md:space-y-0">
        <div class="w-1/2 ml-10 text-center md:text-left">
            <h1 class="text-5xl font-bold text-secondary"><span class="text-emerald-700">Selamat datang</span> di Madrasah Ibtidaiyah Sunan Gunung Djati</h1>
            <p class="mt-4 text-gray-800">"Mewujudkan Generasi Cerdas Berakhlak Karimah"</p>
        </div>
        <div class="mt-6 md:mt-0">
            <img src="/img/hero-home.png" alt="Ilustrasi Pendidikan" class="h-auto w-full ">
        </div>
    </div>

    <!-- Hero Section Baris 2 (Prakata Kepala Sekolah) -->
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between py-12 px-6 md:px-12 rounded-lg mt-1">
        <!-- Foto Kepala Sekolah -->
        <div class="w-full md:w-1/3 mb-6 md:mb-0 text-center md:text-left">
            <img src="/img/ks.png" alt="Foto Kepala Sekolah" class="px-10 border-white">
        </div>
        
        <!-- Prakata Kepala Sekolah -->
        <div class="w-full md:w-2/3 text-center md:text-left">
            <p class="text-xl font-semibold text-gray-900">Prakata Kepala Sekolah</p>
            <p class="mt-4 text-gray-700">"Selamat datang di MI SGD. Kami berkomitmen untuk menciptakan lingkungan yang mendukung perkembangan akademik dan karakter siswa. Di sini, kami mengedepankan nilai-nilai moral dan pendidikan yang berkualitas. Mari bersama-sama kita bangun masa depan yang cerah untuk generasi yang akan datang."</p>
            <p class="mt-6 font-semibold text-gray-900">- Kepala Sekolah</p>
            <a href="#selengkapnya" class="mt-6 inline-block text-white bg-emerald-500 hover:bg-emerald-600 px-6 py-3 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                Selengkapnya
            </a>
        </div>
    </div>
    
</section>


<section id="moto" class="container mx-auto py-16 bg-emerald-500 relative">
    <!-- Wave Border Section -->


    <h2 class="text-3xl font-bold text-center text-orange-500 mb-8">Moto</h2>

    <div class=" mb-12 mx-4 sm:mx-8 lg:mx-12">
        <p class="text-green-900 text-center text-xl font-medium">Cerdas Berakhlak Karimah</p>
    </div>

    <!-- 3 Cards: Cerdas, Sholeh, Terampil -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20 mx-14">
        <!-- Card Cerdas -->
        <div class="bg-green-100 p-6 rounded-lg shadow-lg text-center">
            <img src="/img/cerdas.png" alt="Cerdas" class="mx-auto w-32 h-32 mb-4 rounded-full border-4 border-green-200">
            <h3 class="text-2xl font-semibold text-orange-500 mb-2">Cerdas</h3>
            <p class="text-gray-700">Mengutamakan kecerdasan dalam belajar dan berpikir kritis untuk kemajuan masa depan.</p>
        </div>

        <!-- Card Sholeh -->
        <div class="bg-green-100 p-6 rounded-lg shadow-lg text-center">
            <img src="/img/sholeh.png" alt="Sholeh" class="mx-auto w-32 h-32 mb-4 rounded-full border-4 border-green-200">
            <h3 class="text-2xl font-semibold text-orange-500 mb-2">Sholeh</h3>
            <p class="text-gray-700">Berakhlak mulia dengan nilai-nilai keagamaan yang mendalam dalam kehidupan sehari-hari.</p>
        </div>

        <!-- Card Terampil -->
        <div class="bg-green-100 p-6 rounded-lg shadow-lg text-center">
            <img src="/img/terampil.png" alt="Terampil" class="mx-auto w-32 h-32 mb-4 rounded-full border-4 border-green-200">
            <h3 class="text-2xl font-semibold text-orange-500 mb-2">Terampil</h3>
            <p class="text-gray-700">Mengasah keterampilan praktis untuk menjadi individu yang siap menghadapi tantangan dunia.</p>
        </div>
    </div>
</section>

    

    <!-- Berita Section -->
    <section id="berita" class="container mx-auto py-16">
        <h2 class="text-3xl font-bold text-center mb-4">Berita Terbaru</h2>
        <div class="space-y-4">
            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-xl font-semibold">Berita 1</h3>
                <p class="text-gray-700">Deskripsi singkat berita 1 yang baru saja diterbitkan. Selengkapnya...</p>
            </div>
            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-xl font-semibold">Berita 2</h3>
                <p class="text-gray-700">Deskripsi singkat berita 2 yang baru saja diterbitkan. Selengkapnya...</p>
            </div>
        </div>
    </section>

    <!-- Sarana dan Prasarana Section -->
    <section id="sarana-prasarana" class="container mx-auto py-16">
        <h2 class="text-3xl font-bold text-center mb-4">Sarana dan Prasarana</h2>
        <div class="bg-white p-8 rounded shadow-md">
            <p class="text-gray-700">Sekolah kami memiliki fasilitas yang lengkap dan mendukung proses pembelajaran yang berkualitas.</p>
        </div>
    </section>

    <!-- Galeri dan Video Section -->
    <section id="galeri" class="container mx-auto py-16">
        <h2 class="text-3xl font-bold text-center mb-4">Galeri & Video</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded shadow-md">
                <img src="https://via.placeholder.com/300" alt="Galeri" class="w-full h-48 object-cover rounded mb-4">
                <p class="text-gray-700">Foto kegiatan di sekolah.</p>
            </div>
            <div class="bg-white p-4 rounded shadow-md">
                <img src="https://via.placeholder.com/300" alt="Galeri" class="w-full h-48 object-cover rounded mb-4">
                <p class="text-gray-700">Kegiatan ekstra kurikuler.</p>
            </div>
        </div>
    </section>

    <!-- Apa Kata Mereka Section -->
    <section id="testimonials" class="bg-gray-100 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Apa Kata Mereka</h2>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded shadow-md">
                    <p class="text-gray-700">"MI SGD Bandung memberikan pengalaman belajar yang luar biasa. Guru-gurunya sangat peduli dan penuh perhatian." - Siswa 1</p>
                </div>
                <div class="bg-white p-6 rounded shadow-md">
                    <p class="text-gray-700">"Sekolah ini sangat mendukung perkembangan akademik dan non-akademik anak saya." - Orang Tua 1</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="container mx-auto py-16">
        <h2 class="text-3xl font-bold text-center mb-4">Kontak Kami</h2>
        <div class="bg-white p-8 rounded shadow-md">
            <p class="text-gray-700 mb-4">Jika Anda memiliki pertanyaan, silakan hubungi kami melalui form di bawah ini atau langsung ke alamat berikut:</p>
            <address class="text-gray-700">
                <strong>MI SGD Bandung</strong><br>
                Jalan Pendidikan No. 123, Bandung<br>
                Telp: (022) 12345678<br>
                Email: info@misgd.sch.id
            </address>
        </div>
    </section>
@endsection
