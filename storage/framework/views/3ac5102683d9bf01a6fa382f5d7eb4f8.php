<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website | Home</title>
</head>
<body>
    <div class="container-fuild">
    <!-- Header -->
    <header style="background-color: #000;" >
        <a href="<?php echo e(route('Home')); ?>" class="logo"><span >WeSellVapes</span></a>
        <ul class="navbar">
            <li><a href="<?php echo e(route('Home')); ?>" class="active">Home</a></li>
            <li><a href="<?php echo e(route('Home')); ?> #aboutUs" >About Us</a></li>
            <li><a href="<?php echo e(route('Home')); ?> #Reservation" >Contac Us</a></li>
            <li><a href="<?php echo e(route('Menu')); ?>">Product</a></li>
        </ul>
        <div class="main">
        <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/user-profile')); ?>" >Dashboard</a>
                    <?php else: ?> 
                        <a href="<?php echo e(route('login')); ?>" class="user">Sign In</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                        
                    <?php endif; ?>
            <?php endif; ?>
            <?php
                use Illuminate\Support\Facades\Auth; // Import the Auth facade

                $count = 0; // Set default count to 0
                if (Auth::check()) {
                    // Check if user is authenticated
                    $count = App\Models\Cart::where('user_id', Auth::user()->id)->count();
                }

            ?>
            <a href="<?php echo e(route('addtocart')); ?>"><i class="fa-solid fa-cart-shopping"></i><small><?php echo e($count); ?></small></a>
            <i  class="fa-solid fa-bars" id="menu-icon"></i>
        </div>
    </header>
    <!-- End Header -->
    <main >
        <h2 style="padding:20px;">Provide your Shipping Information</h2><br>
        <form style="padding:20px;text-align:center;" action="<?php echo e(route('addshippingaddress')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div style="padding:20px;">
            <label  for="phone_number">Phone Number</label>
            <input style="margin-top:20px;padding:15px;width:300px;border:none;border-radius:15px;color:black;font-size:20px" type="number" name="phone_number"><br>
            </div>
            <div style="padding:20px;">
            <label for="city_name">City/Village Name</label>
            <input style="margin-top:20px;padding:15px;width:300px;border:none;border-radius:15px;color:black;font-size:20px" type="text" name="city_name"><br>
            </div>
            <div style="padding:20px;">
            <label for="postal_code">Postal Code Number</label>
            <input style="margin-top:20px;padding:15px;width:300px;border:none;border-radius:15px;color:black;font-size:20px;" type="number" name="postal_code"><br>
            </div>
            <div style="padding:20px;">
            <input type="submit" style="padding:15px;width:150px;border:none;border-radius:15px;background:blue;color:white;color:white;" value="Next">
            </div>
        </form>
    </main>
     <!--footer-->
     <footer  class="footer-distributed" style="border:none;">

<div class="footer-left">
    <h3>WeSell<span>Vapes</span></h3>

    <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">About Us</a>
        |
        <a href="#">Conatct Us</a>
        |
        <a href="#">Product</a>
    </p>

    <p class="footer-company-name">Copyright © 2023 <strong>Anass Randy</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Rabat</span>
            Hay riad</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>0624330508</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="anass.randy00.@gmail.com">anass.randy00@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
        <strong>WeSellVapes </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Recusandae aspernatur ratione aperiam nemo iure, 
        dolores temporibus similique neque saepe quidem! Odit harum quam, 
        perspiciatis laborum dolorem iusto adipisci excepturi explicabo.
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
    </div>
</div>
</footer>
</div>
<!--end footer-->
<!-- Swiper JS -->

<script>
</script>
<script src="./assets/app.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/user/shippingaddress.blade.php ENDPATH**/ ?>