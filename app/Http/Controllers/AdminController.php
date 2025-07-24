<!-- 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function users() {
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.users', compact('users'));
    }

    public function makeAdmin($id) {
        $user = User::findOrFail($id);
        $user->role = 'admin';
        $user->save();
        return redirect()->back()->with('success', 'User promoted to admin!');
    }

    public function rooms() {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function createRoom() {
        return view('admin.rooms.create');
    }

    public function storeRoom(Request $request) {
        $request->validate([
            'location' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $room = new Room();
        $room->location = $request->location;
        $room->price = $request->price;
        $room->type = $request->type;

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $filename);
            $room->image = $filename;
        }

        $room->save();
        return redirect()->route('admin.rooms')->with('success', 'Room added!');
    }
}
 -->
