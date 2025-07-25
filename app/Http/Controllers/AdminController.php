
<?
use Illuminate\Support\Facades\Auth;

public function adminDashboard() {
    $user = Auth::user(); // currently logged in user
    return view('admin-dashboard', compact('user'));
}