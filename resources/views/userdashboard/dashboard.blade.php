<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <ul class="nav-links">
                <img onclick="window.location='{{ route('home') }}'" src="{{ asset('images/logo.png') }}" alt="PrintPal Logo" class="logo">
                <a href="#" id="categories-link">Categories</a>
                <li><a href="{{route('owner_register')}}">Become a seller</a></li>
                <li><input type="search" placeholder="Search"></li>
            </ul>
            <ul class="nav-links">
                <li><a href="#">Support</a></li>
                <li><a href="#"><i class="fas fa-user"></i></a></li>
                <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
            </ul>
        </div>

        <div class="nav-container-bottom">
            <ul class="nav-links-bottom">
                <li><a href="" onclick="reloadPage()">All</a></li>
                <li><a href="{{route('user.dashboard')}}">Home</a></li>
                <li><a href="#" onclick="showColumn(4)">Best Sellers</a></li>
                <li><a href="#" onclick="showColumn(4)">Today's Deal</a></li>
                <li><a href="#" onclick="showColumn(1)">Tracking</a></li>
                <li><a href="#" onclick="showColumn(2)">ID's</a></li>
                <li><a href="#" onclick="showColumn(1)">Shirts</a></li>
                <li><a href="#" onclick="showColumn(3)">Souvenirs</a></li>
            </ul>
        </div>
    </nav>

    <div id="categories-modal">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <ul>
         
            <li class="image-greeting-container">
                <img src="{{asset('images/form-banner.png')}}" alt="" class="modal-image">
                <p class="greeting-text">Hello User</p>
            </li>
            <hr>
    
      
            <li><a href="#" onclick="reloadPage()">All</a></li>
            <li><a href="#" onclick="showColumn(1)">Printing Shops</a></li>
            <li><a href="#" onclick="showColumn(2)">Pictures</a></li>
            <li><a href="#" onclick="showColumn(3)">Souvenirs</a></li>
            <li><a href="#" onclick="showColumn(4)">Documents</a></li>
    
        
            <li><a href="{{route('home')}}">Sign Out</a></li>
    
         
            <li><a href="#" onclick="closeModal()" class="close-icon"><i class="fa fa-bars"></i></a></li>
        </ul>
    </div>
  
    <div class="columns-container">
    
        <div class="column">
            <div class="title_dash">
            <h1>Printing Shops</h1> 
            <a href=""><span style="font-size: 14px; color: #007bff;">See all</span></a>
        </div>
            <div class="swiper-container" id="pictures-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <label>Random Label 1</label> 
                        <img src="{{ asset('images/shop.png') }}" alt="Picture 1">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 2</label> 
                        <img src="{{ asset('images/shop.png') }}" alt="Picture 2">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 3</label> 
                        <img src="{{ asset('images/shop.png') }}" alt="Picture 3">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 4</label> 
                        <img src="{{ asset('images/shop.png') }}" alt="Picture 4">
                        <button class="avail-btn">Avail</button>
                    </div>
                 
                    <div class="swiper-slide">
                        <label>Random Label 5</label> 
                        <img src="{{ asset('images/shop.png') }}" alt="Picture 5">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 6</label> 
                        <img src="{{ asset('images/shop.png') }}" alt="Picture 6">
                        <button class="avail-btn">Avail</button>
                    </div>
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

       
        <div class="column">
            <div class="title_dash">
                <h1>Pictures</h1> 
                <a href=""><span style="font-size: 14px; color: #007bff;">See all</span></a>
            </div>
            <div class="swiper-container" id="souvenirs-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <label>Random Label 1</label> 
                        <img src="{{ asset('images/picture.png') }}" alt="Souvenir 1">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 2</label> 
                        <img src="{{ asset('images/picture.png') }}" alt="Souvenir 2">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 3</label> 
                        <img src="{{ asset('images/picture.png') }}" alt="Souvenir 3">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 4</label> 
                        <img src="{{ asset('images/picture.png') }}" alt="Souvenir 4">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <!-- Additional Images -->
                    <div class="swiper-slide">
                        <label>Random Label 5</label> 
                        <img src="{{ asset('images/picture.png') }}" alt="Souvenir 5">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 6</label> 
                        <img src="{{ asset('images/picture.png') }}" alt="Souvenir 6">
                        <button class="avail-btn">Avail</button>
                    </div>
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

   
        <div class="column">
            <div class="title_dash">
                <h1>Souviners</h1> 
                <a href=""><span style="font-size: 14px; color: #007bff;">See all</span></a>
            </div>
            <div class="swiper-container" id="documents-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <label>Random Label 1</label> 
                        <img src="{{ asset('images/sov.png') }}" alt="Document 1">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 2</label> 
                        <img src="{{ asset('images/sov.png') }}" alt="Document 2">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 3</label> 
                        <img src="{{ asset('images/sov.png') }}" alt="Document 3">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 4</label> 
                        <img src="{{ asset('images/sov.png') }}" alt="Document 4">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <!-- Additional Images -->
                    <div class="swiper-slide">
                        <label>Random Label 5</label> 
                        <img src="{{ asset('images/sov.png') }}" alt="Document 5">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Random Label 6</label> 
                        <img src="{{ asset('images/sov.png') }}" alt="Document 6">
                        <button class="avail-btn">Avail</button>
                    </div>
                </div>
                {{-- <div class="swiper-pagination"></div> --}}
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <div class="column">
            <div class="title_dash">
                <h1>Documents</h1> 
                <a href=""><span style="font-size: 14px; color: #007bff;">See all</span></a>
            </div>
            <div class="swiper-container" id="documents-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <label>Document Label 1</label> 
                        <img src="{{ asset('images/documents.png') }}" alt="Document 1">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Document Label 2</label> 
                        <img src="{{ asset('images/documents.png') }}" alt="Document 2">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Document Label 3</label> 
                        <img src="{{ asset('images/documents.png') }}" alt="Document 3">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Document Label 4</label> 
                        <img src="{{ asset('images/documents.png') }}" alt="Document 4">
                        <button class="avail-btn">Avail</button>
                    </div>
                   
                    <div class="swiper-slide">
                        <label>Document Label 5</label> 
                        <img src="{{ asset('images/documents.png') }}" alt="Document 5">
                        <button class="avail-btn">Avail</button>
                    </div>
                    <div class="swiper-slide">
                        <label>Document Label 6</label> 
                        <img src="{{ asset('images/documents.png') }}" alt="Document 6">
                        <button class="avail-btn">Avail</button>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>
    
    

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

  
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var picturesSwiper = new Swiper('#pictures-swiper', {
            slidesPerView: 4,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            }
        });

        var souvenirsSwiper = new Swiper('#souvenirs-swiper', {
            slidesPerView: 4,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            }
        });

        var documentsSwiper = new Swiper('#documents-swiper', {
            slidesPerView: 4,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            }
        });

        function showColumn(columnNumber) {
      
        const columns = document.querySelectorAll('.column');

    
        columns.forEach((column, index) => {
            if (index + 1 === columnNumber) {
                column.classList.remove('hidden');
            } else {
                column.classList.add('hidden');
            }
        });
    }

    function reloadPage() {
       
        location.reload();
    }

     const categoriesLink = document.getElementById('categories-link');
        const categoriesModal = document.getElementById('categories-modal');

        categoriesLink.addEventListener('click', (e) => {
            e.preventDefault();
            categoriesModal.style.display = 'block';
        });

       
        function closeModal() {
            categoriesModal.style.display = 'none';
        }

        function filterCategory(category) {
            const columns = document.querySelectorAll('.column');
            columns.forEach(column => {
                if (category === 'all' || column.dataset.category === category) {
                    column.style.display = 'block';
                } else {
                    column.style.display = 'none';
                }
            });
            closeModal(); 
        }
    </script>
</body>
</html>
