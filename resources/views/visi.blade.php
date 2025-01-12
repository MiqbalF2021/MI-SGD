@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-primary">{{ $title }}</h1>
    <div class="mt-4">
        <h2 class="text-2xl font-semibold">Visi</h2>
        <p>{{ $visi }}</p>
        <h2 class="text-2xl font-semibold mt-4">Misi</h2>
        <ul class="list-disc ml-6">
            @foreach (explode("\n", $misi) as $point)
                <li>{{ $point }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
