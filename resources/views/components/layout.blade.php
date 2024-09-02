<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Recap - 1</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="container">
        <header class="border-bottom lh-1 py-3">
            @auth
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="link-secondary" href="#">Subscribe</a>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo text-body-emphasis text-decoration-none"
                            href="#">{{ Auth::user()->name }}</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="link-secondary" href="#" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="mx-3" role="img" viewBox="0 0 24 24">
                                <title>Search</title>
                                <circle cx="10.5" cy="10.5" r="7.5" />
                                <path d="M21 21l-5.2-5.2" />
                            </svg>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button class="btn btn-sm btn-outline-secondary" type="submit">Logout</button>
                        </form>

                    </div>
                </div>
            @endauth

            @guest
                Sono ospite - Login e Registrati
            @endguest
        </header>

        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                <a class="nav-item nav-link link-body-emphasis active" href="#">World</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">U.S.</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Technology</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
                <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
            </nav>
        </div>
    </div>

    <main class="container">
        {{ $slot }}
    </main>

    <footer class="py-5 text-center text-body-secondary bg-body-tertiary">

    </footer>


</body>

</html>
