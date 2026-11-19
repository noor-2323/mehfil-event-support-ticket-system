<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Mehfil Event Planners</title>
    <link rel="stylesheet" href="{{ asset('css/mehfil.css') }}">
</head>
<body>

    <main class="inquiry-container">
        <section class="inquiry-card">
            <header class="form-header">
                <h1>Mehfil Event Planners</h1>
                <h2>Thank You!</h2>
                <p>Your event inquiry has been submitted successfully.</p>
                <p>Our team will review your request and contact you soon.</p>
            </header>

            <a href="{{ route('tickets.create') }}" class="submit-button" style="display: block; text-align: center; text-decoration: none;">
                Submit Another Inquiry
            </a>
        </section>
    </main>

</body>
</html>
