@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
  
<section class="hero text-center mt-20 mb-10">
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
        @php
            $pengumuman = \App\Models\Pengumuman::where('title', 'Prakata dari Kepala Sekolah')->first();
        @endphp
        <div class="w-full text-center md:text-left">
            <p class="text-xl font-semibold text-gray-900">{{ $pengumuman->title }}</p>
            <p class="mt-4 text-gray-700">{!! Str::limit(str($pengumuman->description)->sanitizeHtml(), 200) !!}  </p>
            
            <a href="/pengumuman/3" class="mt-6 inline-block text-white bg-emerald-500 hover:bg-emerald-600 px-6 py-3 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
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
@php
    $galeris = \App\Models\Galeri::all();
    $medias = \App\Models\Media::all();
@endphp
<section id="galeri" class="container mx-auto py-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-orange-500">Galeri & Video</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ( $galeris as $galeri)
        <div class="bg-white p-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 hover:border-t-4 hover:border-orange-400">
            <img src="{{ asset('storage/' . $galeri->image)  }}" alt="{{ $galeri->title }}" class="w-full h-48 object-cover rounded-lg mb-6">
            <p class="text-gray-700 font-medium text-center">{{ $galeri->title }}</p>
        </div>
        @endforeach
        
        @foreach ( $medias as $media)
        <div class="bg-white p-6 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 hover:border-t-4 hover:border-orange-400">
            <iframe class="w-80 h-48 mx-auto mb-6 rounded-md" src="{{ $media->link }}" title="{{ $media->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="text-gray-700 font-medium text-center">{{ $media->title }}</p>
        </div>
        @endforeach

    </div>
</section>


    <!-- Apa Kata Mereka Section -->
<!-- Apa Kata Mereka Section -->
@php
    $komentars = \App\Models\Komentar::all();
@endphp
<section id="apa-kata-mereka" class="container mx-auto py-16 bg-gray-50 mt-16 mb-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-emerald-600">Apa Kata Mereka</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Testimonial Card 1 -->
        @foreach ( $komentars as $komentar)
        <div class="bg-white p-6 rounded-lg border-t-4 border-emerald-500 shadow-lg text-center transition duration-300 ease-in-out transform hover:scale-105 hover:border-t-4 hover:border-orange-400">
            <img src="{{ asset('storage/' . $komentar->image)  }}" alt="{{ $komentar->nama }}" class="w-36 h-36 rounded-full mx-auto mb-4">
            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $komentar->nama }}</h3>
            <p class="text-xs text-gray-500 mb-2">{{ $komentar->jabatan }}</p>
            <p class="text-gray-600 italic font-normal">"{{ $komentar->komentar }}"</p>
        </div>  
        @endforeach
        

    </div>
</section>



@endsection
