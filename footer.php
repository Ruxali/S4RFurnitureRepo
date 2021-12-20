

        <!--Footer section start-->
        <footer class="footer-section section bg-gray">

            <!--Footer Top start-->
            <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-10">
                <div class="container">
                    <div class="row">

                        <!--Footer Widget start-->
                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Opening Time</span></h4>
                            <p class="mb-15">Mon – Fri: 8AM – 10PM</p>
                            <p class="mb-15">Sat: 9AM-8PM</p>
                            <p class="mb-15">Sun: Closed</p>
                            <h4 class="opeaning-title">We Work All The Holidays</h4>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Quick Link</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Shipping Information</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Information</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Shopping Guide</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Our Store</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget text-lg-right text-left col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h2>123 Widget Street Acmeville, AC-1209</h2>
                            <p class="contact-text">hello@hasthemes.com</p>
                            <p class="contact-text">+0123456789</p>
                        </div>
                        <!--Footer Widget end-->
                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 ft-border pt-25 pb-25">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="copyright text-left">
                                        <p>Copyright &copy;2019 <a href="#">nelson</a>. All rights reserved.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="payment-getway text-lg-right text-center">
                                        <img src="./assets/images/payment.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->

        </footer>
        <!--Footer section end-->
        <!-- Modal Area Strat -->
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="loadData">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <?php
                                if(isset($_POST['view'])){

                                
                                include("connect.php");
                                $id = $_POST['view'];
                                $sql = "SELECT c.name AS catname, d.* FROM products d JOIN categories c ON d.category_id = c.id  WHERE d.id='$id'";
                                $results = $connect->query($sql);
                                $row = $results->fetch_assoc();

                                ?>
                                <div class="col-lg-4 col-md-6">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images">
                                            <div class="lg-image">
                                                <img src="<?php $path = $row['image1'];
                                                            $display = substr($path, 3);
                                                            echo $display; ?>" alt="">
                                                <a href="<?php $path = $row['image1'];
                                                            $display = substr($path, 3);
                                                            echo $display; ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="<?php $path = $row['image2'];
                                                            $display = substr($path, 3);
                                                            echo $display; ?>" alt="">
                                                <a href="<?php $path = $row['image2'];
                                                            $display = substr($path, 3);
                                                            echo $display; ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="<?php $path = $row['image1'];
                                                            $display = substr($path, 3);
                                                            echo $display; ?>" alt="">
                                                <a href="<?php $path = $row['image1'];
                                                            $display = substr($path, 3);
                                                            echo $display; ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src=".<?php $path = $row['image2'];
                                                            $display = substr($path, 3);
                                                            echo $display; ?>" alt="">
                                                <a href="<?php $path = $row['image2'];
                                                            $display = substr($path, 3);
                                                            echo $display; ?>" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>

                                        </div>
                                        <div class="product-details-thumbs">
                                            <div class="sm-image"><img src="<?php $path = $row['image1'];
                                                                            $display = substr($path, 3);
                                                                            echo $display; ?>" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="<?php $path = $row['image2'];
                                                                            $display = substr($path, 3);
                                                                            echo $display; ?>" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="<?php $path = $row['image1'];
                                                                            $display = substr($path, 3);
                                                                            echo $display; ?>" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="<?php $path = $row['image2'];
                                                                            $display = substr($path, 3);
                                                                            echo $display; ?>" alt="product image thumb"></div>

                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <?php } ?>
                                <div class="col-lg-8 col-md-6">
                                    <!--Product Details Content Start-->
                            <div class="product-details-content">
                                <h2><?php echo $row['name'] ?></h2>
                                <div class="single-product-reviews">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star-o"></i>
                                    <a class="review-link" href="#">(1 customer review)</a>
                                </div>
                                <div class="single-product-price">
                                    <span class="price new-price">Rs. <?php echo $row['price'] ?></span>

                                </div>
                                <div class="product-description">
                                    <p><?php echo $row['description'] ?></p>
                                </div>

                                <div class="single-product-quantity">
                                    <form class="add-quantity" action="#">
                                        <div class="product-quantity">
                                            <input value="1" type="number">
                                        </div>
                                        <div class="add-to-link">
                                            <button class="btn"><i class="fa fa-shopping-bag"></i>add to cart</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="wishlist-compare-btn">
                                    <a href="#" class="wishlist-btn">Add to Wishlist</a>

                                </div>
                                <div class="product-meta">
                                    <span class="posted-in">
                                        Category:
                                        <a href="#"><?php echo $row['catname'] ?></a>
                                    </span>
                                </div>
                                <div class="single-product-sharing">
                                    <h3>Share this product</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Product Details Content End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Area End -->