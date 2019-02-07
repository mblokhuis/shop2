<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>David Lynch Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">David Lynch Shop</div>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div> <!-- end top-nav -->
               

                <div class="hero-image">
                    <img src="img/lostindarkness.jpg" alt="hero image">
                </div>
             <!-- end hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Movies</h1>

                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">New</a>
                    <a href="#" class="button">On Sale</a>
                </div>


                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="img/MulhollandDrive.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Mulholland Drive</div></a>
                        <div class="product-price">$28</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Losthighway.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Lost Highway</div></a>
                        <div class="product-price">$10</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Blue Velvet.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Blue Velvet</div></a>
                        <div class="product-price">$6</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Wildatheart.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Wild at Heart</div></a>
                        <div class="product-price">$20</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Eraserhead.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Eraserhead</div></a>
                        <div class="product-price">$30</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Theartlife.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">The Art Life</div></a>
                        <div class="product-price">$22</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Dune.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Dune</div></a>
                        <div class="product-price">$10</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Twinpeaks.jpg" alt="product"></a>
                        <a href="#"><div class="product-name">Twin Peaks</div></a>
                        <div class="product-price">$30</div>
                    </div>
                    
                    </div>
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="#" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">Miscellaneous</h1>

                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="News">
                        <a href="#"><img src="img/thearm.jpg" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">News</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                    <div class="blog-post" id="Fan Art">
                        <a href="#"><img src="img/thearm.jpg" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Fan Art</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                    <div class="blog-post" id="Forum">
                        <a href="#"><img src="img/thearm.jpg" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Forum</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                </div> <!-- end blog-posts -->
            </div> <!-- end container -->
        </div> <!-- end blog-section -->

        <footer>
            <div class="footer-content container">
                <ul>
                    <li>Follow Me:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- end footer-content -->
        </footer>

    </body>
</html>