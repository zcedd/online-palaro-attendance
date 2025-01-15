<?php

use Illuminate\Support\Facades\Route;


/*
 * Super Administrator Account
 */
use App\Livewire\Dashboard\Index as Dashboard;
use App\Livewire\Attendance\Venue\Option\Index as VenueOption;
use App\Livewire\Attendance\Venue\List\Index as VenueList;
use App\Livewire\Administrator\Users\Index as SuperAdminUsers;
use App\Livewire\Attendance\Passageway\Index as PassagewayAttendance;
use App\Livewire\Attendance\Report\Index as AttendanceReport;

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

    Route::get('/attendance/venue', VenueList::class)->name('attendance.venue');
    Route::get('/attendance/venue/{venueId}/option', VenueOption::class)->name('attendance.venue.option');
    Route::get('/attendance/venue/{venueId}/passageway', PassagewayAttendance::class)->name('attendance.passageway');
    Route::get('/attendance/venue/{venueId}/report', AttendanceReport::class)->name('attendance.report');
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
