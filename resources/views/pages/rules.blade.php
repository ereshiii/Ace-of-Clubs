@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto bg-[#1F2937] rounded-2xl shadow-lg p-8 text-white">
    <h1 class="text-3xl font-bold text-[#C62828] mb-6">Poker Club Rules</h1>

    <p class="text-lg text-gray-400 mb-4">Please review and adhere to the following rules to ensure a smooth and enjoyable experience for all members.</p>

    <div class="bg-[#0B1D3A] p-6 rounded-lg mb-8">
        <h2 class="text-2xl text-[#C62828] mb-4">General Behavior</h2>
        <ul class="list-disc pl-6 space-y-4 text-gray-300">
            <li>Respect all members, regardless of their experience level.</li>
            <li>Keep the conversation friendly and fun. Avoid offensive language.</li>
            <li>Be fair and honest during gameplay. Cheating is strictly prohibited.</li>
            <li>Follow the instructions of event hosts and admins.</li>
            <li>Any form of harassment will not be tolerated and can lead to suspension or ban.</li>
        </ul>
    </div>

    <div class="bg-[#0B1D3A] p-6 rounded-lg mb-8">
        <h2 class="text-2xl text-[#C62828] mb-4">Game Rules</h2>
        <ul class="list-disc pl-6 space-y-4 text-gray-300">
            <li>Each game will be played with a standard 52-card deck.</li>
            <li>Blinds will increase every 15 minutes.</li>
            <li>Players must adhere to the betting structure, including limits on raises and bets.</li>
            <li>If a player does not act within a reasonable time, they may forfeit their turn.</li>
            <li>In the event of a tie, the pot will be split between the tied players.</li>
        </ul>
    </div>

    <div class="bg-[#0B1D3A] p-6 rounded-lg">
        <h2 class="text-2xl text-[#C62828] mb-4">Tournament Rules</h2>
        <ul class="list-disc pl-6 space-y-4 text-gray-300">
            <li>All tournament entries must be submitted at least 24 hours before the event.</li>
            <li>The tournament will follow a no-rebuy format. Once you're out, you're out.</li>
            <li>Players will be disqualified for using prohibited software or tools.</li>
            <li>Prize distribution will be according to the final standings.</li>
            <li>Decisions made by tournament officials are final.</li>
        </ul>
    </div>
</div>
@endsection
