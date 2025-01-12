@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-primary">{{ $title }}</h1>
    <p class="mt-4">{{ $description }}</p>
</div>
@endsection
