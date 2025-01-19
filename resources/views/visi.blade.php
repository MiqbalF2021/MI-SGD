

@extends('layouts.app')

@section('content')
@php
    $visis = \App\Models\Visi::all()
@endphp

@foreach ( $visis as $visi)
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-emerald-600 mb-16">{{ $title }}</h1>
    <div class="mx-12 flex flex-col items-center">
        <img src="{{ asset('storage/' . $visi->image) }}" alt="{{ $visi->title }}" class="text-center h-1/2 md:h-96 w-auto mb-9">
        <div class="mx-auto">
            <h1 class="text-3xl font-bold mb-5">{{ $visi->title }}</h1>
        </div>
        <div class="mx-auto">
            <p class="mx-auto texs-center text-base font-normal">{!! str($visi->description)->sanitizeHtml() !!}</p>
        </div>
        
    </div>
</div>
@endforeach
@endsection
