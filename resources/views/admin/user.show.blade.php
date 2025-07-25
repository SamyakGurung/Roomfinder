@extends('layouts.admin')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">User Management</h1>

    @if(session('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full table-auto border border-gray-200 rounded">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="px-4 py-2 border-b">#</th>
                <th class="px-4 py-2 border-b">Name</th>
                <th class="px-4 py-2 border-b">Email</th>
                <th class="px-4 py-2 border-b">Role</th>
                <th class="px-4 py-2 border-b">Registered At</th>
                <th class="px-4 py-2 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $user)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">{{ $index + 1 }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->email }}</td>
                    <td class="px-4 py-2 border-b">{{ ucfirst($user->role ?? 'user') }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->created_at->format('Y-m-d') }}</td>
                    <td class="px-4 py-2 border-b">
                        <a href="{{ route('users.show', $user->id) }}" class="text-blue-600 hover:underline">View</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Are you sure to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-4 text-center text-gray-500">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
