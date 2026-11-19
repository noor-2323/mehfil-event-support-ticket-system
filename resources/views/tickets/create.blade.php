<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Inquiry | Mehfil Event Planners</title>
    <link rel="stylesheet" href="{{ asset('css/mehfil.css') }}">
</head>
<body>

    <main class="inquiry-container">
        <section class="inquiry-card">

            <header class="form-header">
                <h1>Mehfil Event Planners</h1>
                <h2>Plan Your Special Event</h2>
                <p>Tell us about your event. Our team will contact you soon.</p>
            </header>

            <form action="{{ route('tickets.store') }}" method="POST">
                @csrf

                @error('rate_limit')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="customer_name">Full Name</label>
                    <input
                        type="text"
                        id="customer_name"
                        name="customer_name"
                        value="{{ old('customer_name') }}"
                        maxlength="100"
                        required
                        autocomplete="name"
                        placeholder="Enter your full name"
                    >
                    @error('customer_name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        maxlength="255"
                        required
                        autocomplete="email"
                        placeholder="Enter your email"
                    >
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="event_type">Event Type</label>
                    <select id="event_type" name="event_type" required>
                        <option value="">Select your event type</option>
                        <option value="Wedding" {{ old('event_type') == 'Wedding' ? 'selected' : '' }}>Wedding</option>
                        <option value="Engagement" {{ old('event_type') == 'Engagement' ? 'selected' : '' }}>Engagement</option>
                        <option value="Birthday" {{ old('event_type') == 'Birthday' ? 'selected' : '' }}>Birthday</option>
                        <option value="Corporate Event" {{ old('event_type') == 'Corporate Event' ? 'selected' : '' }}>Corporate Event</option>
                        <option value="Other" {{ old('event_type') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('event_type')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        maxlength="2000"
                        required
                        placeholder="Tell us about your event requirements..."
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="submit-button">
                    Submit Inquiry
                </button>

            </form>

            <footer class="form-footer">
                <p>Thank you for choosing Mehfil Event Planners.</p>
            </footer>

        </section>
    </main>

</body>
</html>

