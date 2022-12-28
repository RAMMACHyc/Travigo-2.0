<?php
    $data = new TravigoController();
    $travells = $data->getAllTravell();
?>
<!DOCTYPE html>
<html>

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
        <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) { ?>

        <div class="container bg-dark">
                        <div class="row my-4">
                                <div class="card" style="margin-bottom: 3%; text-align: center;">
                                        <a href="<?php echo BASE_URL; ?>add">
                                        <button style="background-color: aqua; padding: 7px 15px; cursor: pointer; border-radius: 5px; margin-top: 5%;">ajout</button>
                                        </a>
                                </div>
                        </div>
                    </div>
        <?php } ?>

     <div class="package-content">

        
    
        <?php foreach($travells as $travell):?>
            <!-- --------- -->
     
<!-- --------- -->
            <div class="box">
                <div class="thum">
                    <?php echo '<img src="data:image/jpeg;base64,'. base64_encode($travell["image"]) .'" width="100%" />'; ?>
                    <h3><?php echo $travell['prix'];?></h3>
                </div>
                <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) { ?>

                <form method="post" class="mr-1" action="update">
                    <input type="hidden" name="id" value="<?php echo $travell['id'];?>">

                        <button style="background-color: yellow; padding: 7px 15px; cursor: pointer; border-radius: 5px; ">
                        update
                        </button>
                </form>
                <form method="post" class="mr-1" action="delete">
                                            <input type="hidden" name="id" value="<?php echo $travell['id'];?>">
                        <button style="background-color: red; padding: 7px 15px; cursor: pointer; border-radius: 5px; ">
                        delete
                        </button>
                </form>
                <?php } ?>

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