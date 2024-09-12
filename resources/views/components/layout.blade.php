@php
    $links = [
        [
            'src' => 'resources/images/web.png',
            'name' => 'Portofolio',
            'url' => 'https://mohamed-ali.vercel.app',
        ],
        [
            'src' => 'resources/images/linkedin.png',
            'name' => 'Linkedin',
            'url' => 'https://www.linkedin.com/in/mohamed-ali-940b25286',
        ],
        [
            'src' => 'resources/images/github.png',
            'name' => 'Github',
            'url' => 'https://github.com/MekuXXX',
        ],
        [
            'src' => 'resources/images/twitter.png',
            'name' => 'Twitter',
            'url' => 'https://x.com/Mohamed_Ali__M',
        ],
    ];
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10 flex flex-col min-h-screen">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/"><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo" /></a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="flex items-center gap-2">
                    <a href="/jobs/create">Post a Job</a>
                    <x-forms.form method="POST" action="/logout">
                        <button>Logout</button>
                    </x-forms.form>
                </div>
            @endauth

            @guest
                <div class="flex items-center gap-2">
                    <a href="/login">Sign In</a>
                    <a href="/register">Sign Up</a>
                </div>
            @endguest
        </nav>


        <main class="mt-10 max-w-[986px] mx-auto flex-1">
            {{ $slot }}
        </main>

        <footer class="text-sm border-t border-white/10 pt-4 pb-2 flex justify-between items-center">
            <p>Copyright &copy;{{ date('Y') }} Maded By <span class="font-bold italic text-gray-300">Mayushi</span>
            </p>
            <div class="flex gap-2">
                @foreach ($links as $link)
                    <div>
                        <a href="{{ $link['url'] }}">
                            <img src="{{ Vite::asset($link['src']) }}" alt="{{ $link['name'] }}"
                                class="object-cover w-5 h-5">
                        </a>
                    </div>
                @endforeach
            </div>
        </footer>
    </div>
</body>

</html>
