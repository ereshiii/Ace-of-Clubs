@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-extrabold text-[#C62828] mb-6">Welcome to the Ace of Clubs</h1>
    <h3 class="text-lg text-gray-300 mb-10 max-w-2xl mx-auto">
        Join a brotherhood of elite card players. Compete, socialize, and rise through the ranks in our exclusive Poker Club.
    </h3>
    

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-[#1F2937] rounded-2xl p-6 shadow-lg">
            <h2 class="text-xl font-semibold mb-2 text-[#C62828]">Join Us</h2>
            <p class="text-gray-400 mb-4">Become a member and take your seat at the table.</p>
            <a href="{{ route('join') }}" class="inline-block bg-[#C62828] text-white px-4 py-2 rounded hover:bg-red-700 transition">Apply Now</a>
        </div>
        <div class="bg-[#1F2937] rounded-2xl p-6 shadow-lg">
            <h2 class="text-xl font-semibold mb-2 text-[#C62828]">Upcoming Events</h2>
            <p class="text-gray-400 mb-4">Stay up to date with club tournaments and meetups.</p>
            <a href="{{ route('events') }}" class="inline-block bg-[#C62828] text-white px-4 py-2 rounded hover:bg-red-700 transition">View Events</a>
        </div>
        <div class="bg-[#1F2937] rounded-2xl p-6 shadow-lg">
            <h2 class="text-xl font-semibold mb-2 text-[#C62828]">Member Lounge</h2>
            <p class="text-gray-400 mb-4">Connect, strategize, and chill with fellow members.</p>
            <a href="{{ route('lounge') }}" class="inline-block bg-[#C62828] text-white px-4 py-2 rounded hover:bg-red-700 transition">Enter Lounge</a>
        </div>
    </div>

    <p class="text-gray-500 text-sm">
        Ready to prove your hand? Let the games begin.
    </p>
    
</div>
@endsection
