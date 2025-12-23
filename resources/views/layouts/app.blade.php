<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio - Computer Science Student">
    <title>Portfolio - @yield('title')</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>📱 Kazi Tawhid</h1>
        <p>Computer Science Student | Web Developer | Compiler Enthusiast</p>
    </header>

    <!-- Navigation -->
    <nav>
    <ul>
        <li><a href="/" class="@if(request()->is('/')) active @endif">Home</a></li>
        <li><a href="/projects" class="@if(request()->is('projects')) active @endif">Projects</a></li>
        <li><a href="/skills" class="@if(request()->is('skills')) active @endif">Skills</a></li>
        <li><a href="/academic" class="@if(request()->is('academic')) active @endif">Academic</a></li>
        <li><a href="/achievements" class="@if(request()->is('achievements')) active @endif">Achievements</a></li>
        <li><a href="/about" class="@if(request()->is('about')) active @endif">About</a></li>

        {{-- Admin button in navbar --}}
        <li>
            <a href="{{ route('admin.login') }}"
               style="margin-left: 1rem; padding: 6px 12px; border-radius: 4px;
                      background: #667eea; color: #fff; font-weight: 600;">
                🔐 Admin
            </a>
        </li>
    </ul>
</nav>

    <!-- Main Content -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
        <p>Based in Parbatipur, Rangpur Division, Bangladesh</p>
        <div class="footer-links">
            <a href="#">GitHub</a>
            <a href="#">LinkedIn</a>
            <a href="#">Email</a>
        </div>
    </footer>
</body>
</html>
