

@extends('layouts.app')

@section('content')
@php
    $ekstras = \App\Models\Ekstra::all();
    $beritas = \App\Models\Berita::take(5)->get();
    $galeris = \App\Models\Galeri::all();
@endphp


<div class="flex flex-col md:flex-row md:mx-10 mx-4 justify-between gap-5">
    <!-- Konten Kurikulum (75% width) -->
    <div class="md:w-[70%] w-full">
        @foreach ( $ekstras as $ekstra)
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-emerald-600 mb-16">{{ $title }}</h1>
        <div class="flex flex-col items-center justify-center mx-12">
            <div class="relative w-full max-w-4xl overflow-hidden rounded-lg">
                <div class="slider flex transition-transform ease-in-out duration-500">
                    @php
                        $galeriEkstra = $galeris->where('kategori', 'ekstrakurikuler');
                    @endphp
                    @foreach ($galeriEkstra as $galeri)
                        <div class="flex-none w-full">
                            <img src="{{ asset('storage/' . $galeri->image) }}" alt="{{ $galeri->title }}" class="w-full h-96 object-cover">
                        </div>
                    @endforeach
                </div>
                <!-- Arrow Buttons -->
                <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75" id="prevSlide">&#8249;</button>
                <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75" id="nextSlide">&#8250;</button>
            </div>
            <div class="mx-auto mt-5">
                <h1 class="text-3xl font-bold mb-5">{{ $ekstra->title }}</h1>
            </div>
            <div class="mx-auto">
                <p class="mx-auto text-center text-base font-normal">{!! str($ekstra->description)->sanitizeHtml() !!}</p>
            </div>
        </div>
    </div>
@endforeach
    </div>

    <!-- Konten Berita (25% width) -->
    <div class="md:w-[30%] w-full md:mt-28 mt-10">
        <div class="space-y-8 bg-gray-50 shadow-md p-6 md:p-10 rounded-t-3xl border-t-4 border-orange-500">
            <h3 class="text-xl md:text-2xl font-semibold text-center text-gray-800">Berita Terbaru</h3>

            <!-- Berita Cards Grid -->
            @foreach ($beritas as $berita)
            <div class="max-w-sm mt-8 w-full lg:max-w-full lg:flex">
                <a href="{{ url('/berita/' . $berita->id) }}">
                    <div class="border-orange-400 bg-white hover:bg-gray-50 rounded-b rounded-r-3xl shadow-md border-r-2 p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8 flex gap-5">
                            <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="w-1/4 h-1/4 lg:h-1/4 md:w-1/4">
                            <div>
                                <div class="text-gray-900 font-bold text-xl mb-2">{{ $berita->title }}</div>
                                <p class="text-gray-700 text-base font-normal break-all">{!! Str::limit(str($berita->description)->sanitizeHtml(), 100) !!}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="text-sm font-thin">
                                <p class="text-gray-600">{{ $berita->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slider > div');
        const totalSlides = slides.length;
        let index = 0;

        const updateSlidePosition = () => {
            slider.style.transform = `translateX(-${index * 100}%)`;
        };

        document.getElementById('prevSlide').addEventListener('click', () => {
            index = (index - 1 + totalSlides) % totalSlides;
            updateSlidePosition();
        });

        document.getElementById('nextSlide').addEventListener('click', () => {
            index = (index + 1) % totalSlides;
            updateSlidePosition();
        });

        setInterval(() => {
            index = (index + 1) % totalSlides;
            updateSlidePosition();
        }, 3000);
    });
</script>
@endsection
