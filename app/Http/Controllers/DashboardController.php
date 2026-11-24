<?php

namespace App\Http\Controllers;

use App\Models\Ticket;

class DashboardController extends Controller
{
    public function index()
    {
        $tickets = Ticket::latest()->take(10)->get();

        return view('dashboard', compact('tickets'));
    }
}
