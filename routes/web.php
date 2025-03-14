<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\KorjoKhatian;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MojudMalamalKhatian;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SanchayaKhatian;
use App\Http\Controllers\ShareKhatian;
use App\Http\Controllers\SomobayBazarKhatian;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
});

// Protect Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Protect Profile Routes
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Admin Panel..................
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/adminPanelList', [UserController::class, 'adminPanel']);
    Route::get('/admin/edit/{id}', [UserController::class, 'editAdmin'])->name('admin.editAdmin');
    Route::put('/admin/{id}', [UserController::class, 'updateAdmin'])->name('admin.updateAdmin');

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    //Member Module..............
    Route::get('/membersList', [MemberController::class, 'membersList'])->name('membersList');
    Route::get('/member/{id}', [MemberController::class, 'show'])->name('member.profile');
    Route::get('/create/members', [MemberController::class, 'membersCreate'])->name('members.create');
    Route::post('/members/store', [MemberController::class, 'membersStore'])->name('members.store');
    Route::get('/members/edit/{id}', [MemberController::class, 'membersEdit'])->name('members.edit');
    Route::put('/members/update/{id}', [MemberController::class, 'membersUpdate'])->name('members.update');

    //Sanchaya Khatian Module..............
    Route::get('/sanchayaKhatian', [SanchayaKhatian::class, 'sanchayaCreate'])->name('sanchayakhatian.create');
    Route::post('/sanchayaKhatian/store', [SanchayaKhatian::class, 'sanchayaStore'])->name('sanchayakhatian.store');

    //Korjo Khatian Module..............
    Route::get('/korjoKhatian', [KorjoKhatian::class, 'korjoCreate'])->name('korjokhatian.create');
    Route::post('/korjoKhatian/store', [KorjoKhatian::class, 'korjoStore'])->name('korjokhatian.store');

    //Share Khatian Module..............
    Route::get('/shareKhatian', [ShareKhatian::class, 'shareCreate'])->name('sharekhatian.create');
    Route::post('/shareKhatian/store', [ShareKhatian::class, 'shareStore'])->name('sharekhatian.store');

    //Somobay Khatian Module..............
    Route::get('/somobayBazarKhatian', [SomobayBazarKhatian::class, 'somobayBazarCreate'])->name('somobayBazarkhatian.create');
    Route::post('/somobayBazarKhatian/store', [SomobayBazarKhatian::class, 'somobayBazarStore'])->name('somobayBazarkhatian.store');

    //Mojud Malamal Khatian Module..............
    Route::get('/mojudMalamalKhatian', [MojudMalamalKhatian::class, 'mojudMalamalCreate'])->name('mojudMalamalkhatian.create');
    Route::post('/mojudMalamalKhatian/store', [MojudMalamalKhatian::class, 'mojudMalamalStore'])->name('mojudMalamalkhatian.store');

});


require __DIR__.'/auth.php';
