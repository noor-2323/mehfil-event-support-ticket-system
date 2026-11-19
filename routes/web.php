<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

// Redirect homepage to the customer inquiry form.
Route::redirect('/', '/inquiry');

// Mehfil Event Planners - Customer Ticket System
Route::get('/inquiry', [TicketController::class, 'create'])
    ->name('tickets.create');

Route::post('/inquiry', [TicketController::class, 'store'])
    ->name('tickets.store');

Route::get('/inquiry/thank-you', [TicketController::class, 'thankYou'])
    ->name('tickets.thank-you');
