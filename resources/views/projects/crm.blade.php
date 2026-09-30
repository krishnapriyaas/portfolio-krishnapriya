@extends('layouts.app')

@section(
    'title',
    'CRM Lead Automation | Krishnapriya'
)

@section('content')

<section class="pt-36 pb-20">

    <div class="container-custom">

        <a
            href="{{ route('home') }}#projects"
            class="text-sm font-semibold
                   text-blue-400 hover:text-blue-300">

            ← Back to projects

        </a>


        <p class="section-label mt-12">
            CRM / SaaS / Automation
        </p>


        <h1
            class="max-w-4xl text-4xl
                   font-extrabold text-white
                   md:text-6xl">

            CRM & Lead
            Automation Platform

        </h1>


        <p
            class="mt-7 max-w-3xl text-xl
                   leading-9 text-slate-400">

            Backend platform designed to automate
            lead processing, customer follow-ups
            and integrations between external
            marketing and communication systems.

        </p>



        <div
            class="mt-10 flex flex-wrap gap-2">

            <span class="tag">PHP 8</span>
            <span class="tag">Laravel</span>
            <span class="tag">MySQL</span>
            <span class="tag">Vue.js</span>
            <span class="tag">REST APIs</span>
            <span class="tag">Webhooks</span>
            <span class="tag">Facebook Graph API</span>

        </div>

    </div>

</section>



<section class="pb-24">

    <div
        class="container-custom grid gap-16
               lg:grid-cols-[1fr_300px]">

        <div class="space-y-14">


            <section>

                <h2
                    class="text-2xl font-bold text-white">

                    Overview

                </h2>

                <p
                    class="mt-5 leading-8 text-slate-400">

                    The platform supported lead and
                    customer-management workflows for
                    sales teams. My responsibilities
                    focused mainly on Laravel backend
                    development, API integrations,
                    database operations and automation.

                </p>

            </section>



            <section>

                <h2
                    class="text-2xl font-bold text-white">

                    The Challenge

                </h2>

                <p
                    class="mt-5 leading-8 text-slate-400">

                    Incoming leads from marketing channels
                    required significant manual processing.
                    Sales staff also needed a more efficient
                    way to schedule follow-ups and synchronize
                    information between multiple systems.

                </p>

            </section>



            <section>

                <h2
                    class="text-2xl font-bold text-white">

                    My Contribution

                </h2>


                <ul
                    class="mt-6 space-y-4
                           text-slate-400">

                    <li>
                        ✓ Developed REST API endpoints
                        using Laravel.
                    </li>

                    <li>
                        ✓ Integrated Facebook Lead Ads
                        through webhook processing.
                    </li>

                    <li>
                        ✓ Built automated follow-up
                        scheduling workflows.
                    </li>

                    <li>
                        ✓ Integrated Google Sheets APIs.
                    </li>

                    <li>
                        ✓ Implemented WhatsApp-based
                        messaging functionality.
                    </li>

                    <li>
                        ✓ Improved MySQL queries and
                        database performance.
                    </li>

                    <li>
                        ✓ Maintained internal CRM
                        backend services.
                    </li>

                </ul>

            </section>



            <section>

                <h2
                    class="text-2xl font-bold text-white">

                    Architecture

                </h2>


                <div
                    class="mt-6 rounded-xl
                           border border-slate-800
                           bg-slate-900 p-7">

<pre class="overflow-x-auto text-sm leading-7 text-slate-300">
Facebook Lead Ads
        │
        ▼
Laravel Webhook
        │
        ▼
Request Validation
        │
        ▼
Lead Service
        │
        ├────────► MySQL
        │
        ▼
Automation / Jobs
        │
   ┌────┴─────────┐
   ▼              ▼
Google Sheets   WhatsApp
</pre>

                </div>

            </section>



            <section>

                <h2
                    class="text-2xl font-bold text-white">

                    Results

                </h2>


                <div
                    class="mt-7 grid gap-5
                           sm:grid-cols-2">

                    <div
                        class="rounded-xl border
                               border-slate-800
                               bg-slate-900 p-7">

                        <p
                            class="text-4xl font-bold
                                   text-white">

                            ~60%

                        </p>

                        <p
                            class="mt-3 text-slate-400">

                            Reduction in manual processing
                            through automation.

                        </p>

                    </div>


                    <div
                        class="rounded-xl border
                               border-slate-800
                               bg-slate-900 p-7">

                        <p
                            class="text-4xl font-bold
                                   text-white">

                            ~35%

                        </p>

                        <p
                            class="mt-3 text-slate-400">

                            Improvement in lead-response
                            workflow time.

                        </p>

                    </div>

                </div>

            </section>



            <section>

                <h2
                    class="text-2xl font-bold text-white">

                    Source Code

                </h2>

                <p
                    class="mt-5 leading-8 text-slate-400">

                    The original application was developed
                    as part of professional work, so the
                    production source code is not publicly
                    available. This case study focuses on
                    my responsibilities, architecture and
                    technical contribution.

                </p>

            </section>

        </div>



        <aside>

            <div
                class="sticky top-28 rounded-xl
                       border border-slate-800
                       bg-slate-900 p-6">

                <p
                    class="text-xs font-semibold
                           uppercase tracking-widest
                           text-slate-500">

                    Role

                </p>

                <p
                    class="mt-2 font-semibold text-white">

                    Backend Developer

                </p>


                <hr
                    class="my-5 border-slate-800">


                <p
                    class="text-xs font-semibold
                           uppercase tracking-widest
                           text-slate-500">

                    Main Technologies

                </p>

                <p
                    class="mt-2 leading-7 text-slate-300">

                    PHP 8<br>
                    Laravel<br>
                    MySQL<br>
                    REST API<br>
                    Vue.js

                </p>


                <hr
                    class="my-5 border-slate-800">


                <p
                    class="text-xs font-semibold
                           uppercase tracking-widest
                           text-slate-500">

                    Project Type

                </p>

                <p
                    class="mt-2 text-slate-300">

                    CRM / SaaS

                </p>

            </div>

        </aside>

    </div>

</section>

@endsection