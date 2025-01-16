

@extends('layouts.app')

@section('content')
@php
    $kurikulums = \App\Models\Kurikulum::all()
@endphp

@foreach ( $kurikulums as $kurikulum)
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-emerald-600 mb-16">{{ $title }}</h1>
    <div class=" flex flex-col items-center mx-12">
        <img src="{{ asset('storage/' . $kurikulum->image) }}" alt="{{ $kurikulum->title }}" class="text-center h-96 w-auto mb-9">
        <div class="mx-auto">
            <h1 class="text-3xl font-bold mb-5">{{ $kurikulum->title }}</h1>
        </div>
        <div class="mx-auto">
            <p class="mx-auto texs-center text-base font-normal">{!! str($kurikulum->description)->sanitizeHtml() !!}</p>
        </div>
        
    </div>
</div>
@endforeach
@endsection
