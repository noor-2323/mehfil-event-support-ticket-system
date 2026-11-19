<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class TicketController extends Controller
{
    /**
     * Display the public inquiry form.
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Validate and store a customer inquiry.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255',
            'event_type' => 'required|string|in:Wedding,Engagement,Birthday,Corporate Event,Other',
            'message' => 'required|string|min:10|max:2000',
        ]);

        $key = 'ticket-submission:' . hash('sha256', $request->ip());

        $response = RateLimiter::attempt(
            $key,
            1,
            function () use ($validated) {
                Ticket::create($validated);

                session()->flash('ticket_submitted', true);

                return redirect()->route('tickets.thank-you')
                    ->with('success', 'Thank you! Your event inquiry has been submitted successfully.');
            },
            60
        );

        if ($response === false) {
            return back()
                ->withInput()
                ->withErrors([
                    'rate_limit' => 'Please wait one minute before submitting another inquiry.'
                ]);
        }

        return $response;
    }

    /**
     * Display the submission confirmation page only after submission.
     */
    public function thankYou()
    {
        if (!session()->pull('ticket_submitted')) {
            return redirect()->route('tickets.create');
        }

        return view('tickets.thank-you');
    }
}