# Mehfil Event Support Ticket System

A Laravel 10 application for collecting customer event inquiries for Mehfil Event Planners.

## Technologies

- Laravel 10
- PHP 8.3
- MySQL
- Blade, HTML5 and CSS3

## Task 1: Customer Inquiry Form

Completed features:
- Public customer inquiry form
- Customer name, email, event type and message fields
- Server-side validation and CSRF protection
- Event types: Wedding, Engagement, Birthday, Corporate Event and Other
- Submission confirmation page
- Rate limiting: one submission per IP address per minute
- New tickets receive the default status `new`
- Responsive inquiry-page styling

## Database

The `tickets` table stores:
- `customer_name`
- `email`
- `event_type`
- `message`
- `status` (defaults to `new`)
- Timestamps

## Local Setup

Requirements: PHP 8.3 or compatible, Composer, MySQL and Git.

1. Clone the repository:

   ```bash
   git clone https://github.com/noor-2323/mehfil-event-support-ticket-system.git
   cd mehfil-event-support-ticket-system
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Create the environment file:

   ```bash
   copy .env.example .env
   ```

4. Create a MySQL database named `mehfil_ticket_system`. Update the database settings in `.env` and set:

   ```env
   SESSION_DRIVER=file
   ```

5. Generate the application key and run migrations:

   ```bash
   php artisan key:generate
   php artisan migrate
   ```

6. Start the development server:

   ```bash
   php artisan serve
   ```

7. Visit http://127.0.0.1:8000/inquiry

## Project Progress

- Task 1: Customer ticket submission - Completed
- Task 2: Staff login and protected ticket inbox - Upcoming
- Task 3: Ticket details and staff replies - Upcoming
- Task 4: Ticket status management and SLA - Upcoming
- Task 5: Deployment and handover - Upcoming


