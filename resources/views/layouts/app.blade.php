<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ace of Clubs</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

    <header>
        <nav class="bg-[#0B1D3A]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex-shrink-0 flex items-center justify-center h-full text-xl font-bold text-[#C62828]">
                        Ace of club
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-4">
                            <a href="{{ route('home') }}" class="nav-link">Home</a> 
                            <a href="{{ route('hierarchy') }}" class="nav-link">Hierarchy</a>
                            <a href="{{ route('lounge') }}" class="nav-link">Lounge</a>
                            <a href="{{ route('events') }}" class="nav-link">Events</a>
                            <a href="{{ route('rules') }}" class="nav-link">Rules</a>
                            <a href="{{ route('join') }}" class="nav-link">Join</a>
                            <a href="{{ route('login') }}" class="nav-link">Login</a>

                            <!-- 
                            <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                            <a href="{{ route('admin') }}" class="nav-link">Admin</a>
                            <a href="{{ route('members') }}" class="nav-link">Members</a>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-10 px-4 max-w-7xl mx-auto">
        @yield('content')
    </main>

    <footer class="text-center text-gray-400 py-6 border-t border-gray-700 mt-10">
        <p class="text-sm text-gray-300 mb-10 max-w-2xl mx-auto italic">
            "Unlock Your Potential with the Ace of Clubs: A Symbol of New Beginnings, Financial Success, and Endless Possibilities."
        </p>
        &copy; {{ date('Y') }} Poker Club. All rights reserved.
    </footer>
    
</body>
</html>