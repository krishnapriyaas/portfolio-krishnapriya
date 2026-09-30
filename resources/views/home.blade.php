@extends('layouts.app')

@section(
    'title',
    'Krishnapriya | PHP Laravel Backend Developer'
)

@section('content')


{{-- HERO --}}

<section
    class="flex min-h-screen items-center
           pt-28">

    <div
        class="container-custom grid items-center
               gap-14 lg:grid-cols-2">


        <div>

            <p
                class="mb-5 text-sm font-semibold
                       uppercase tracking-[0.25em]
                       text-blue-400">

                PHP / Laravel Backend Developer

            </p>


            <h1
                class="max-w-3xl text-5xl font-extrabold
                       leading-tight tracking-tight text-white
                       md:text-6xl lg:text-7xl">

                Hi, I'm

                <span class="text-blue-500">
                    Krishnapriya.
                </span>

            </h1>


            <h2
                class="mt-7 max-w-2xl text-2xl
                       font-semibold leading-relaxed
                       text-slate-300">

                I build reliable backend systems,
                REST APIs and business applications.

            </h2>


            <p
                class="mt-6 max-w-2xl text-lg
                       leading-8 text-slate-400">

                Backend-focused software developer with
                professional experience building CRM,
                ERP and SaaS applications using
                PHP, Laravel and MySQL.

            </p>


            <div
                class="mt-7 flex flex-wrap gap-4
                       text-sm text-slate-400">

                <span>
                    📍 Germany
                </span>

                <span>
                    •
                </span>

                <span>
                    Available for opportunities
                </span>

            </div>


            <div
                class="mt-9 flex flex-wrap gap-4">

                <a
                    href="#projects"
                    class="rounded-lg bg-blue-600
                           px-6 py-3 font-semibold
                           text-white transition
                           hover:bg-blue-500">

                    View Projects

                </a>


                <a
                    href="https://github.com/krishnapriyaas"
                    target="_blank"
                    class="rounded-lg border
                           border-slate-700 px-6 py-3
                           font-semibold text-white
                           transition hover:border-slate-500
                           hover:bg-slate-900">

                    GitHub

                </a>


                <a
                    href="{{ asset('cv/Krishnapriya-CV.pdf') }}"
                    target="_blank"
                    class="rounded-lg border
                           border-slate-700 px-6 py-3
                           font-semibold text-white
                           transition hover:border-slate-500
                           hover:bg-slate-900">

                    Download CV

                </a>

            </div>

        </div>



        {{-- CODE CARD --}}

        <div
            class="rounded-2xl border border-slate-800
                   bg-slate-900 shadow-2xl">

            <div
                class="flex gap-2 border-b border-slate-800
                       px-5 py-4">

                <span
                    class="h-3 w-3 rounded-full bg-red-500">
                </span>

                <span
                    class="h-3 w-3 rounded-full bg-yellow-500">
                </span>

                <span
                    class="h-3 w-3 rounded-full bg-green-500">
                </span>

            </div>


            <pre
                class="overflow-x-auto p-6
                       text-sm leading-7
                       text-slate-300"><code><span class="text-purple-400">class</span> <span class="text-yellow-300">Developer</span>
{
    <span class="text-blue-400">public string</span> $name =
        <span class="text-green-400">'Krishnapriya'</span>;

    <span class="text-blue-400">public array</span> $stack = [
        <span class="text-green-400">'PHP'</span>,
        <span class="text-green-400">'Laravel'</span>,
        <span class="text-green-400">'MySQL'</span>,
        <span class="text-green-400">'REST APIs'</span>,
    ];

    <span class="text-blue-400">public string</span> $location =
        <span class="text-green-400">'Germany'</span>;

    <span class="text-purple-400">public function</span>
    <span class="text-yellow-300">build</span>()
    {
        <span class="text-purple-400">return</span>
        <span class="text-green-400">'Reliable systems'</span>;
    }
}</code></pre>

        </div>

    </div>

</section>



{{-- ABOUT --}}

