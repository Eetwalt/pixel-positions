<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">
                </a>
            </div>
            <div class="space-x-2">
                <x-nav-link href="/" :active="request()->is('/')">Jobs</x-nav-link>
                <x-nav-link href="/careers" :active="request()->is('/careers')">Careers</x-nav-link>
                <x-nav-link href="/salaries" :active="request()->is('/salaries')">Salaries</x-nav-link>
                <x-nav-link href="/companies" :active="request()->is('/companies')">Companies</x-nav-link>
                <x-nav-link href="/todos" :active="request()->is('/todos')">Todos</x-nav-link>
            </div>

            @auth
                <div class="flex space-x-2 items-center">
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <x-forms.button>Log Out</x-forms.button>
                    </form>
                    <x-nav-link href="/jobs/create" :active="request()->is('/jobs/create')">Post a Job</x-nav-link>
                </div>
            @endauth

            @guest
                <div class="space-x-2">
                    <x-nav-link href="/login" :active="request()->is('/login')">Login</x-nav-link>
                    <x-nav-link href="/register" :active="request()->is('/register')">Register</x-nav-link>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
