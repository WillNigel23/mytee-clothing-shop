<?php
    session_start();
    if(empty($_SESSION["username"])) header("Location: index.php");
    $xml = simplexml_load_file("database/products.xml");
    $products = array();
    $new_collection = array();
    $special_collection = array();
    foreach($xml->product as $product) {
        $products[] = array(
            'prod_id'=>(string)$product->prod_id,
            'prod_category'=>(string)$product->prod_category,
            'prod_name'=>(string)$product->prod_name,
            'prod_price'=>(string)$product->prod_price,
            'prod_rating'=>(string)$product->prod_rating,
            'prod_img'=>(string)$product->prod_img,
            'prod_description'=>(string)$product->prod_description,
        );
        if((string)$product->prod_category === "New Collection") {
            $new_collection[] = array(
                'prod_id'=>(string)$product->prod_id,
                'prod_category'=>(string)$product->prod_category,
                'prod_name'=>(string)$product->prod_name,
                'prod_price'=>(string)$product->prod_price,
                'prod_rating'=>(string)$product->prod_rating,
                'prod_img'=>(string)$product->prod_img,
                'prod_description'=>(string)$product->prod_description,
            );
        }
        else if((string)$product->prod_category === "Special Collection") {
            $special_collection[] = array(
                'prod_id'=>(string)$product->prod_id,
                'prod_category'=>(string)$product->prod_category,
                'prod_name'=>(string)$product->prod_name,
                'prod_price'=>(string)$product->prod_price,
                'prod_rating'=>(string)$product->prod_rating,
                'prod_img'=>(string)$product->prod_img,
                'prod_description'=>(string)$product->prod_description,
            );
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/finaltee.png" size="32x32" type="image/x-icon type" >
    <title>My Tee</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
    <link rel = "stylesheet" href="styles/HomePage.css">
</head>
<body>
    
    <!-- navbar -->
    <?php
        include('components/navbar.php')
    ?>
    <!-- end of navbar -->

    <!-- header -->
    <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
            <div class = "text-center carousel-item active">
                <h2 class = "text-capitalize text-white">best collection</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">new arrivals</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">shop now</a>
                            
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize text-white">best price & offer</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">new season</h1>
                <a href = "#" class = "btn mt-3 text-uppercase">buy now</a>
            </div>
        </div>

        <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
            <span class = "carousel-control-prev-icon"></span>
        </button>
        <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
            <span class = "carousel-control-next-icon"></span>
        </button>
    </header>
    <!-- end of header -->
    <?php
                if(isset($_GET['true']) == "created"){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your product added to Cart.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>

    <!-- collection -->
    <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block">New Collection</h2>
            </div>

            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = "*">Previous</button>
					<a href="BestSellers.php">
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".best">1</button></a>
					<a href="featured.php">
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".feat">2</button></a>
					<a href="arrivals.php">
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">3</button></a>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">4</button></a>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".new">Next</button></a>

                </div>
                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <?php 
                        foreach($new_collection as $product) {
                            echo '
                            <div class = "col-md-6 col-lg-4 col-xl-4 p-2 best">
                                <div class = "collection-img position-relative">
                                    <img src = "'.$product["prod_img"].'" class = "w-100">
                                    <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">sale</span>
                                </div>
                                <div class = "text-center">
                                    <div class = "rating mt-3">
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    </div>
                                    <p class = "text-capitalize my-1">'.$product["prod_name"].'</p>
                                    <span class = "fw-bold">Php '.$product["prod_price"].'</span><br>
                                    <form action="addCart.php" method="post">
                                    <input type="hidden" name="name" value="'.$product["prod_name"].'">
                                    <input type="hidden" name="price" value="'.$product["prod_price"].'">
                                    <input type="text" name="qty" placeholder="Quantity" class="form-control">
                                    <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                                    </form>
                                </div>
                            </div>
                            ';
                        };
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->

    <!-- special products -->
    <section id = "special" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Special Selection</h2>
            </div>

            <div class = "special-list mt-4 row gx-0 gy-3">
                <?php
                    foreach($special_collection as $product) {
                        echo '
                            <div class = "col-md-6 col-lg-4 col-xl-4 p-2 best">
                                <div class = "special-img position-relative">
                                    <img src = "'.$product["prod_img"].'" class = "w-100">
                                </div>
                                <div class = "text-center">
                                    <div class = "rating mt-3">
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                        <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    </div>
                                    <p class = "text-capitalize my-1">'.$product["prod_name"].'</p>
                                    <span class = "fw-bold">Php '.$product["prod_price"].'</span><br>
                                    <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
                                </div>
                            </div>
                        ';
                    };
                ?>
            </div>
        </div>
    </section>
    <!-- end of special products -->
    
    <!--
     <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"><<</a>
            </li>
            <li class="page-item"><a class="page-link" href="HomePage.Php">1</a></li>
            <li class="page-item"><a class="page-link" href="Best Sellers.Php">2</a></li>
            <li class="page-item"><a class="page-link" href="featured.php">3</a></li>
            <li class="page-item"><a class="page-link" href="arrivals.php">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item">
            <a class="page-link" href="#">>></a>
            </li>
        </ul>
    </nav>
    -->
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
                        <img src = "img/shirt13.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">7th king White Shirt</p>
                            <span>Php 650.00</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "img/shirt18.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off high Shirt</p>
                            <span>Php 650</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "img/sunny.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Sunny Shirt</p>
                            <span>Php 650</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Best Selling</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "img/shirt19.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off High Wonderer</p>
                            <span>Php 550</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "img/shirt20.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off High Time Space</p>
                            <span>Php 550</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "img/shirt21.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Daily Grind Play for Real</p>
                            <span>Php 650</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">On Sale</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "img/shirt5.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Off High Mustard Shirt</p>
                            <span>Php 450</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "img/shirt6.png" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">7th King Shirt</p>
                            <span>Php 450</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "img/shirt4.png" alt = "" class = "img-fluid pe-3 w-25">
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
    <?php
        include('components/aboutus.php')
    ?>
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