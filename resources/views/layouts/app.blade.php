<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portfolio') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-dark text-white">
    <nav class="navbar navbar-expand-lg border-bottom sticky-top">
        <div class="container px-4">
            <a class="navbar-brand fw-bold fs-4 text-white" href="{{ route('home') }}">
                {{ $settings['navbar_brand'] ?? 'WEL' }} <span class="text-orange">{{ $settings['navbar_brand_accent'] ?? 'FOLIO' }}</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}"
                            href="{{ route('skills') }}">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}"
                            href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}"
                            href="{{ route('experience') }}">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('education') ? 'active' : '' }}"
                            href="{{ route('education') }}">Education</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('contact') }}" class="btn-get-in-touch text-decoration-none">
                        {{ $settings['navbar_contact_button'] ?? 'Get in touch' }}
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-5 mt-5 border-top border-secondary border-opacity-10">
        <div class="container px-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-secondary">&copy; {{ $settings['footer_year'] ?? date('Y') }} {{ $settings['footer_name'] ?? 'WEL FOLIO' }}. {{ $settings['footer_built_text'] ?? 'Built with passion & precision.' }}
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <a href="{{ $settings['linkedin_url'] ?? '#' }}" class="text-secondary text-decoration-none mx-2 hover-white">LinkedIn</a>
                    <a href="{{ $settings['github_url'] ?? '#' }}" class="text-secondary text-decoration-none mx-2 hover-white">GitHub</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>