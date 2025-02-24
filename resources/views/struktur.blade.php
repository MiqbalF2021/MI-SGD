

@extends('layouts.app')

@section('content')
@php
    $strukturs = \App\Models\Struktur::all();
    $beritas = \App\Models\Berita::all();
    
@endphp


<div class="flex flex-col md:flex-row md:mx-10 mx-4 justify-between gap-5">
    <!-- Konten Kurikulum (75% width) -->
    <div class="md:w-[70%] w-full">
        @foreach ( $strukturs as $struktur)
        <div class="container mx-auto py-10">
            <h1 class="text-3xl font-bold text-emerald-600 mb-16">{{ $title }}</h1>
            <div class="mx-12 flex flex-col justify-center">
                <img src="{{ asset('storage/' . $struktur->image) }}" alt="{{ $struktur->title }}" class="text-center h-1/2 w-auto mb-9">
                <div class="mx-auto">
                    <h1 class="text-3xl font-bold mb-5">{{ $struktur->title }}</h1>
                </div>
                <div class="">
                    <p class="text-base font-normal">{!! str($struktur->description)->sanitizeHtml() !!}</p>
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
@endsection
