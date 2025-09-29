<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Student Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow-md">
        <div class="max-w-5xl mx-auto px-4">
            <div class="flex justify-between items-center h-14">
                <div class="font-bold text-lg">Student Panel</div>
                <div class="hidden md:flex items-center space-x-4">
                    <form action="{{ route('student.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:underline">Logout</button>
                    </form>
                </div>
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="menu-btn" class="focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-red-700 px-4 py-3 space-y-2">
            <form action="{{ route('student.logout') }}" method="POST" class="block">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto p-4 md:p-6">
        @yield('content')
    </main>

    <script>
        // Toggle mobile menu
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
