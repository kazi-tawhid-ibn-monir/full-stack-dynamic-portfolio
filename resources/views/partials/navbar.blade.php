<nav class="navbar">
    <a href="{{ route('home') }}" class="navbar-brand">Kazi Tawhid Ibn Monir</a>
    
    <button class="menu-toggle" id="menuToggle">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <ul class="nav-links" id="navLinks">
        <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('skills') }}" class="{{ Route::currentRouteName() === 'skills' ? 'active' : '' }}">Skills</a></li>
        <li><a href="{{ route('projects') }}" class="{{ Route::currentRouteName() === 'projects' ? 'active' : '' }}">Projects</a></li>
        <li><a href="{{ route('achievements') }}" class="{{ Route::currentRouteName() === 'achievements' ? 'active' : '' }}">Achievements</a></li>
        <li><a href="{{ route('academic') }}" class="{{ Route::currentRouteName() === 'academic' ? 'active' : '' }}">Academic</a></li>
    </ul>
</nav>
