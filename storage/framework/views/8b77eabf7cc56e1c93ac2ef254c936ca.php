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
    <title>WeSellVapes | Home</title>
</head>
<body>
    <!-- Header -->
    <header style="margin-bottom:200px;background-color: #000;">
        <a href="<?php echo e(route('Home')); ?>" class="logo"><span >WeSellVapes</span></a>
        <ul class="navbar">
            <li><a href="<?php echo e(route('Home')); ?>" class="active">Home</a></li>
            <li><a href="<?php echo e(route('Home')); ?> #aboutUs" >About Us</a></li>
            <li><a href="<?php echo e(route('Home')); ?> #Reservation" >Reservation</a></li>
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
    <?php if(session()->has('message')): ?>
                  <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                  </div>
                <?php endif; ?>
    <!-- End Header -->
    <div class="table-container" style="padding-bottom:100px;">
        <h1 class="heading-table">CART</h1>
        <table class="table" style="color:black;">
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $total = 0;
                ?>
            <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php
                        $product_name = App\Models\Product::where('id',$cart->product_id)->value('product_name');
                        $img = App\Models\Product::where('id',$cart->product_id)->value('product_img');
                    ?>
                    <td data-label="Product Name">
                        <img style="height:70px;" src="<?php echo e(asset($img)); ?>" alt="">
                    </td>
                    <td data-label="Product Name"><?php echo e($product_name); ?></td>
                    <td data-label="Price"><?php echo e($cart->price); ?></td>
                    <td data-label="Quantity"><?php echo e($cart->quantity); ?></td>
                    <td data-label="Action"> <a href="<?php echo e(route('removetocart',$cart->id)); ?>">Remove</a> </td>
                </tr>
                <?php 
                    $total = $total + $cart->price;
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td><?php echo e($total); ?></td>
                    <?php if($total <=0 ): ?>
                    <td><a href="" style='pointer-events: none; opacity: 0.5;' >Checkout</a></td>
                    <?php else: ?>
                    <td><a href="<?php echo e(route('shippingaddress')); ?>">Checkout</a></td>
                    <?php endif; ?>
                </tr>
            </tbody>
        </table>





    </div>
    
       <!--footer-->
            <footer class="footer-distributed" style="border:none;">

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
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            </footer>

        <!--end footer-->
   
        
    <script >
        // Get the modal
var modal = document.getElementById("myModal");


// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var closeform = document.getElementById("idCloseform");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

closeform.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/user/addtocart.blade.php ENDPATH**/ ?>