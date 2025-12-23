<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - @yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        /* Header */
        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        header h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        header p {
            text-align: center;
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Navigation */
        nav {
            background-color: #34495e;
            padding: 1rem;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background-color 0.3s;
            display: inline-block;
        }

        nav a:hover {
            background-color: #2980b9;
        }

        nav a.active {
            background-color: #27ae60;
            font-weight: bold;
        }

        /* Main Content */
        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            min-height: 400px;
        }

        main h2 {
            color: #2c3e50;
            margin-bottom: 1rem;
            border-bottom: 3px solid #27ae60;
            padding-bottom: 0.5rem;
        }

        main p {
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }

        footer p {
            margin-bottom: 0.5rem;
        }

        footer a {
            color: #27ae60;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Test Message */
        .test-message {
            background-color: #e8f4f8;
            border-left: 4px solid #27ae60;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
        }

        .test-message strong {
            color: #27ae60;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>📱 My Portfolio</h1>
        <p>Computer Science Student | Web Developer | Compiler Enthusiast</p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="/" class="@if(request()->is('/')) active @endif">Home</a>
        <a href="/projects" class="@if(request()->is('projects')) active @endif">Projects</a>
        <a href="/skills" class="@if(request()->is('skills')) active @endif">Skills</a>
        <a href="/academic" class="@if(request()->is('academic')) active @endif">Academic</a>
        <a href="/achievements" class="@if(request()->is('achievements')) active @endif">Achievements</a>
        <a href="/about" class="@if(request()->is('about')) active @endif">About</a>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="test-message">
            <strong>✅ Testing Mode:</strong> This is a test layout. Routes and controllers are working!
        </div>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
        <p>Based in Parbatipur, Rangpur Division, Bangladesh</p>
        <p><a href="#">GitHub</a> | <a href="#">LinkedIn</a> | <a href="#">Email</a></p>
    </footer>
</body>
</html>