<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="finaltee.png" size="32x32" type="image/x-icon type" >
    <title>My Tee</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
    <link rel = "stylesheet" href="styles/BestSellers.css">
</head>
<body>
    
    <!-- navbar -->
    <?php
        include('components/navbar.php')
    ?>
    <!-- end of navbar -->


    <!-- Best sellers-->
    <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center"><br><br>
                <h2 class = "position-relative d-inline-block">Best Seller</h2>
            </div>

            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
					<a href= "HomePage.php">
                    <button type = "button" class = "btn m-2 text-dark" data-filter =".all">All</button></a>
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">Best Sellers</button>
					<a href="featured.php">
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">Featured</button></a>
					<a href="arrivals.php">
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">New Arrival</button></a>
                </div>

                <div class = "bestseller-list mt-4 row gx-0 gy-3">
                    <div class = "col-md-6 col-lg-4 col-xl-4 p-2 best">
                        <div class = "bestseller-img position-relative">
                            <img src = "shirt22.png" class = "w-100">
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3"><br>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">7th king Sinner Shirt</p>
                            <span class = "fw-bold">Php 500</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-4 p-2 feat">
                        <div class = "bestseller-img position-relative">
                            <img src = "shirt23.png" class = "w-100">
                                                    </div>
                        <div class = "text-center">
                            <div class = "rating mt-3">
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1"> 7th king take a break Shirt</p>
                            <span class = "fw-bold">Php 500</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-4 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "shirt24.png" class = "w-100">
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3"><br>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">7th king tie die Shirt</p>
                            <span class = "fw-bold">Php 500</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-4 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "shirt25.png" class = "w-100">
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3"><br>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Off High Mindfulness Shirt</p>
                            <span class = "fw-bold">Php 550</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-4 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "shirt29.png" class = "w-100">
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3"><br>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Daily Grind Reflection Shirt</p>
                            <span class = "fw-bold">Php 600</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-4 p-2 new">
                        <div class = "bestseller-img position-relative">
                            <img src = "shirt32.png" class = "w-100">
                        </div>
                        <div class = "text-center">
                            <div class = "rating mt-3"><br>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                            </div>
                            <p class = "text-capitalize my-1">Daily Grind Culture Wide Shirt</p>
                            <span class = "fw-bold">Php 600</span><br>
                            <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                        </div>
                    </div>

                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->

    

    <!-- blogs -->
    <section id = "offers" class = "py-5">
        <div class = "container">
            <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class = "offers-content">
                    <span class = "text-white">Discount Up To 40%</span>
                    <h2 class = "mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                    <a href = "#" class = "btn">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->

    

    <!-- popular -->
    <section id = "popular" class = "py-5">
        <div class = "container">
            <div class = "title text-center pt-3 pb-5">
                <h2 class = "position-relative d-inline-block ms-4">Popular Of This Year</h2>
            </div>

            <div class = "row">
                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Top Rated</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "shirt13.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">7th king White Shirt</p>
                            <span>Php 650.00</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "shirt18.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off high Shirt</p>
                            <span>Php 650</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "Sunny.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Sunny Shirt</p>
                            <span>Php 650</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Best Selling</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "shirt19.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off High Wonderer</p>
                            <span>Php 550</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "shirt20.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off High Time Space</p>
                            <span>Php 550</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "shirt21.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Daily Grind Play for Real</p>
                            <span>Php 650</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">On Sale</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "shirt5.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off High Mustard Shirt</p>
                            <span>Php 450</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "shirt6.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">7th King Shirt</p>
                            <span>Php 450</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "shirt4.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off High Maroon Shirt</p>
                            <span>Php 450</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of popular -->

    <!-- about us -->
    <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4">About Us</h2>
                    </div>
                    <p class = "lead text-muted">At the heart of what we do is ensure that you remain effortlessly stylish throughout the day.</p>
                    <p> My Tee clothing shop makes it a point to give individuals basic, inexpensive tees. We have the styles you want from the brands you adore in the colors and sizes you need. Avoid the crowds at the mall; we've designed an online shopping experience as convenient for your schedule as it is for your wallet. At My Tee Clothing Shop, we want you to feel at ease, confident, and carefree in your clothing and shopping choices. </p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "img/finaltee.png" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->



    <!-- footer -->
    <?php
        include('components/footer.php')
    ?>
    <!-- end of footer -->




    <!-- jquery -->
    <script src = "js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>