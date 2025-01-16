<header class=" text-emerald-950 rounded-lg ">
    <nav class="container p-4 mx-10 flex justify-between items-center">
        <div class="w-8">
            <img src="/img/logo.png" alt="Logo">
        </div>
        <div class="md:hidden">
            <button id="menu-button" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <ul id="menu" class="hidden md:flex space-x-6 font-semibold text-emerald-950">
            <li><a href="/" class="hover:underline hover:text-emerald-700">Home</a></li>
            <li class="relative group">
                <a href="#" class="hover:underline hover:text-emerald-700">Profil</a>
                <ul class="font-medium absolute left-0 mt-2 bg-white text-emerald-700 rounded shadow opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                    <li><a href="/kurikulum" class="block px-4 py-2 hover:bg-gray-200">Kurikulum</a></li>
                    <li><a href="/struktur" class="block px-4 py-2 hover:bg-gray-200">Struktur</a></li>
                    <li><a href="/visi" class="block px-4 py-2 hover:bg-gray-200">Visi Misi</a></li>
                    <li><a href="/ekstra" class="block px-4 py-2 hover:bg-gray-200">Extrakurikuler</a></li>
                </ul>
            </li>
            <li><a href="/#kontak" class="hover:underline hover:text-emerald-700">Hubungi Kami</a></li>
            <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScB_-Hc-KPFhxfMoN3pS2tMcLYumVv5EAF1KigVui81brt6aw/viewform" class="hover:bg-orange-600 hover:text-orange-200 text-white bg-orange-500 px-5 py-3 rounded-xl">Daftar Sekarang</a></li>
        </ul>
    </nav>
</header>

<script>
    document.getElementById('menu-button').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
</script>
