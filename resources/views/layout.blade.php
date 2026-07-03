<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Krishnapriya | Laravel Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f7f7f7;
            color: #222;
        }

        nav {
            background: #111;
            padding: 18px 8%;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 18px;
            font-weight: bold;
        }

        section {
            padding: 50px 8%;
        }

        .hero {
            background: white;
            padding: 80px 8%;
        }

        .card {
            background: white;
            padding: 22px;
            margin-bottom: 18px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .btn {
            display: inline-block;
            background: #111;
            color: white;
            padding: 12px 18px;
            text-decoration: none;
            border-radius: 6px;
        }

        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 20px;
        }

        span.skill {
            display: inline-block;
            background: white;
            padding: 10px 14px;
            margin: 6px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('skills') }}">Skills</a>
    <a href="{{ route('experience') }}">Experience</a>
    <a href="{{ route('projects') }}">Projects</a>
    <a href="{{ route('contact') }}">Contact</a>
</nav>

@yield('content')

<footer>
    <p>© {{ date('Y') }} Krishnapriya Anambalam Subran</p>
</footer>

</body>
</html>