@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
<section class="hero text-center pt-20 pb-10">
    <!-- Hero Section Baris 1 (Judul dan Deskripsi) -->
    <div class=" container mx-auto flex flex-col md:flex-row items-center justify-between space-y-8 md:space-y-0">
        <div class="md:w-1/2 mx-5 md:mx-4 md:ml-10 text-center md:text-left">
            <h1 class="md:text-5xl text-3xl font-bold text-secondary"><span class="text-emerald-700">Selamat datang</span> di Madrasah Ibtidaiyah Sunan Gunung Djati</h1>
            <p class="mt-4 text-gray-800">"Mewujudkan Generasi Cerdas Berakhlak Karimah"</p>
        </div>
        <div class="mx-auto item-center md:item-left mt-6 md:mt-0 hidden md:block">
            <img src="/img/hero-home.png" alt="Ilustrasi Pendidikan" class="h-auto w-full ">
        </div>
    </div>

    <!-- Hero Section Baris 2 (Prakata Kepala Sekolah) -->
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between py-12 px-6 md:px-12 rounded-lg mt-1">
        <!-- Foto Kepala Sekolah -->
        <div class="w-full md:mb-0 text-center md:text-left md:mr-7">
            <img src="/img/ks.png" alt="Foto Kepala Sekolah" class="pl-10">
        </div>
        
        <!-- Prakata Kepala Sekolah -->
        <div class="w-full text-center md:text-left">
            <p class="text-xl font-semibold text-gray-900">Prakata Kepala Sekolah</p>
            <p class="mt-4 text-gray-700">"Selamat datang di MI SGD. Kami berkomitmen untuk menciptakan lingkungan yang mendukung perkembangan akademik dan karakter siswa. Di sini, kami mengedepankan nilai-nilai moral dan pendidikan yang berkualitas. Mari bersama-sama kita bangun masa depan yang cerah untuk generasi yang akan datang."</p>
            <p class="mt-6 font-semibold text-gray-900">- Kepala Sekolah</p>
            <a href="#selengkapnya" class="mt-6 inline-block text-white bg-emerald-500 hover:bg-emerald-600 px-6 py-3 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                Selengkapnya
            </a>
        </div>
    </div>
    
</section>


    <!-- 3 Cards: Cerdas, Sholeh, Terampil -->
    @include('moto');

   <!-- Berita Section -->
   @include('berita');

    <!-- Sarana dan Prasarana Section -->
    @include('sarana');
    

<!-- Galeri dan Video Section -->
<section id="galeri" class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-orange-500">Galeri & Video</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="img/berita/berita1.jpg" alt="Galeri" class="w-full h-48 object-cover rounded-lg mb-6">
            <p class="text-gray-700 font-medium text-center">Foto kegiatan di sekolah.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <img src="img/berita/berita2.jpeg" alt="Galeri" class="w-full h-48 object-cover rounded-lg mb-6">
            <p class="text-gray-700 font-medium text-center">Kegiatan ekstra kurikuler.</p>
        </div>
    </div>
</section>


    <!-- Apa Kata Mereka Section -->
<!-- Apa Kata Mereka Section -->
<section id="apa-kata-mereka" class="container mx-auto py-16 bg-gray-50">
    <h2 class="text-3xl font-bold text-center mb-8 text-emerald-500">Apa Kata Mereka</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Testimonial Card 1 -->
        <div class="bg-white p-6 rounded-lg border-t-4 border-emerald-500 shadow-lg text-center">
            <img src="https://via.placeholder.com/100" alt="User 1" class="w-24 h-24 rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-gray-800 mb-2">John Doe</h3>
            <p class="text-gray-600 italic">"Madrasah Ibtidaiyah ini sangat luar biasa! Anak saya sangat senang belajar di sini."</p>
        </div>

        <!-- Testimonial Card 2 -->
        <div class="bg-white p-6 rounded-lg border-t-4 border-emerald-500 shadow-lg text-center">
            <img src="https://via.placeholder.com/100" alt="User 2" class="w-24 h-24 rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Jane Smith</h3>
            <p class="text-gray-600 italic">"Fasilitas yang disediakan sangat memadai dan mendukung proses belajar mengajar."</p>
        </div>

        <!-- Testimonial Card 3 -->
        <div class="bg-white p-6 rounded-lg border-t-4 border-emerald-500 shadow-lg text-center">
            <img src="https://via.placeholder.com/100" alt="User 3" class="w-24 h-24 rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-gray-800 mb-2">Ali Ahmad</h3>
            <p class="text-gray-600 italic">"Lingkungan sekolah yang nyaman dan guru-guru yang profesional membuat saya merasa tenang."</p>
        </div>
    </div>
</section>



@endsection
