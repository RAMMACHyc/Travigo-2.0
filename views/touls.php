<?php
    $data = new TravigoController();
    $travells = $data->getAllTravell();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Travel Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../travigo2.0/views/css/style1.css">
    <link rel="stylesheet" type="text/css" href="../../travigo2.0/views/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://allfont.net/allfont.css?fonts=poetsen" rel="stylesheet" type="text/css" />

</head>
<!--header--->
<header>
    <a href="#" class="logo"><b>Travigo</b></a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
            <li><a href="index">Home</a></li>
            <li><a href="touls">Tours</a></li>
            <li><a href="about">About</a></li>
            <li><a href="travi">Contact Us</a></li>
    </ul>
</header>

<body>

    <div class="body">
        <div class="heading">
            <h1>Travel With Us</h1>
            <br>
            <p>Travel you are not a tree, Explore our trips and live The Good Life with Travigo</p>
            <br>
            <br>
            <a href="#">Learn More</a>
        </div>
        <div class="tours">
            <div class="places">
                <h2>Australia</h2>
                <img src="../../travigo2.0/views/img/img1.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Book Now 15% OFF</a>
            </div>
            <div class="places">
                <h2>New York</h2>
                <img src="../../travigo2.0/views/img/img2.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Book Now 20% OFF</a>
            </div>
            <div class="places">
                <h2>Thailand</h2>
                <img src="../../travigo2.0/views/img/img3.jpg" style="width: 300px; height: 250px; border-radius: 12px;">
                <br>
                <br>
                <a href="#">Book Now 25% OFF</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--Package section--->
    <section class="package" id="package">
        <div class="title">
            <h2>Our Upcoming <br> Tour Package</h2>
        </div>

        <div class="package-content">
            

            

            

       
           

           
        <?php foreach($travells as $travell):?>
            <!-- --------- -->
     
<!-- --------- -->
            <div class="box">
                <div class="thum">
                    <?php echo '<img src="data:image/jpeg;base64,'. base64_encode($travell["image"]) .'" width="100%" />'; ?>
                    <h3><?php echo $travell['prix'];?></h3>
                </div>

                <div class="dest-content">
                    <div class="location">
                        <h4><?php echo $travell['name'];?></h4>
                        <p><?php echo $travell['date'];?></p>
                    </div>
                    <div class="stars">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>

        
        
            </section>
    <!--footer--->
    <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="list">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Tours</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Tour</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href="#">98 West 21th Street</a></li>
                        <li><a href="#">New York NY 10016</a></li>
                        <li><a href="#">+(123)-123-1234</a></li>
                        <li><a href="#">info@travigo.com</a></li>
                        <li><a href="#">+(123)-123-1234</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook' ></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                        <a href="#"><i class='bx bxl-linkedin' ></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="end-text">
            <p>Copyright ©2022 All rights reserved | Travigo</p>
        </div>
    </section>
    <script src="../../travigo2.0/views/js/script.js"></script>
</body>

</html>