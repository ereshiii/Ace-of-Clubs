@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto bg-[#1F2937] rounded-2xl shadow-lg p-8 text-white">
    <h1 class="text-3xl font-bold text-[#C62828] mb-6">Upcoming Events</h1>

    <p class="text-lg text-gray-400 mb-4">Stay updated with the latest poker tournaments, games, and club activities. RSVP or register for events below!</p>

    <!-- Upcoming Events Section -->
    <div class="space-y-6">
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">Poker Night - May 15, 2025</h2>
            <p class="text-gray-300 mb-4">Join us for an exciting poker night filled with friendly competition. Whether you're a beginner or an expert, we have a seat for you!</p>
            <p class="text-gray-400 mb-4"><strong>Time:</strong> 7:00 PM - 11:00 PM</p>
            <p class="text-gray-400 mb-4"><strong>Location:</strong> Poker Club Lounge</p>
            <a href="#" class="text-[#C62828] underline hover:text-[#FF7043]">RSVP Now</a>
        </div>

        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">Tournament Signup - May 20, 2025</h2>
            <p class="text-gray-300 mb-4">The annual Poker Tournament is here! Sign up to compete for the grand prize and bragging rights!</p>
            <p class="text-gray-400 mb-4"><strong>Time:</strong> 12:00 PM - 5:00 PM</p>
            <p class="text-gray-400 mb-4"><strong>Location:</strong> Poker Club Tournament Room</p>
            <a href="#" class="text-[#C62828] underline hover:text-[#FF7043]">Register Now</a>
        </div>

        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">Live Stream Event - May 25, 2025</h2>
            <p class="text-gray-300 mb-4">Watch top players compete in our exclusive live stream event. Don’t miss out on the action!</p>
            <p class="text-gray-400 mb-4"><strong>Time:</strong> 6:00 PM - 9:00 PM</p>
            <p class="text-gray-400 mb-4"><strong>Location:</strong> Online (Link will be provided)</p>
            <a href="#" class="text-[#C62828] underline hover:text-[#FF7043]">Watch the Stream</a>
        </div>
    </div>

    <!-- Past Events Section -->
    <div class="mt-12 bg-[#0B1D3A] p-6 rounded-lg">
        <h2 class="text-2xl text-[#C62828] mb-4">Past Events</h2>
        <ul class="space-y-4 text-gray-300">
            <li>Poker Tournament - April 30, 2025</li>
            <li>Poker Night - April 15, 2025</li>
            <li>Charity Event - March 20, 2025</li>
        </ul>
    </div>
</div>
@endsection
