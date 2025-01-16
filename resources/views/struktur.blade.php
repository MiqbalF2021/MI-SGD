

@extends('layouts.app')

@section('content')
@php
    $strukturs = \App\Models\Struktur::all()
@endphp

@foreach ( $strukturs as $struktur)
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-emerald-600 mb-16">{{ $title }}</h1>
    <div class="mx-12 flex flex-col items-center">
        <img src="{{ asset('storage/' . $struktur->image) }}" alt="{{ $struktur->title }}" class="text-center h-96 w-auto mb-9">
        <div class="mx-auto">
            <h1 class="text-3xl font-bold mb-5">{{ $struktur->title }}</h1>
        </div>
        <div class="mx-auto">
            <p class="mx-auto texs-center text-base font-normal">{!! str($struktur->description)->sanitizeHtml() !!}</p>
        </div>
        
    </div>
</div>
@endforeach
@endsection
