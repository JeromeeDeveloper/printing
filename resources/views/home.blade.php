<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>

    <img class="bg-1" src="{{ asset('images/bg1.png') }}" alt="Background Image">

    <nav class="navbar">
        <div class="navbar-left">
            <div class="logo">
                <img src="{{ asset('images/logoresize.png') }}" alt="Logo">
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
                <button onclick="window.location='{{ route('login') }}'" class="login-button">Log In</button>
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
                <button onclick="window.location='{{ route('register') }}'">Register as Costumer</button>
                <button>Register as Owner</button>
            </div>
        </div>
    </div>
    <div>
         <img src="{{ asset('images/rbanner.png') }}" alt="">
        </div>
    </div>
    </section>

{{-- services --}}
<h1 class="title">Why you should be one of Printpal’s Trusted Partners?</h1>
<div class="background-image"></div> 
 
<section class="services">
   
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

{{-- about --}}
<div class="background-image2"></div> 
<section class="about-section">
    <div class="about-container">
        <div class="about-image">
            <img src="{{ asset('images/aboutbg.png') }}" alt="About Us">
        </div>
        <div class="about-content">
            <h1>We have been improving our quality of <span>Services</span> every now and then</h1>
            <p>By choosing PrintPal, you are opting for a hassle-free, high-quality, and reliable printing service that prioritizes your satisfaction and convenience.</p>
            <button class="cta-button">Get Started</button>
        </div>
    </div>
</section>

{{-- Overview --}}
<div class="overview-image2"></div> 
<section class="overview-section">
    <div class="overview-container">
        <div class="overview-content">
            <div class="overview-logo">
                <img src="{{ asset('images/logoresize.png') }}" alt="Logo">
            </div>
            <p>
                PrintPal is an innovative software platform that serves as an interactive hub for connecting users with a network of printing service providers. Its features include booking, browsing, and purchasing printing services with hassle-free, seamless, and time-saving processes while also ensuring transparency, reliability, and convenience for our users and partnered printing shops.
            </p>
            <button class="overview-button">Get Started</button>
        </div>
        <div class="overview-image">
            <img src="{{ asset('images/overviewlogo.png') }}" alt="Overview Logo">
        </div>
    </div>
</section>

{{-- footer --}}

<footer class="first-gradient">
    <div>
        <div>
            <h1>About</h1>
            <p> <b>PrintPal</b> aims to revolutionize the printing industry <br> by providing a platform for printing businesses to <br> streamline their services and enhance operational <br> efficiency. PrintPal supports the printing ecosystem <br> by offering solutions for both online and offline <br> orders, quality assurance, and customer satisfaction.</p>
            <div>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <div>
            <ul>
                <h3>Pages</h3>
                <li><a href="">About Us</a></li>
                <li><a href="">Return Policy</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Refund & Cancellation Policies</a></li>
            </ul>
        </div>

        <div>
            <ul>
                <h3>Printpal</h3>
                <li><a href="">About Printpal</a></li>
                <li><a href="">Sell on Printpal</a></li>
                <li><a href="">Printpal Components</a></li>
                <li><a href="">Printpal</a></li>
                <li><a href="">TSP For Printpal</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Below gradient section -->
<div class="new-gradient">
    <div>
        <img src="{{ asset('images/f1.png') }}" alt="Image 1">
        <img src="{{ asset('images/f2.png') }}" alt="Image 2">
    </div>
    <div>
        <p>Terms & Conditions || Privacy Policy</p>
    </div>
    <div>
        <p>© Printpal. All Rights Reserved.</p>
    </div>
</div>



    <script>
        const hamburger = document.getElementById('hamburger-icon');
        const navLinks = document.getElementById('nav-links');
        const navbarRight = document.getElementById('navbar-right');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            navbarRight.classList.toggle('active');
            hamburger.classList.toggle('active');
        });

        // Select all elements you want to animate
        const serviceBoxes = document.querySelectorAll('.service-box');

        // Intersection Observer options
        const observerOptions = {
            root: null, // Use the viewport as the root
            threshold: 0.1, // Trigger when 10% of the element is visible
        };

        // Create the Intersection Observer
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add 'visible' class when the element is in view
                    entry.target.classList.add('visible');
                    // Remove observer after animation to improve performance
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Apply the observer to each service box
        serviceBoxes.forEach(box => {
            box.classList.add('hidden'); // Add the hidden class initially
            observer.observe(box); // Observe the element
        });

    </script>
</body>
</html>
