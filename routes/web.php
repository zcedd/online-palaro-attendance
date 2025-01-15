<?php

use Illuminate\Support\Facades\Route;


/*
 * Super Administrator Account
 */
use App\Livewire\Attendance\Venue\Index as VenueAttendance;
use App\Livewire\Dashboard\Index as Dashboard;
use App\Livewire\Administrator\Users\Index as SuperAdminUsers;
use App\Livewire\Attendance\Passageway\Index as PassagewayAttendance;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
 * Super Administrator Account
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/administrator/users', SuperAdminUsers::class)->name('dashboards');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/attendance/passageway/{venueId}', PassagewayAttendance::class)->name('attendance.passageway');
    Route::get('/attendance/venue', VenueAttendance::class)->name('attendance.venue');
});




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
