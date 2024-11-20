<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PrintPal</title>
    <link rel="stylesheet" href="{{ asset('css/owner_register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        /* Hide all forms initially */
        .form-container {
            display: none;
        }

        /* Show the active form */
        .form-container.active {
            display: block;
        }

        .btn-login {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }
    </style>
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
            <!-- Form Step 1 -->
            <div class="form-container active" id="step-1">
                <form action="#">
                    <h2>Welcome to <span class="title">PrintPal</span></h2>
                    <p>Create your account and start your business with us</p>
                    <label for="phone_number">Phone Number</label>
                    <input type="number" name="phone_number" placeholder="Enter your phone number" required>
                    <label for="email">Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <label for="password">Passowrd</label>
                    <input type="password" name="password" id="" placeholder="Enter Password">
                    <label for="business">Business Name</label>
                    <input type="text" name="business" id="" placeholder="Enter Business Name">
                    <label for="account">Bank Account</label>
                    <input type="text" name="account" id="" placeholder="Enter Bank Account">
                    <button type="submit" onclick="showNextForm('step-2')" class="btn-login">Next</button>
                    <p>New to PrintPal? <a href="{{ route('register')}}" class="signup-link">Create an account</a></p>
                </form>
            </div>

            <!-- Form Step 2 -->
            <div class="form-container" id="step-2">
                <form>
                    <h2>Get your Business<span class="title">Started</span></h2>
                    <label for="business">Business Name</label>
                    <input type="text" name="business" placeholder="Enter Business Name" required>
                    <label for="address">Address</label>
                    <input type="text" name="address" placeholder="Enter Address" required>
                    <label for="state">State / District</label>
                    <input type="text" name="state" placeholder="Enter State / District" required>
                    <label for="code">Pin Code</label>
                    <input type="text" name="code" placeholder="Pin Code" required>
                    <label for="contact">Additional Contact Information</label>
                    <input type="text" name="contact" placeholder="Enter additional Contact" required>
                    <button type="button" class="btn-login" onclick="showNextForm('step-3')">Select Services Categories</button>
                </form>
            </div>

          
            <!-- Form Step 3 -->
            <div class="form-container" id="step-3">
                <!-- Search Bar -->
                <div class="search-bar">
                    <input type="text" id="search-input" placeholder="Search categories..." oninput="filterCategories()">
                </div>
            
                <!-- Categories Row -->
                <div id="categories-row" class="categories-row">
                    <!-- Business Category -->
                    <div class="category" data-name="business">
                        <label onclick="toggleDropdown(this)">Business</label>
                        <div class="category-items dropdown">
                            <label><input type="checkbox" value="startup"> Startup</label>
                            <label><input type="checkbox" value="consulting"> Consulting</label>
                            <label><input type="checkbox" value="retail"> Retail</label>
                        </div>
                    </div>
            
                    <!-- Educational Category -->
                    <div class="category" data-name="educational">
                        <label onclick="toggleDropdown(this)">Educational</label>
                        <div class="category-items dropdown">
                            <label><input type="checkbox" value="school"> School</label>
                            <label><input type="checkbox" value="university"> University</label>
                            <label><input type="checkbox" value="tutoring"> Tutoring</label>
                        </div>
                    </div>
            
                    <!-- Publishing Category -->
                    <div class="category" data-name="publishing">
                        <label onclick="toggleDropdown(this)">Publishing</label>
                        <div class="category-items dropdown">
                            <label><input type="checkbox" value="magazines"> Magazines</label>
                            <label><input type="checkbox" value="books"> Books</label>
                            <label><input type="checkbox" value="journals"> Journals</label>
                        </div>
                    </div>
            
                    <!-- Event and Hospitality Category -->
                    <div class="category" data-name="event-and-hospitality">
                        <label onclick="toggleDropdown(this)">Event & Hospitality</label>
                        <div class="category-items dropdown">
                            <label><input type="checkbox" value="events"> Events</label>
                            <label><input type="checkbox" value="hotels"> Hotels</label>
                            <label><input type="checkbox" value="catering"> Catering</label>
                        </div>
                    </div>
            
                    <!-- Industrial Painting Category -->
                    <div class="category" data-name="industrial-painting">
                        <label onclick="toggleDropdown(this)">Industrial Painting</label>
                        <div class="category-items dropdown">
                            <label><input type="checkbox" value="automotive"> Automotive</label>
                            <label><input type="checkbox" value="furniture"> Furniture</label>
                            <label><input type="checkbox" value="machinery"> Machinery</label>
                        </div>
                    </div>
            
                    <!-- Photo Pricing Category -->
                    <div class="category" data-name="photo-pricing">
                        <label onclick="toggleDropdown(this)">Photo Pricing</label>
                        <div class="category-items dropdown">
                            <label><input type="checkbox" value="weddings"> Weddings</label>
                            <label><input type="checkbox" value="portraits"> Portraits</label>
                            <label><input type="checkbox" value="events"> Events</label>
                        </div>
                    </div>
            
                    <!-- Art and Design Category -->
                    <div class="category" data-name="art-and-design">
                        <label onclick="toggleDropdown(this)">Art & Design</label>
                        <div class="category-items dropdown">
                            <label><input type="checkbox" value="graphics"> Graphics</label>
                            <label><input type="checkbox" value="logos"> Logos</label>
                            <label><input type="checkbox" value="branding"> Branding</label>
                        </div>
                    </div>
                </div>
            
                <button type="submit" class="btn-login">Submit</button>
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

<script>
    // JavaScript to toggle between forms
    function showNextForm(nextStepId) {
        // Hide all forms
        const forms = document.querySelectorAll('.form-container');
        forms.forEach(form => form.classList.remove('active'));

        // Show the next form
        document.getElementById(nextStepId).classList.add('active');
    }

    function toggleDropdown(label) {
        const category = label.parentElement;
        // Close other dropdowns
        document.querySelectorAll('.category').forEach(cat => {
            if (cat !== category) {
                cat.classList.remove('open');
            }
        });
        // Toggle the clicked dropdown
        category.classList.toggle('open');
    }

    function filterCategories() {
        const searchInput = document.getElementById('search-input').value.toLowerCase();
        const categories = document.querySelectorAll('.category');
        categories.forEach(category => {
            const name = category.getAttribute('data-name');
            if (name.includes(searchInput)) {
                category.style.display = '';
            } else {
                category.style.display = 'none';
            }
        });
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
        const isDropdown = event.target.closest('.category');
        if (!isDropdown) {
            document.querySelectorAll('.category.open').forEach(cat => cat.classList.remove('open'));
        }
    });
</script>
</body>
</html>
