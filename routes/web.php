
<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Redirect homepage to customer inquiry form
Route::get('/', function () {
    return redirect()->route('tickets.create');
});

// Public customer ticket routes
Route::get('/inquiry', [TicketController::class, 'create'])
    ->name('tickets.create');

Route::post('/inquiry', [TicketController::class, 'store'])
    ->name('tickets.store');

Route::get('/inquiry/thank-you', [TicketController::class, 'thankYou'])
    ->name('tickets.thank-you');

// Protected staff dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Protected profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Breeze authentication routes
require __DIR__.'/auth.php';