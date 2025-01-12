<header class="bg-gradient-to-r from-emerald-200 via-emerald-500 to-emerald-500 text-white mx-3 mt-1 rounded-lg" >
    <nav class="container mx-auto p-4 flex justify-between items-center">
        <div class="w-8">
            <img src="/img/logo.png" alt="">
        </div>
        <ul class="flex space-x-6 font-semibold text-green-50">
            <li><a href="/" class=" hover:underline">Home</a></li>
            <li class="relative group">
                <!-- Profil Dropdown -->
                <a href="#" class="hover:underline">Profil</a>
                <ul class="font-medium absolute left-0 mt-2 bg-white text-emerald-700 rounded shadow opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                    <li><a href="{{ route('kurikulum') }}" class="block px-4 py-2 hover:bg-gray-200">Kurikulum</a></li>
                    <li><a href="{{ route('struktur') }}" class="block px-4 py-2 hover:bg-gray-200">Struktur</a></li>
                    <li><a href="{{ route('visi-misi') }}" class="block px-4 py-2 hover:bg-gray-200">Visi Misi</a></li>
                    <li><a href="{{ route('extrakurikuler') }}" class="block px-4 py-2 hover:bg-gray-200">Extrakurikuler</a></li>
                </ul>
            </li>
            
            <li><a href="#contact" class="hover:underline">Hubungi Kami</a></li>
            <li><a href="#daftar" class="hover:bg-orange-600  bg-orange-500 px-5 py-3 rounded-md" >Daftar Sekarang</a></li>
        </ul>
    </nav>
</header>