<div class="relative !mt-0">
    <!-- Flecha izquierda -->
    <button id="leftArrow{{ $id }}" class="arrow left hidden-arrows text-dark_beige hover:text-dark_brown hover:border-dark_brown" onclick="scrollNav{{ $id }}(-200)">
        <svg class="sm:block" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
    </button>

<!-- Contenido de la barra de navegación -->
<div id="navBar{{ $id }}" class="w-full bg-med_beige py-4 px-6 nav-bar overflow-x-auto z-40 {{ Route::is('get-in-touch') ? 'mt-[30px]' : '' }}" onscroll="toggleArrows{{ $id }}()">
    <nav class="flex space-x-6 justify-left md:justify-center navigation">
        @foreach ($links as $link)
            <a id="{{ $link['id'] }}" href="{{ $link['href'] }}" class="nav-item {{ $loop->first ? 'font-bold' : '' }}" onclick="selectNavItem(event)">
                {{ $link['text'] }}
            </a>
        @endforeach
    </nav>
</div>

    <!-- Flecha derecha -->
    <button id="rightArrow{{ $id }}" class="arrow right hidden-arrows text-dark_beige hover:text-dark_brown hover:border-dark_brown" onclick="scrollNav{{ $id }}(200)">
        <svg class="sm:block" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </button>
</div>

<script>
    function scrollNav{{ $id }}(distance) {
        const navBar = document.getElementById('navBar{{ $id }}');
        navBar.scrollBy({ left: distance, behavior: 'smooth' });
    }

    function toggleArrows{{ $id }}() {
        const navBar = document.getElementById('navBar{{ $id }}');
        const leftArrow = document.getElementById('leftArrow{{ $id }}');
        const rightArrow = document.getElementById('rightArrow{{ $id }}');

        if (navBar.scrollWidth > navBar.clientWidth) {
            leftArrow.classList.toggle('hidden-arrows', navBar.scrollLeft === 0);
            rightArrow.classList.toggle('hidden-arrows', navBar.scrollLeft + navBar.clientWidth >= navBar.scrollWidth);
        } else {
            leftArrow.classList.add('hidden-arrows');
            rightArrow.classList.add('hidden-arrows');
        }
    }
</script>
