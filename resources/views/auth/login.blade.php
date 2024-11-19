<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PrintPal</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <section class="main-section">
        <div class="content-container">
            <!-- Left Column -->
            <div class="left-column">
                
                <div class="features">
                    <img class="logo_login" src="{{asset('images/logoresize.png')}}" alt="">
                    <div class="feature-item">
                        <i class="fa fa-users feature-icon"></i>
                        <div>
                            <h2>Home Buyers</h2>
                            <p>Access to a broad network of customers around CDOC</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fa fa-dollar-sign feature-icon"></i>
                        <div>
                            <h2>ZERO COST</h2>
                            <p>No upfront cost to get started</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fa fa-cogs feature-icon"></i>
                        <div>
                            <h2>EASY TO USE</h2>
                            <p>Start your business with seamless operations</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fa fa-chart-line feature-icon"></i>
                        <div>
                            <h2>GROW YOUR BUSINESS</h2>
                            <p>Promote your business with your own webpage</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="right-column">
                <div class="middle-column">
                    <img src="{{ asset('images/overviewlogo.png') }}" alt="Overview Logo" class="center-image">
                </div>
                <h1 class="login_title">Welcome to PrintPal</h1>
                <div class="form-container">
                   
                    <form action="#">
                        <h2>Sign in</h2>
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn-login">Login</button>
                        <p>New to PrintPal? <a href="{{ route('register')}}" class="signup-link">Create an account</a></p>
                    </form>
                </div>
            </div>
        </div>

          
           
    </section>

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
</body>
</html>
