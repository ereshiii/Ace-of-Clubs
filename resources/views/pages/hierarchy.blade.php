@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto bg-[#1F2937] rounded-2xl shadow-lg p-8 text-white">
    <h1 class="text-3xl font-bold text-[#C62828] mb-6">Poker Club Hierarchy</h1>
    <p class="text-lg text-gray-400 mb-6">The roles within the Poker Club are ranked based on poker hand rankings. The higher your rank, the more influence you have within the club. Here’s a breakdown of the roles:</p>

    <div class="space-y-8">

        <!-- Royal Flush (Owner) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">1. Royal Flush - Owner</h2>
            <p class="text-gray-300">The highest rank in the club, held by the owner. The owner has complete control over decisions, direction, and governance.</p>
        </div>

        <!-- Straight Flush (Stakeholders) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">2. Straight Flush - Stakeholders</h2>
            <p class="text-gray-300">Stakeholders have a significant influence on the direction of the club. They invest, make strategic decisions, and help steer the club’s growth.</p>
        </div>

        <!-- Four-of-a-Kind (Admins) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">3. Four-of-a-Kind - Admins</h2>
            <p class="text-gray-300">Admins manage day-to-day operations and ensure everything runs smoothly. They have the authority to moderate, manage events, and handle member queries.</p>
        </div>

        <!-- Full House (Managers) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">4. Full House - Managers</h2>
            <p class="text-gray-300">Managers coordinate club activities and manage teams. They ensure all events, games, and interactions are executed seamlessly.</p>
        </div>

        <!-- Flush (Premium Members) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">5. Flush - Premium Members</h2>
            <p class="text-gray-300">Premium members enjoy special privileges, including priority registration for events, exclusive access, and recognition within the club.</p>
        </div>

        <!-- Straight (Members) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">6. Straight - Regular Members</h2>
            <p class="text-gray-300">Regular members participate in club activities, including events and discussions. They are the core of the club and contribute to the community.</p>
        </div>

        <!-- Three-of-a-Kind (Workers) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">7. Three-of-a-Kind - Workers</h2>
            <p class="text-gray-300">Workers assist with event management, maintaining the lounge, organizing games, and providing support during tournaments.</p>
        </div>

        <!-- Two Pair (Volunteers) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">8. Two Pair - Volunteers</h2>
            <p class="text-gray-300">Volunteers help with club activities on a part-time basis. They support workers and assist in organizing events or managing community outreach.</p>
        </div>

        <!-- One Pair (Guests) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">9. One Pair - Guests</h2>
            <p class="text-gray-300">Guests are newcomers or potential members who can observe events, participate in introductory games, and consider joining the club.</p>
        </div>

        <!-- High Card (Inactive Members) -->
        <div class="bg-[#0B1D3A] p-6 rounded-lg">
            <h2 class="text-2xl text-[#C62828] mb-4">10. High Card - Inactive Members</h2>
            <p class="text-gray-300">Inactive members have limited access to club activities and are encouraged to re-engage with the community to elevate their status.</p>
        </div>

    </div>
</div>
@endsection
