<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background: linear-gradient(120deg, #f3f4f6 0%, #e5e7eb 100%);
            font-family: 'Nunito', sans-serif;
            color: #374151;
        }

        #app {
            min-height: 100vh;
            background: transparent;
        }

        .content-wrapper {
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            background: white;
            transition: all 0.3s ease;
        }

        .content-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .accent-border {
            border: none;
            position: relative;
            padding: 25px;
            margin: 20px 0;
            background: linear-gradient(to right bottom, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.3));
            backdrop-filter: blur(10px);
            border-radius: 15px;
        }

        .custom-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem;
        }

        .decorative-line {
            height: 2px;
            background: linear-gradient(to right, #4f46e5, #7c3aed);
            margin: 25px 0;
            border-radius: 2px;
            opacity: 0.7;
        }

        main {
            padding: 2rem;
            position: relative;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 12px;
        }

        main::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            height: 3px;
            background: linear-gradient(to right, #4f46e5, #7c3aed);
            border-radius: 3px;
        }

        /* Subtle animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .content-wrapper {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="custom-container">
            <div class="content-wrapper">
                <div class="accent-border">
                    <main>
                        <div class="decorative-line"></div>
                        @yield('content')
                        <div class="decorative-line"></div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>