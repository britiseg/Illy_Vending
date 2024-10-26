<div class="relative p-4">
    <div class="absolute top-4 right-4">
        <button type="button" class="inline-flex items-center bg-primary-red text-white font-semibold px-3 py-2 text-sm shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
            Get In Touch
        </button>
    </div>

    <!-- Contenedor de Logos -->
    <div class="flex flex-col space-y-4">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/logo_prepango.png') }}" alt="Logo Prepango" class="h-8">
            <img src="{{ asset('images/logo_illy.png') }}" alt="Logo Illy" class="h-8">
        </div>

        <!-- Barra de Navegación-->
        <div class="w-full bg-med_beige p-4">
            <nav class="flex space-x-6 overflow-x-auto scrollbar-hide justify-center">
                <a href="#" class="nav-item font-bold" onclick="selectNavItem(event)">The Prepango Program</a>
                <a href="#" class="nav-item" onclick="selectNavItem(event)">The Illy Experience</a>
                <a href="#" class="nav-item" onclick="selectNavItem(event)">Machine Details</a>
                <a href="#" class="nav-item" onclick="selectNavItem(event)">New!</a>
                <a href="#" class="nav-item" onclick="selectNavItem(event)">Get In Touch</a>
            </nav>
        </div>
    </div>
</div>

<script>
    function selectNavItem(event) {

        document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('font-bold'));
        event.currentTarget.classList.add('font-bold');
    }
</script>
