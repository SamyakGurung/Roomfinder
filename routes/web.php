
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/',[FrontendController::class,'Home'])->name('index');
Route::get('/about',[FrontendController::class,'About'])->name('aboutus');
Route::get('/login',[FrontendController::class,'Login'])->name('login');
Route::get('/listing',[FrontendController::class,'Listing'])->name('listings');
Route::get('/register',[FrontendController::class,'Register'])->name('register');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    });
});

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
});












































?>
