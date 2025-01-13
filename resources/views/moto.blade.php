@php
    $motos = \App\Models\Moto::all();
@endphp

<section id="moto" class="container mx-auto ">
    <div class="pb-20 pt-10 bg-emerald-50 relative rounded-3xl border-t-4 border-emerald-500">
        <h2 class="text-3xl font-bold text-center text-emerald-600">Moto</h2>

        <div class="mb-20 mx-4 sm:mx-8 lg:mx-12">
            <p class="text-emerald-900 text-center text-lg font-normal">Cerdas Berakhlak Karimah</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20 mx-14 align-middle ">
            @foreach($motos as $moto)
                <div class="bg-emerald-500 px-6 rounded-3xl py-8 shadow-lg text-center transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="{{ asset('storage/' . $moto->image) }}" alt="{{ $moto->title }}" class="mx-auto mb-4 w-1/2">
                    <h3 class="text-xl font-bold text-emerald-950 mb-4">{{ $moto->title }}</h3>
                    <p class="text-emerald-900 text-sm font-medium">{{ $moto->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
