@extends('layouts.app') {{-- Assuming you're using your main layout --}}

@section('content')
<div class="max-w-md mx-auto mt-12 bg-gray-800 p-6 rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold text-center text-white mb-6">Create an Account</h2>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Full Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300">Full Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                   class="mt-1 block w-full px-3 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                   class="mt-1 block w-full px-3 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
            <input type="password" name="password" id="password" required
                   class="mt-1 block w-full px-3 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                   class="mt-1 block w-full px-3 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                Register
            </button>
        </div>
    </form>

    <p class="mt-4 text-center text-sm text-gray-400">
        Already have an account? <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Login</a>
    </p>
</div>
@endsection
