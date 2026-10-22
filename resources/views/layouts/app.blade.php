<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Portfolio of Krishnapriya Anambalam Subran, PHP and Laravel Backend Developer based in Germany.">

    <meta name="keywords"
          content="PHP Developer, Laravel Developer, Backend Developer, Germany, REST API, MySQL">

    <meta name="author"
          content="Krishnapriya Anambalam Subran">

    <title>
        @yield(
            'title',
            'Krishnapriya | PHP Laravel Backend Developer'
        )
    </title>

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body>

<header
    class="fixed inset-x-0 top-0 z-50
           border-b border-slate-800/80
           bg-slate-950/90 backdrop-blur">

    <div
        class="container-custom flex h-20
               items-center justify-between">

        <a href="{{ route('home') }}"
           class="text-xl font-bold text-white">

            Krishnapriya<span class="text-blue-500">.</span>

        </a>


        <nav
            class="hidden items-center gap-7
                   text-sm font-medium text-slate-300 md:flex">

            <a href="#about"
               class="transition hover:text-white">
                About
            </a>

            <a href="#experience"
               class="transition hover:text-white">
                Experience
            </a>

            <a href="#projects"
               class="transition hover:text-white">
                Projects
            </a>

            <a href="#skills"
               class="transition hover:text-white">
                Skills
            </a>

            <a href="#contact"
               class="transition hover:text-white">
                Contact
            </a>

            <a
                href="{{ asset('cv/Krishnapriya-CV.pdf') }}"
                target="_blank"
                class="rounded-lg bg-blue-600 px-5 py-2.5
                       font-semibold text-white transition
                       hover:bg-blue-500">

                Download CV

            </a>

        </nav>

    </div>

</header>


<main>

    @yield('content')

</main>


<footer class="border-t border-slate-800 py-10">

    <div
        class="container-custom flex flex-col gap-4
               text-sm text-slate-500
               sm:flex-row sm:items-center
               sm:justify-between">

        <p>

            © {{ date('Y') }}
            Krishnapriya Anambalam Subran

        </p>

        <div class="flex gap-5">

            
            <a href="https://github.com/krishnapriyaas"
                target="_blank"
                rel="noopener noreferrer"
                class="hover:text-white">
                    GitHub
                </a>

                <a href="https://www.linkedin.com/in/krishna-priya-anambalam-subran-a20472148/"
                target="_blank"
                rel="noopener noreferrer"
                class="hover:text-white">
                    LinkedIn
                </a>

        </div>

    </div>

</footer>

</body>

</html>