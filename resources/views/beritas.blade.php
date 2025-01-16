@extends('layouts.app')

@php
    $beritas = \App\Models\Berita::all();
@endphp

@section('content')
<section id="berita" class="container mx-10 md:mx-auto mt-10 py-16 bg-gray-50 relative">
    <h2 class="text-2xl md:text-3xl font-bold text-center text-orange-500 mb-8">Berita dan Pengumuman</h2>

    <!-- Berita dan Pengumuman Layout -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Berita Section (70%) -->
        <div class="md:col-span-2 space-y-8 bg-gray-50 shadow-md p-6 md:p-10 rounded-t-3xl border-t-4 border-orange-500">
            <h3 class="text-xl md:text-2xl font-semibold text-center text-gray-800 m">Berita Terbaru</h3>

            <!-- Berita Cards Grid -->
            @foreach ( $beritas as $berita)
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <a href="{{ url('/berita/' . $berita->id) }}">
                    <div class="border-orange-400  bg-white hover:bg-gray-50 rounded-b rounded-r-3xl shadow-md border-r-2 p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8 flex gap-5">
                        <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="h-32 w-auto">
                        <div>
                            <div class="text-gray-900 font-bold text-xl mb-2">{{ $berita->title }}</div>
                        <p class="text-gray-700 text-base font-normal">{!! Str::limit(str($berita->description)->sanitizeHtml(), 100) !!}</p>
                        </div>
                      </div>
                      <div class="flex items-center">
    
                        <div class="text-sm">
                          <p class="text-gray-600 font-thin">{{ $berita->created_at->diffForHumans() }}</p>
                        </div>
                      </div>
                    </div>
                </a>
                
              </div>
              @endforeach

              <!-- Button to view all news -->
            
        </div>

        <!-- Pengumuman Section (30%) -->
        @php
            $pengumumans = \App\Models\Pengumuman::all();
        @endphp
        <div class="space-y-6 bg-gray-50 shadow-md p-6 md:p-10 rounded-t-3xl border-t-4 border-orange-500">
            <h3 class="text-xl md:text-2xl font-semibold text-center text-gray-800">Pengumuman</h3>

            <!-- List Pengumuman -->
            <ul class="space-y-6">
                <!-- Pengumuman 1 -->
                @foreach ( $pengumumans as $pengumuman)
                <a href="{{ url('/pengumuman/' . $pengumuman->id) }}">
                    <li class=" p-5 rounded-lg hover:shadow-md">
                        <div class="flex items-center space-x-4 ">
                            <img src="{{ asset('storage/' . $pengumuman->image) }}" alt="{{ $pengumuman->title }}" class="w-12 h-12 md:w-20 md:h-20 rounded-md">
                        <div>
                            <h4 class="text-md md:text-lg font-semibold text-orange-500">{{ $pengumuman->title }}</h4>
                            <p class="text-gray-700 text-xs md:text-base">{!! Str::limit(str($pengumuman->description)->sanitizeHtml(), 100) !!}</p>
                        </div>
                        </div>
                        <div class="text-sm text-right mt-3">
                            <p class="text-gray-600 font-thin">{{ $berita->created_at->diffForHumans() }}</p>
                        </div>
                    </li>
                </a>
                @endforeach

            </ul>
        </div>
        
    </div>
</section>
@endsection
