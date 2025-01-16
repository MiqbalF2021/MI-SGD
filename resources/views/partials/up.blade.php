<!-- resources/views/partials/scroll-to-top-button.blade.php -->

<button id="upButton" onclick="scrollToTop()" class="hidden fixed bottom-4 right-4 bg-emerald-500 text-white px-4 py-2 rounded-full shadow-lg hover:bg-emerald-600 transition duration-300 ease-in-out">
    ↑
</button>

@push('scripts')
<script>
    // Menampilkan tombol ketika halaman digulir lebih dari 100px
    window.onscroll = function() {
        toggleUpButton();
    };

    function toggleUpButton() {
        var upButton = document.getElementById("upButton");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            upButton.classList.remove("hidden");
            upButton.classList.add("block");
        } else {
            upButton.classList.add("hidden");
            upButton.classList.remove("block");
        }
    }

    // Fungsi scroll ke atas dengan efek halus
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>
@endpush