<section
    id="about"
    class="section border-t border-slate-900">

    <div class="container-custom">

        <p class="section-label">
            About me
        </p>

        <h2 class="section-title">
            Backend engineering with
            a business-focused mindset.
        </h2>


        <div
            class="grid gap-14 lg:grid-cols-2">

            <div
                class="space-y-5 text-lg
                       leading-8 text-slate-400">

                <p>

                    I'm a backend-focused software developer
                    with professional experience building
                    CRM, ERP and SaaS applications using
                    PHP, Laravel and MySQL.

                </p>


                <p>

                    My work has included REST API development,
                    third-party integrations, webhook processing,
                    database optimization and
                    business-process automation.

                </p>


                <p>

                    I enjoy translating business requirements
                    into maintainable backend systems and
                    continuously expanding my knowledge in
                    Golang, FastAPI, AWS and
                    modern software architecture.

                </p>

            </div>


            <div
                class="grid grid-cols-2 gap-5">


                <div
                    class="rounded-xl border
                           border-slate-800
                           bg-slate-900 p-6">

                    <p
                        class="text-xs font-semibold
                               uppercase tracking-widest
                               text-slate-500">

                        Location

                    </p>

                    <p
                        class="mt-3 font-semibold text-white">

                        Germany

                    </p>

                </div>



                <div
                    class="rounded-xl border
                           border-slate-800
                           bg-slate-900 p-6">

                    <p
                        class="text-xs font-semibold
                               uppercase tracking-widest
                               text-slate-500">

                        Main Stack

                    </p>

                    <p
                        class="mt-3 font-semibold text-white">

                        PHP / Laravel

                    </p>

                </div>



                <div
                    class="rounded-xl border
                           border-slate-800
                           bg-slate-900 p-6">

                    <p
                        class="text-xs font-semibold
                               uppercase tracking-widest
                               text-slate-500">

                        Focus

                    </p>

                    <p
                        class="mt-3 font-semibold text-white">

                        Backend / APIs

                    </p>

                </div>



                <div
                    class="rounded-xl border
                           border-slate-800
                           bg-slate-900 p-6">

                    <p
                        class="text-xs font-semibold
                               uppercase tracking-widest
                               text-slate-500">

                        Availability

                    </p>

                    <p
                        class="mt-3 font-semibold text-white">

                        Immediately

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- EXPERIENCE --}}

<section
    id="experience"
    class="section bg-slate-900/40">

    <div class="container-custom">

        <p class="section-label">
            Experience
        </p>

        <h2 class="section-title">
            Professional experience
        </h2>



        <div
            class="divide-y divide-slate-800
                   border-y border-slate-800">


            {{-- JOB 1 --}}

            <article
                class="grid gap-6 py-10
                       md:grid-cols-[180px_1fr]">

                <p
                    class="font-medium text-slate-500">

                    2023 — 2025

                </p>


                <div>

                    <h3
                        class="text-2xl font-bold text-white">

                        Backend Developer

                    </h3>

                    <p
                        class="mt-1 font-semibold text-blue-400">

                        Competitive Cracker /
                        Pro Team CRM

                    </p>


                    <p
                        class="mt-4 max-w-3xl
                               leading-7 text-slate-400">

                        Developed and maintained CRM backend
                        services, REST APIs, webhook integrations
                        and automated business workflows.

                    </p>


                    <div
                        class="mt-5 flex flex-wrap gap-2">

                        <span class="tag">PHP 8</span>
                        <span class="tag">Laravel</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Vue.js</span>
                        <span class="tag">REST API</span>
                        <span class="tag">Webhooks</span>

                    </div>

                </div>

            </article>



            {{-- JOB 2 --}}

            <article
                class="grid gap-6 py-10
                       md:grid-cols-[180px_1fr]">

                <p
                    class="font-medium text-slate-500">

                    2023

                </p>


                <div>

                    <h3
                        class="text-2xl font-bold text-white">

                        PHP Backend Developer

                    </h3>

                    <p
                        class="mt-1 font-semibold text-blue-400">

                        Levantar Solutions

                    </p>


                    <p
                        class="mt-4 max-w-3xl
                               leading-7 text-slate-400">

                        Developed ERP functionality for
                        vendor onboarding, order management,
                        reporting and backend business processes.

                    </p>


                    <div
                        class="mt-5 flex flex-wrap gap-2">

                        <span class="tag">PHP</span>
                        <span class="tag">Laravel</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">REST API</span>

                    </div>

                </div>

            </article>



            {{-- JOB 3 --}}

            <article
                class="grid gap-6 py-10
                       md:grid-cols-[180px_1fr]">

                <p
                    class="font-medium text-slate-500">

                    2020 — 2022

                </p>


                <div>

                    <h3
                        class="text-2xl font-bold text-white">

                        Software Developer

                    </h3>

                    <p
                        class="mt-1 font-semibold text-blue-400">

                        Daily Skills

                    </p>


                    <p
                        class="mt-4 max-w-3xl
                               leading-7 text-slate-400">

                        Developed an e-learning platform
                        supporting online classes, quizzes,
                        certificates and user management.

                    </p>


                    <div
                        class="mt-5 flex flex-wrap gap-2">

                        <span class="tag">Laravel</span>
                        <span class="tag">PHP</span>
                        <span class="tag">WordPress</span>
                        <span class="tag">JavaScript</span>

                    </div>

                </div>

            </article>


        </div>

    </div>

</section>



{{-- PROJECTS --}}

