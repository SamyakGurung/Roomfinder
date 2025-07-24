{{-- resources/views/admin-dashboard.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Room Finder Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-gray-100">

  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-md">
    <div class="p-6 font-bold text-xl text-blue-600">Admin Panel</div>
    <nav class="mt-4 space-y-2">
      <a href="#" class="block px-6 py-2 hover:bg-blue-50 text-gray-700">Dashboard</a>
      <a href="#" class="block px-6 py-2 hover:bg-blue-50 text-gray-700">Room Listings</a>
      <a href="#" class="block px-6 py-2 hover:bg-blue-50 text-gray-700">Add Room</a>
      <a href="#" class="block px-6 py-2 hover:bg-blue-50 text-gray-700">Users</a>
      <a href="#" class="block px-6 py-2 hover:bg-blue-50 text-gray-700">Messages</a>
      <a href="#" class="block px-6 py-2 hover:bg-blue-50 text-gray-700">Settings</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 p-6 overflow-auto">
    <header class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold text-gray-800">Dashboard Overview</h1>
      <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button>
    </header>

    <!-- Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold">Total Rooms</h2>
        <p class="text-2xl font-bold text-blue-600">48</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold">Active Users</h2>
        <p class="text-2xl font-bold text-green-500">12</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold">New Messages</h2>
        <p class="text-2xl font-bold text-red-500">5</p>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold">Bookings</h2>
        <p class="text-2xl font-bold text-yellow-500">22</p>
      </div>
    </div>

    <!-- Add Room Form -->
    <div class="bg-white p-6 rounded shadow mb-6">
      <h2 class="text-xl font-semibold mb-4">Add New Room</h2>
      <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" placeholder="Room Title" class="border p-2 rounded">
        <input type="text" placeholder="Location" class="border p-2 rounded">
        <input type="text" placeholder="Price" class="border p-2 rounded">
        <select class="border p-2 rounded">
          <option>Select Type</option>
          <option>Single</option>
          <option>Double</option>
          <option>2BHK</option>
        </select>
        <input type="file" class="border p-2 rounded col-span-2">
        <textarea placeholder="Description" rows="4" class="border p-2 rounded col-span-2"></textarea>
        <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 col-span-2">Add Room</button>
      </form>
    </div>

    <!-- Room Listings Table -->
    <div class="bg-white p-6 rounded shadow">
      <h2 class="text-xl font-semibold mb-4">Room Listings</h2>
      <table class="w-full table-auto text-sm">
        <thead>
          <tr class="bg-gray-100 text-left">
            <th class="p-2">Room</th>
            <th class="p-2">Location</th>
            <th class="p-2">Price</th>
            <th class="p-2">Type</th>
            <th class="p-2">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="p-2">Room 101</td>
            <td class="p-2">Kathmandu</td>
            <td class="p-2">Rs. 6000</td>
            <td class="p-2">Single</td>
            <td class="p-2">
              <button class="text-blue-600 hover:underline">Edit</button>
              <button class="text-red-600 hover:underline ml-2">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Footer -->
    <footer class="mt-10 text-center text-sm text-gray-500">
      &copy; 2025 Room Finder Admin. All rights reserved.
    </footer>
  </div>

</body>
</html>

    

</body>
</html>
