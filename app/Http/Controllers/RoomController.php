<?

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::latest()->get();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('rooms', 'public');
        }

        Room::create($validated);

        return redirect()->route('rooms.index')->with('success', 'Room added successfully!');
    }

    // Optional: show, edit, update, destroy functions can be added later
}