<section
    id="projects"
    class="section">

    <div class="container-custom">

        <p class="section-label">
            Featured projects
        </p>

        <h2 class="section-title">
            Selected backend work
        </h2>


        <div class="grid gap-7 lg:grid-cols-3">


            {{-- PROJECT 1 --}}

            <article
                class="group rounded-2xl border
                       border-slate-800 bg-slate-900
                       p-7 transition
                       hover:-translate-y-1
                       hover:border-blue-500">

                <p
                    class="text-sm font-semibold text-blue-400">

                    01 / CRM & AUTOMATION

                </p>


                <h3
                    class="mt-5 text-2xl font-bold text-white">

                    CRM & Lead Automation Platform

                </h3>


                <p
                    class="mt-4 leading-7 text-slate-400">

                    CRM backend platform for automatically
                    processing incoming leads, scheduling
                    follow-ups and integrating external
                    business services.

                </p>


                <div
                    class="mt-6 flex flex-wrap gap-2">

                    <span class="tag">Laravel</span>
                    <span class="tag">PHP</span>
                    <span class="tag">MySQL</span>
                    <span class="tag">Vue.js</span>
                    <span class="tag">Webhooks</span>

                </div>


                <div
                    class="mt-8 grid grid-cols-2 gap-4">

                    <div>

                        <p
                            class="text-2xl font-bold
                                   text-white">

                            60%

                        </p>

                        <p
                            class="mt-1 text-xs
                                   text-slate-500">

                            Less manual work

                        </p>

                    </div>


                    <div>

                        <p
                            class="text-2xl font-bold
                                   text-white">

                            35%

                        </p>

                        <p
                            class="mt-1 text-xs
                                   text-slate-500">

                            Faster response

                        </p>

                    </div>

                </div>


                <a
                    href="{{ route('projects.crm') }}"
                    class="mt-8 inline-block
                           font-semibold text-blue-400
                           hover:text-blue-300">

                    View case study →

                </a>

            </article>



            {{-- PROJECT 2 --}}

            <article
                class="group rounded-2xl border
                       border-slate-800 bg-slate-900
                       p-7 transition
                       hover:-translate-y-1
                       hover:border-blue-500">

                <p
                    class="text-sm font-semibold text-blue-400">

                    02 / PUBLIC PROJECT

                </p>


                <h3
                    class="mt-5 text-2xl font-bold text-white">

                    Laravel CRM REST API

                </h3>


                <p
                    class="mt-4 leading-7 text-slate-400">

                    Production-style CRM backend demonstrating
                    authentication, role-based access,
                    validation, service architecture,
                    APIs and automated tests.

                </p>


                <div
                    class="mt-6 flex flex-wrap gap-2">

                    <span class="tag">Laravel</span>
                    <span class="tag">REST</span>
                    <span class="tag">PHPUnit</span>
                    <span class="tag">MySQL</span>
                    <span class="tag">Docker</span>

                </div>


                <a
                    href="{{ route('projects.laravel-crm') }}"
                    class="mt-8 inline-block
                           font-semibold text-blue-400
                           hover:text-blue-300">

                    View project →

                </a>

            </article>



            {{-- PROJECT 3 --}}

            <article
                class="group rounded-2xl border
                       border-slate-800 bg-slate-900
                       p-7 transition
                       hover:-translate-y-1
                       hover:border-blue-500">

                <p
                    class="text-sm font-semibold text-blue-400">

                    03 / API PROJECT

                </p>


                <h3
                    class="mt-5 text-2xl font-bold text-white">

                    EV Charging Backend API

                </h3>


                <p
                    class="mt-4 leading-7 text-slate-400">

                    REST backend for managing charging
                    stations, charging sessions,
                    users and API-based operations.

                </p>


                <div
                    class="mt-6 flex flex-wrap gap-2">

                    <span class="tag">Python</span>
                    <span class="tag">FastAPI</span>
                    <span class="tag">REST</span>
                    <span class="tag">SQL</span>

                </div>


                <a
                    href="{{ route('projects.ev-charging') }}"
                    class="mt-8 inline-block
                           font-semibold text-blue-400
                           hover:text-blue-300">

                    View project →

                </a>

            </article>


        </div>

    </div>

</section>



{{-- SKILLS --}}

