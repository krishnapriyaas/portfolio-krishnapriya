@extends('layouts.app')

@section('title', 'EV Charging API | Krishnapriya')

@section('content')

<section class="pt-36 pb-24">

    <div class="container-custom">

        <a
            href="{{ route('home') }}#projects"
            class="font-semibold text-blue-400">

            ← Back to projects

        </a>


        <p class="section-label mt-12">
            Python / FastAPI
        </p>


        <h1
            class="max-w-4xl text-5xl
                   font-extrabold text-white">

            EV Charging Backend API

        </h1>


        <p
            class="mt-7 max-w-3xl text-xl
                   leading-9 text-slate-400">

            REST API project for managing
            electric-vehicle charging stations,
            users and charging sessions.

        </p>


        <div
            class="mt-10 flex flex-wrap gap-2">

            <span class="tag">Python</span>
            <span class="tag">FastAPI</span>
            <span class="tag">REST</span>
            <span class="tag">SQL</span>

        </div>


        <div
            class="mt-14 rounded-xl
                   border border-slate-800
                   bg-slate-900 p-7">

            <h2
                class="text-xl font-bold text-white">

                Example endpoints

            </h2>

<pre class="mt-6 overflow-x-auto text-sm leading-8 text-slate-300">
POST   /auth/login

GET    /stations

GET    /stations/{id}

POST   /charging-sessions

GET    /charging-sessions

POST   /payments
</pre>

        </div>

    </div>

</section>

@endsection