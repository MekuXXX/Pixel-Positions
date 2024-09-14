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
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

</head>

<body class="bg-black text-white font-hanken-grotesk flex flex-col min-h-screen">
    <nav class="bg-white/10 shadow-md py-4 px-10">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo" class="h-8">
                </a>
            </div>

            <div class="flex items-center gap-4">
                @auth
                    <x-button href="/jobs/create"
                        class="font-bold bg-blue-500 hover:bg-blue-700 py-3 px-2 rounded-xl hover:text-white">
                        Post a Job
                    </x-button>
                    <x-forms.form method="POST" action="/logout">
                        <button class="font-bold">Logout</button>
                    </x-forms.form>
                @endauth

                @guest
                    <x-button href="/login" class="font-bold">Sign In</x-button>
                    <x-button href="/register" class="font-bold">Sign Up</x-button>
                @endguest
            </div>
        </div>
    </nav>

    <main class="mt-10 max-w-[1186px] mx-auto flex-1 px-10">
        {{ $slot }}
    </main>

    <footer class="text-sm border-t border-white/10 pt-4 pb-2 flex justify-between items-center px-10 mt-4">
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
</body>

</html>
