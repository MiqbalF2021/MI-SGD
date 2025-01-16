

@extends('layouts.app')

@section('content')
@php
    $ekstras = \App\Models\Ekstra::all()
@endphp

@foreach ( $ekstras as $ekstra)
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-emerald-600 mb-16">{{ $title }}</h1>
    <div class=" flex flex-col items-center mx-12">
        <img src="{{ asset('storage/' . $ekstra->image) }}" alt="{{ $ekstra->title }}" class="text-center h-96 w-auto mb-9">
        <div class="mx-auto">
            <h1 class="text-3xl font-bold mb-5">{{ $ekstra->title }}</h1>
        </div>
        <div class="mx-auto">
            <p class="mx-auto texs-center text-base font-normal">{!! str($ekstra->description)->sanitizeHtml() !!}</p>
        </div>
        
    </div>
</div>
@endforeach
@endsection
