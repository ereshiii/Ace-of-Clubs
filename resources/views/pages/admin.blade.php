@extends('layouts.app')

@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto bg-[#1F2937] rounded-2xl shadow-lg p-8 text-white">
    <h1 class="text-3xl font-bold text-[#C62828] mb-6">Admin Panel – Join Applications</h1>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-600 text-white rounded">
            {{ session('success') }}
        </div>
    @endif

    @if($requests->count())
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-gray-300">
            <thead class="bg-[#0B1D3A] text-left">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Reason</th>
                    <th class="px-4 py-2">Submitted</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
                @foreach($requests as $req)
                    <tr>
                        <td class="px-4 py-2">{{ $req->id }}</td>
                        <td class="px-4 py-2">{{ $req->name }}</td>
                        <td class="px-4 py-2">{{ $req->email }}</td>
                        <td class="px-4 py-2">{{ Str::limit($req->reason, 100) }}</td>
                        <td class="px-4 py-2">{{ $req->created_at->format('Y-m-d H:i') }}</td>
                        <td class="px-4 py-2 flex space-x-2">
                            <a href="#" class="text-[#C62828] hover:text-[#F44336]">View</a>
                            <a href="#" class="text-yellow-500 hover:text-yellow-400">Approve</a>
                            <a href="#" class="text-red-500 hover:text-red-400">Reject</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $requests->links() }}
    </div>
    @else
        <p class="text-gray-400">No join applications submitted yet.</p>
    @endif

    <div class="mt-8 text-right">
        <a href="{{ route('admin.join.export') }}" class="bg-[#C62828] px-4 py-2 rounded hover:bg-red-700 transition">
            Export as CSV
        </a>
    </div>
</div>
@endsection
