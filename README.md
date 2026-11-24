# Mehfil Event Support Ticket System

A Laravel 10 web application for collecting customer event inquiries and allowing authorized staff to manage and view customer support tickets.

## Technologies Used

- Laravel 10
- PHP 8.3
- MySQL
- Blade Templates
- HTML5 and CSS3
- Tailwind CSS
- Vite
- Laravel Breeze Authentication

## Features

### 1. Customer Inquiry Form

- Public customer inquiry form.
- Customer name, email, event type, and message fields.
- Server-side validation and CSRF protection.
- Supported event types:
  - Wedding
  - Engagement
  - Birthday
  - Corporate Event
  - Other
- Submission confirmation page.
- Rate limiting: one submission per IP address per minute.
- New tickets automatically receive the `new` status.

### 2. Staff Authentication

- Staff login using email and password.
- Validation of login credentials.
- Error messages for invalid credentials.
- Public staff registration disabled.
- Secure session handling.
- Staff logout functionality.

### 3. Staff Dashboard

- Protected dashboard accessible only to authenticated staff.
- Displays the latest 10 customer tickets.
- Ticket information displayed in a table:
  - Customer Name
  - Event Type
  - Status
  - Date
- Unauthenticated visitors are redirected to the login page.

## Database

The `tickets` table stores:

- `customer_name`
- `email`
- `event_type`
- `message`
- `status` (defaults to `new`)
- Timestamps

The `users` table stores staff authentication information.

## Local Installation and Setup

### Requirements

- PHP 8.3 or compatible
- Composer
- MySQL
- Node.js and npm
- Git

### 1. Clone the Repository

```bash
git clone https://github.com/noor-2323/mehfil-event-support-ticket-system.git
cd mehfil-event-support-ticket-system
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Frontend Dependencies

```bash
npm install
npm run build
```

### 4. Configure Environment

Create the environment file:

```bash
copy .env.example .env
```

Configure your MySQL database settings in `.env`.

Create a database named:

```text
mehfil_ticket_system
```

Set the session driver:

```env
SESSION_DRIVER=file
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Database Migrations and Seed Staff Account

```bash
php artisan migrate --seed
```

This creates the required database tables and the initial staff account.

### 7. Start the Application

```bash
php artisan serve
```

Open the application:

Customer inquiry form:

http://127.0.0.1:8000/inquiry

Staff login:

http://127.0.0.1:8000/login

Staff dashboard:

http://127.0.0.1:8000/dashboard

## Development Staff Login

The database seeder creates this development account:

- **Email:** staff@mehfil.com
- **Password:** Mehfil@123

**Security note:** These are demonstration credentials. Change the password before using the application in production.

## Project Progress

| Task | Description | Status |
|---|---|---|
| Task 1 | Customer ticket submission system | Completed |
| Task 2 | Staff authentication and protected ticket dashboard | Completed |
| Task 3 | Ticket details and staff replies | Upcoming |
| Task 4 | Ticket status management and SLA | Upcoming |
| Task 5 | Deployment and handover | Upcoming |

## Repository

GitHub: https://github.com/noor-2323/mehfil-event-support-ticket-system

## Author

Noor ul Ain