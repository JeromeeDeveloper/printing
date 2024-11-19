<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PrintPal</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <img onclick="window.location='{{ route('home') }}'" src="{{ asset('images/logo.png') }}" alt="PrintPal Logo" class="logo">
            <ul class="nav-links">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </nav>

    <!-- Form Section -->
    <section class="form-section">
        <div class="form-container">
            <h1>Create an Account</h1>
            <img src="{{ asset('images/form-banner.png') }}" alt="Form Banner" class="form-banner">
            <form action="#" method="POST" class="account-form">
                <input type="text" placeholder="First Name" required>
                <input type="text" placeholder="Last Name" required>
                <input type="email" placeholder="Email Address" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Confirm Password" required>
                <input type="tel" placeholder="Phone Number" required>
                <button type="submit" class="btn-submit">Create</button>
            </form>
            <p class="signin-text">Have a PrintPal Account? <a href="{{route('login')}}" class="signin-link">Sign in</a></p>
        </div>
    </section>

    <img src="{{ asset('images/rbanner.png') }}" alt="Right Banner" class="bottom-right-img">
</body>
</html>