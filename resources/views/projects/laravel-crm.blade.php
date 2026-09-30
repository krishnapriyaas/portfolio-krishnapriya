@extends('layouts.app')

@section('title', 'Laravel CRM API | Krishnapriya')

@section('content')

<section class="pt-36 pb-24">

    <div class="container-custom">

        <a
            href="{{ route('home') }}#projects"
            class="font-semibold text-blue-400">

            ← Back to projects

        </a>


        <p class="section-label mt-12">
            Public Backend Project
        </p>


        <h1
            class="max-w-4xl text-5xl
                   font-extrabold text-white">

            Laravel CRM REST API

        </h1>


        <p
            class="mt-7 max-w-3xl text-xl
                   leading-9 text-slate-400">

            A portfolio backend project demonstrating
            professional Laravel architecture,
            authentication, authorization,
            validation and testing.

        </p>



        <div
            class="mt-12 grid gap-6
                   md:grid-cols-2">

            <div
                class="rounded-xl border border-slate-800
                       bg-slate-900 p-7">

                <h2
                    class="text-xl font-bold text-white">

                    Features

                </h2>

                <ul
                    class="mt-5 space-y-3 text-slate-400">

                    <li>✓ User authentication</li>
                    <li>✓ Roles and permissions</li>
                    <li>✓ Customer management</li>
                    <li>✓ Lead management</li>
                    <li>✓ Tasks and follow-ups</li>
                    <li>✓ REST APIs</li>
                    <li>✓ Pagination</li>
                    <li>✓ Filtering</li>
                    <li>✓ Validation</li>
                    <li>✓ Automated tests</li>

                </ul>

            </div>



            <div
                class="rounded-xl border border-slate-800
                       bg-slate-900 p-7">

                <h2
                    class="text-xl font-bold text-white">

                    Architecture

                </h2>

<pre class="mt-5 overflow-x-auto text-sm leading-7 text-slate-300">
Request
   ↓
Controller
   ↓
Form Request
   ↓
Service
   ↓
Eloquent Model
   ↓
MySQL
   ↓
API Resource
   ↓
JSON Response
</pre>

            </div>

        </div>

    </div>

</section>

@endsection