<section
    id="skills"
    class="section bg-slate-900/40">

    <div class="container-custom">

        <p class="section-label">
            Tech stack
        </p>

        <h2 class="section-title">
            Technologies I work with
        </h2>


        <div
            class="grid gap-6 md:grid-cols-2
                   lg:grid-cols-4">


            <div
                class="rounded-xl border border-slate-800
                       bg-slate-900 p-6">

                <h3
                    class="text-lg font-bold text-white">

                    Backend

                </h3>

                <div
                    class="mt-5 flex flex-wrap gap-2">

                    <span class="tag">PHP 8</span>
                    <span class="tag">Laravel</span>
                    <span class="tag">OOP</span>
                    <span class="tag">MVC</span>
                    <span class="tag">REST APIs</span>
                    <span class="tag">Webhooks</span>

                </div>

            </div>


            <div
                class="rounded-xl border border-slate-800
                       bg-slate-900 p-6">

                <h3
                    class="text-lg font-bold text-white">

                    Database

                </h3>

                <div
                    class="mt-5 flex flex-wrap gap-2">

                    <span class="tag">MySQL</span>
                    <span class="tag">MariaDB</span>
                    <span class="tag">SQL</span>
                    <span class="tag">Indexing</span>
                    <span class="tag">Optimization</span>

                </div>

            </div>


            <div
                class="rounded-xl border border-slate-800
                       bg-slate-900 p-6">

                <h3
                    class="text-lg font-bold text-white">

                    Frontend

                </h3>

                <div
                    class="mt-5 flex flex-wrap gap-2">

                    <span class="tag">JavaScript</span>
                    <span class="tag">Vue.js</span>
                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">Tailwind</span>

                </div>

            </div>


            <div
                class="rounded-xl border border-slate-800
                       bg-slate-900 p-6">

                <h3
                    class="text-lg font-bold text-white">

                    Engineering

                </h3>

                <div
                    class="mt-5 flex flex-wrap gap-2">

                    <span class="tag">SOLID</span>
                    <span class="tag">Clean Code</span>
                    <span class="tag">PHPUnit</span>
                    <span class="tag">Git</span>
                    <span class="tag">CI/CD</span>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- CONTACT --}}

<section
    id="contact"
    class="section">

    <div
        class="container-custom grid gap-14
               lg:grid-cols-2">

        <div>

            <p class="section-label">
                Contact
            </p>

            <h2 class="section-title">
                Let's build something useful.
            </h2>


            <p
                class="max-w-lg text-lg
                       leading-8 text-slate-400">

                I'm currently open to PHP/Laravel
                backend and full-stack opportunities
                in Germany.

            </p>


            <div
                class="mt-8 space-y-3
                       text-slate-300">

                <p>
                    📍 Germany
                </p>

                <p>
                    💼 Available immediately
                </p>

                <p class="flex items-center gap-3">
    🔗
                <a
                    href="https://www.linkedin.com/in/krishna-priya-anambalam-subran-a20472148"
                    target="_blank"
                    class="text-blue-400 hover:text-blue-300"
                >
                    LinkedIn
                </a>

                <span>/</span>

                <a
                    href="https://github.com/krishnapriyaas"
                    target="_blank"
                    class="text-blue-400 hover:text-blue-300"
                >
                    GitHub
                </a>
            </p>

            </div>

        </div>



        <div
            class="rounded-2xl border
                   border-slate-800
                   bg-slate-900 p-7">


            @if(session('success'))

                <div
                    class="mb-6 rounded-lg border
                           border-green-800
                           bg-green-950/50
                           px-4 py-3 text-green-300">

                    {{ session('success') }}

                </div>

            @endif


            <form
                method="POST"
                action="{{ route('contact.store') }}"
                class="space-y-5">

                @csrf


                <div>

                    <label
                        class="mb-2 block text-sm
                               font-medium text-slate-300">

                        Name

                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="w-full rounded-lg
                               border border-slate-700
                               bg-slate-950 px-4 py-3
                               text-white outline-none
                               transition focus:border-blue-500"
                        required>

                    @error('name')

                    <p
                        class="mt-2 text-sm text-red-400">

                        {{ $message }}

                    </p>

                    @enderror

                </div>



                <div>

                    <label
                        class="mb-2 block text-sm
                               font-medium text-slate-300">

                        Email

                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full rounded-lg
                               border border-slate-700
                               bg-slate-950 px-4 py-3
                               text-white outline-none
                               transition focus:border-blue-500"
                        required>

                    @error('email')

                    <p
                        class="mt-2 text-sm text-red-400">

                        {{ $message }}

                    </p>

                    @enderror

                </div>



                <div>

                    <label
                        class="mb-2 block text-sm
                               font-medium text-slate-300">

                        Message

                    </label>

                    <textarea
                        name="message"
                        rows="6"
                        class="w-full rounded-lg
                               border border-slate-700
                               bg-slate-950 px-4 py-3
                               text-white outline-none
                               transition focus:border-blue-500"
                        required>{{ old('message') }}</textarea>

                    @error('message')

                    <p
                        class="mt-2 text-sm text-red-400">

                        {{ $message }}

                    </p>

                    @enderror

                </div>


                <button
                    type="submit"
                    class="w-full rounded-lg
                           bg-blue-600 px-6 py-3
                           font-semibold text-white
                           transition hover:bg-blue-500">

                    Send Message

                </button>

            </form>

        </div>

    </div>

</section>

@endsection