@props([
    'title' => 'Spacecards'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        .star {
            position: absolute;
            color: white;
            font-size: 20px;
            opacity: 0.35;
            filter: blur(1px);
            text-shadow:
                0 0 4px white,
                0 0 10px white;
            pointer-events: none;
        }

        .star-1 {
            top: 8px;
            left: 12%;
        }

        .star-2 {
            top: 25px;
            left: 38%;
            font-size: 14px;
        }

        .star-3 {
            top: 5px;
            left: 62%;
            font-size: 16px;
        }

        .star-4 {
            top: 30px;
            left: 82%;
            font-size: 22px;
        }

        .star-5 {
            top: 12px;
            left: 94%;
            font-size: 12px;
        }
    </style>
</head>

<body class="bg-gray-700 text-white min-h-screen">

    <nav class="relative bg-[#0B1026] p-4 overflow-hidden">

        <!-- Decorative stars -->
        <span class="star star-1">+</span>
        <span class="star star-2">+</span>
        <span class="star star-3">+</span>
        <span class="star star-4">+</span>
        <span class="star star-5">+</span>

<div class="relative max-w-6xl mx-auto flex items-center space-x-8">

    <a href="/" class="hover:text-gray-300">Home</a>
    <a href="/cards" class="hover:text-gray-300">Cards</a>

    @auth
        <a href="/collection" class="hover:text-gray-300">
            My Collection
        </a>

        <span class="text-[#D9F4FF]/60">
            {{ auth()->user()->name }}
        </span>

        <form method="POST" action="/logout">
            @csrf

            <button type="submit" class="hover:text-gray-300">
                Log out
            </button>
        </form>
    @else
        <a href="/login" class="hover:text-gray-300">
            Log in
        </a>

        <a href="/register" class="hover:text-gray-300">
            Register
        </a>
    @endauth

</div>

    </nav>

    <main class="max-w-6xl mx-auto p-6">
        {{ $slot }}
    </main>

</body>
</html>