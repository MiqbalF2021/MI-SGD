@php
    $saranas = \App\Models\Sarana::all();
@endphp

<section id="moto" class="container mx-auto mt-20">
    <div class="pb-20 pt-10 bg-emerald-50 relative rounded-3xl border-t-4 border-emerald-500">
    <h2 class="text-3xl font-bold text-center text-emerald-600">Sarana & Prasarana</h2>

    <div class=" mb-20 mx-4 sm:mx-8 lg:mx-12">
        <p class="text-emerald-900 text-center text-lg font-normal">Madrasah Ibtidaiyah Sunan Gunung Djati Bandung menyediakan sarana dan prasarana yang dapat mendukung dalam proses pembelajaran</p>
        <p></p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20 mx-14">
    
        @foreach ($saranas as $sarana)
    <div class="bg-emerald-500 px-6 rounded-3xl py-8 shadow-lg text-center  transition duration-300 ease-in-out transform hover:scale-105 hover:border-t-4 hover:border-orange-400">
        <img src="{{ asset('storage/' . $sarana->image)  }}" alt="{{ $sarana->title }}" class="mx-auto mb-6 w-80 h-60 rounded-lg ">
        <h3 class="text-xl font-bold text-white mb-4">{{ $sarana->title }}</h3> 
        <p class="text-emerald-900 text-sm font-medium">{{ $sarana->description }}</p>
    </div>
        @endforeach
</div>
</div>
</section>