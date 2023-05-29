
<?php $__env->startSection('content'); ?>
  <!-- Slider Section -->
    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide slide1">
                    <div class="content">
                        <h3>We are open</h3>
                        <h1>Best Vape of 2023</h1>
                        <p>Vape Shop</p>
                        <a href="<?php echo e(route('Menu')); ?>" class="btn"><span>Order Now</span></a>
                    </div>
                </div>
                <div class="swiper-slide slide slide2">
                    <div class="content">
                        <h3>We are open</h3>
                        <h1>Discount 20% Vape</h1>
                        <p>Vape Shop</p>
                        <a href="<?php echo e(route('Menu')); ?>" class="btn">Order Now</a>
                    </div>
                </div>
                <div class="swiper-slide slide slide3">
                    <div class="content">
                        <h3>We are open</h3>
                        <h1>Discount 20% Vape</h1>
                        <p>Vape Shop</p>
                        <a href="<?php echo e(route('Menu')); ?>" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div> 
    <!-- End Slider Section  -->
    <!-- About Section  -->
    <div class="about" id="aboutUs">
       <div class="container-about">
        <div class="article-about">
            <div class="title-about">
                <h1>About <span> Us</span></h1>
            </div>
            <div class="content-about">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit . </h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore vero nostrum consectetur aliquam? Obcaecati
                     autem norepudiandae sit nesciunt ipsum quam beatae quae vitae, ad vel. Eos, enim.</p>
                    <div class="button">
                        <a href="">SEE MORE</a>
                    </div>
            </div>
        </div>
        <div class="image-section-about">
            <img src="./assets/images/vape6.jpg" style="border-radius:15px;" alt="">
        </div>
       </div>
    </div>
    <!-- End About Section  -->
    <!-- Popular Section  -->
    <div class="popular" id="popular">
        <h1 class="heading">The<span> latest </span>Vapes</h1>
        <div class="box-container">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div  style="max-width:450px;" class="box">
                <span class="price">MAD <?php echo e($product->price); ?></span>
                <img src="<?php echo e(asset($product->product_img)); ?>" alt="">
                <h3 style="font-size: 36px;font-family: Helvetica, Arial, sans-serif;font-weight: 600;text-align: center; color: white;"><?php echo e($product->product_name); ?></h3>
                <a href="<?php echo e(route('singleproduct',[$product->id,$product->slug])); ?>" class="btn-seemore">See more</a>
                <form action="<?php echo e(route('addproducttocart')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id" />
                    <input type="hidden" value="<?php echo e($product->price); ?>" name="price" />
                    <input type="hidden" value="1" name="quantity" />
                    <input class="btn-add-to-cart" style="color: #000;
    background-color: #FF4C29;
    border-radius: 15PX;
    border:none;width:120px;
    padding:10px 18px;
    float: left;
font-size: 16px;" type="submit" value="Add To Cart" >
                </form>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!-- End Popular Section  -->
    <!--contact-->
    <div class="contact" id="Reservation">
        <h3>Contact <span> Us</span></h3>
        <div style="margin-top:10px;" class="contact-container">
            <div class="form-container"> 
                <form  class="contact-form">
                    <table>
                        <tr>
                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                        </tr>
                        <tr>
                            
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            
                        </tr>
                        <tr>
                            
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                            
                        </tr>
                        
                        <tr>
                            
                                <textarea name="message" cols="8" rows="8" id="message"   placeholder="Message" required=""></textarea>
                            
                        </tr>
                        <tr>
                            <td>
                                <input type="submit"  class="send-button"value="Send Message">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5565.082117441955!2d-6.85919969313177!3d33.966386482863015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sma!4v1683671047533!5m2!1sar!2sma"  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"></iframe>
            </div>
        </div>
    </div>
    <!--end contact-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/user/home.blade.php ENDPATH**/ ?>