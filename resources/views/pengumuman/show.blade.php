@extends('layouts.app')

@section('content')
    <div class="container mx-20 my-10 mb-10">
        <img src="{{ asset('storage/' . $pengumuman->image) }}" alt="{{ $pengumuman->title }}" class="w-auto h-96 mt-4 mx-auto">
        <div class="text-sm mt-3">
            <p class="text-gray-600">{{ $pengumuman->created_at->diffForHumans() }}</p>
        </div>
        <h1 class="text-4xl font-bold mb-4 mt-16">{{ $pengumuman->title }}</h1>
        <p class="text-gray-700">{!! str( $pengumuman->description )->sanitizeHtml() !!}</p>
        
    </div>
    <div class="mb-28">
        <a href="/#berita">
            <p class="font-medium text-right mr-20 text-orange-500 hover:text-orange-300">
                << Kembali
            </p>
        </a>     
    </div>
@endsection
