{{-- resources/views/admin/users.blade.php --}}

<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6 bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">All Users</h1>

        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $user->id }}</td>
                        <td class="px-4 py-2">{{ $user->name }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('users.show', $user->id) }}" class="text-blue-600 hover:underline">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>
