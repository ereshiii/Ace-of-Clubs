@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto bg-[#1F2937] rounded-2xl shadow-lg p-8 text-white">
    <h1 class="text-3xl font-bold text-[#C62828] mb-6">Poker Club Lounge</h1>

    <p class="text-lg text-gray-400 mb-6">Welcome to the Poker Club Lounge! Here you can relax, chat with fellow members, and stay up-to-date with the latest club news and events.</p>

    <!-- Community Discussions Section -->
    <div class="bg-[#0B1D3A] p-6 rounded-lg mb-8">
        <h2 class="text-2xl text-[#C62828] mb-4">Community Discussions</h2>
        <div class="space-y-4">
            <div class="bg-[#263238] p-4 rounded-lg">
                <h3 class="text-xl font-bold text-[#FF7043]">Poker Strategy Tips</h3>
                <p class="text-gray-300">Join the conversation and share your best poker strategies. Whether you’re a pro or just starting, we’re all here to learn!</p>
                <a href="#" class="text-[#C62828] underline hover:text-[#FF7043]">Join Discussion</a>
            </div>

            <div class="bg-[#263238] p-4 rounded-lg">
                <h3 class="text-xl font-bold text-[#FF7043]">Tournament Preparation</h3>
                <p class="text-gray-300">Let’s talk about the upcoming tournament! Share your thoughts, tips, and tricks to make sure you’re ready for the competition.</p>
                <a href="#" class="text-[#C62828] underline hover:text-[#FF7043]">Join Discussion</a>
            </div>

            <div class="bg-[#263238] p-4 rounded-lg">
                <h3 class="text-xl font-bold text-[#FF7043]">Poker Night Recap</h3>
                <p class="text-gray-300">How did you do at the last poker night? Share your experience, funny moments, and wins!</p>
                <a href="#" class="text-[#C62828] underline hover:text-[#FF7043]">Join Discussion</a>
            </div>
        </div>
    </div>

    <!-- Recent Announcements Section -->
    <div class="bg-[#0B1D3A] p-6 rounded-lg mb-8">
        <h2 class="text-2xl text-[#C62828] mb-4">Recent Announcements</h2>
        <ul class="space-y-4 text-gray-300">
            <li>
                <span class="font-bold text-[#FF7043]">New Poker Night Scheduled!</span>
                <p class="text-gray-400">We’ve scheduled a new poker night for June 1st! Don’t miss it!</p>
            </li>
            <li>
                <span class="font-bold text-[#FF7043]">Tournament Registration Open</span>
                <p class="text-gray-400">The annual tournament registration is now open! Sign up to compete for the grand prize.</p>
            </li>
            <li>
                <span class="font-bold text-[#FF7043]">Lounge Renovation Complete</span>
                <p class="text-gray-400">Our lounge has been renovated with new seating and decor. Come check it out!</p>
            </li>
        </ul>
    </div>

    <!-- Member Shoutouts Section -->
    <div class="bg-[#0B1D3A] p-6 rounded-lg">
        <h2 class="text-2xl text-[#C62828] mb-4">Member Shoutouts</h2>
        <div class="space-y-4">
            <div class="bg-[#263238] p-4 rounded-lg">
                <p class="text-gray-300"><strong>John Doe:</strong> Congrats on winning the poker night tournament last week!</p>
            </div>

            <div class="bg-[#263238] p-4 rounded-lg">
                <p class="text-gray-300"><strong>Jane Smith:</strong> A huge shoutout to Jane for organizing our last event, it was a great success!</p>
            </div>

            <div class="bg-[#263238] p-4 rounded-lg">
                <p class="text-gray-300"><strong>Alice Johnson:</strong> Big thanks to Alice for hosting the last game night and keeping things fun!</p>
            </div>
        </div>
    </div>
</div>
@endsection
