<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <img class="bg-1" src="{{ asset('images/bg1.png') }}" alt="Background Image">

    <nav class="navbar">
        <div class="navbar-left">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
     
            <div class="hamburger" id="hamburger-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="#overview">Overview</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About</a></li>
            </ul>
       
            <div class="navbar-right" id="navbar-right">
                <div class="language">
                    <img src="{{ asset('images/globe.png') }}" alt="Globe Icon">
                    <span>English</span>
                </div>
                <button class="login-button">Log In</button>
            </div>
        </div>
    </nav>

    {{-- home --}}

    <section id="home">
        <div class="hero_content">
     <div class="hero_main">
        <div>
            <div class="text_contents">
                <h1>Bridging Quality and Convenience in Every Print</h1>
                <p>Convenient, Seamless, High-Quality, Fast, and Easy.</p>
            </div>
            <div class="home_btn">
                <button>Register as Costumer</button>
                <button>Register as Owner</button>
            </div>
        </div>
    </div>
    <div>
         <img src="{{ asset('images/PRINTPAL (2) 1.png') }}" alt="">
        </div>
    </div>
    </section>

{{-- services --}}
<h1 class="title">Why you should be one of Printpal’s Trusted Partners?</h1>
<section class="services">
   
    <div class="background-image"></div> 
 
    <div class="service-box first-box">
        <img src="{{ asset('images/service-1.png') }}" alt="Service 1" class="service-image">
        <button class="service-button">Be our Partner</button>
    </div>
   
    <div class="service-box">
        <img src="{{ asset('images/service-2.png') }}" alt="Service 2" class="service-image">
        <h1 class="service-title">Enhanced Reach</h1>
        <p class="service-description">Tap into a broad network of customers seeking high-quality printing services, expanding your market reach and boosting your sales potential.</p>
    </div>
    <div class="service-box">
        <img src="{{ asset('images/service-3.png') }}" alt="Service 3" class="service-image">
        <h1 class="service-title">Low cost access to value chain</h1>
        <p class="service-description">Reduce operational expenses with our low-cost platform, allowing you to allocate resources more effectively and maximize your profit margins.</p>
    </div>
    <div class="service-box">
        <img src="{{ asset('images/service-4.png') }}" alt="Service 4" class="service-image">
        <h1 class="service-title">Customer Satisfaction</h1>
        <p class="service-description">Improve customer satisfaction with our efficient, hassle-free service, fostering loyalty and encouraging repeat business.</p>
    </div>
    <div class="service-box">
        <img src="{{ asset('images/service-5.png') }}" alt="Service 5" class="service-image">
        <h1 class="service-title">Seamless and Simple</h1>
        <p class="service-description">Leverage our integrated system for seamless order processing, tracking, and communication, saving you time and reducing administrative overhead.</p>
    </div>
</section>


    <script>
        const hamburger = document.getElementById('hamburger-icon');
        const navLinks = document.getElementById('nav-links');
        const navbarRight = document.getElementById('navbar-right');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            navbarRight.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    </script>
</body>
</html>
