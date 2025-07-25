<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUser($id)
{
    $user = User::findOrFail($id);
    return view('admin.user-show', compact('user'));
}
public function index()
{
    $users = User::all(); // Import use App\Models\User; 
    return view('admin.users', compact('users'));
}


}


//     // List all users
//     public function index()
//     {
//         $users = User::all();
//         return view('admin.users', compact('users'));
//     }

//     // Show user detail (optional)
//     public function show($id)
//     {
//         $user = User::findOrFail($id);
//         return view('admin.user-show', compact('user'));
//     }

//     // Delete user
//     public function destroy($id)
//     {
//         $user = User::findOrFail($id);
//         $user->delete();

//         return redirect()->route('Users')->with('success', 'User deleted successfully.');
//     }

//     // Update user (role, name, etc.)
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'role' => 'nullable|string|in:user,admin',
//         ]);

//         $user = User::findOrFail($id);
//         $user->update([
//             'name' => $request->name,
//             'role' => $request->role,
//         ]);

//         return redirect()->route('users.show', $user->id)->with('success', 'User updated successfully.');
//     }
// }


