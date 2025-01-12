@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold text-primary">{{ $title }}</h1>
    <ul class="list-disc ml-6 mt-4">
        @foreach ($activities as $activity)
            <li>{{ $activity }}</li>
        @endforeach
    </ul>
</div>
@endsection
