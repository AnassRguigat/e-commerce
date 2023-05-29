<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('/assets/style.css')); ?>">
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
    <div class="container-fuild">
    <!-- Header -->
    <header style="background-color: #000;">
        <a href="<?php echo e(route('Home')); ?> #home" class="logo"><span>WeSellVapes</span></a>
        <ul class="navbar">
            <li><a href="<?php echo e(route('Home')); ?> #home" class="active Links">Home</a></li>
            <li><a href="<?php echo e(route('Home')); ?> #aboutUs" class="Links">About Us</a></li>
            <li><a href="<?php echo e(route('Home')); ?> #Reservation" class="Links">Reservation</a></li>
            <li><a href="<?php echo e(route('Menu')); ?>" class="Links">Product</a></li>
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
            <i class="fa-solid fa-bars" id="menu-icon"></i>
        </div>
    </header>
    <!--end header-->
  <main id="dash">
  <section id="activity">
    <h2>Final Step To place Your Order</h2>
    <h3 style="margin-left:18px;">Product Will Send At -</h3>
    <p>City/Village - <?php echo e($shipping_address->city_name); ?></p>
    <p>Postal Code - <?php echo e($shipping_address->postal_code); ?></p>
    <p>Phone Number - <?php echo e($shipping_address->phone_number); ?></p>
    <div style="display:flex;" >
    <div style="margin:0px;">
    <form action="<?php echo e(route('placeorder')); ?>" method="POST">
        <?php echo csrf_field(); ?> 
        <input type="submit" style="cursor:pointer;color:white;background:blue;padding:12px;border:none;border-radius:12px;margin-left:18px;" value="Place Order"/>
    </form>
    </div>
    <div style="margin: 0px;" >
    <form action="<?php echo e(route('cancelorder')); ?>" method="POST">
        
        <?php echo csrf_field(); ?> 
        <input type="submit" style="cursor:pointer;color:white;background:red;padding:12px;border:none;border-radius:12px;"value="Cancel Order"/>
    </form>
    </div>
    </div>
    </section>
    <section style="overflow-x: auto;" class="settings" id="settings">
    <h2>Your final Products Are-</h2>
    <div class="table-container-product-final">
      <table class="table-product-final">
        <thead class="thead-product-final">
          <tr border-bottom:0.5 solid black; class="tr-product-final">
            
          <th class="th-product-final">Name</th>
            <th class="th-product-final">Quantity</th>
            <th class="th-product-final">Price</th>
            <!-- Ajoutez plus de colonnes au besoin -->
          </tr>
        </thead>
        <tbody class="tbody-product-final">
        <?php 
                    $total = 0;
         ?>
            <?php $__currentLoopData = $cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr style="border-bottom:0.5 solid black;" class="tr-product-final">
            <?php
                        $product_name = App\Models\Product::where('id',$cart->product_id)->value('product_name');
                        $img = App\Models\Product::where('id',$cart->product_id)->value('product_img');
            ?>
          <td class="td-product-final" data-label="Name"><?php echo e($product_name); ?></td>
            <td class="td-product-final" data-label="quantity"><?php echo e($cart->quantity); ?></td>
            <td class="td-product-final" data-label="Price">$<?php echo e($cart->price); ?></td>
            <!-- Ajoutez plus de lignes au besoin -->
          </tr>
          <?php 
                    $total = $total + $cart->price;
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr border-bottom:0.5 solid black; class="tr-product-final">
            <td class="td-product-final" ></td>
            <td class="td-product-final" >Total</td>
            <td class="td-product-final" >$ <?php echo e($total); ?></td>
        </tbody>
      </table>
    </div>
  </section>
  </main>
    <!-- footer-->
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Restaurant<span>Food</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About Us</a>
                |
                <a href="#">Reservation</a>
                |
                <a href="#">Food Menu</a>
            </p>

            <p class="footer-company-name">Copyright © 2021 <strong>Anass Randy</strong> All rights reserved</p>
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
                <strong>Restaurant Food </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
    </div>
 
    <script src="./assets/app.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/user/checkout.blade.php ENDPATH**/ ?>