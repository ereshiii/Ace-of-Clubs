@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-[#1F2937] p-8 rounded-xl shadow-lg">
    <h2 class="text-3xl font-bold text-[#C62828] mb-6">Log In to Poker Club</h2>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="mb-4 text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Login Form -->
    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-300">Email Address</label>
            <input type="email" name="email" id="email" class="w-full p-3 mt-2 rounded-lg bg-[#263238] text-white" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-300">Password</label>
            <input type="password" name="password" id="password" class="w-full p-3 mt-2 rounded-lg bg-[#263238] text-white" required>
        </div>

        <button type="submit" class="w-full p-3 bg-[#C62828] text-white rounded-lg mt-4">Log In</button>
    </form>

    <p class="mt-6 text-gray-300 text-center">
        Don’t have an account? <a href="{{ route('join') }}" class="text-[#C62828] hover:text-[#FF7043]">Sign up here</a>.
    </p>
</div>
@endsection
