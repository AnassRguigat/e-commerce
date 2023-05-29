
<?php $__env->startSection('content'); ?>
<div class="container">
         <div class="img">
             <img src="./assets/images/login.jpg">
         </div>
         <div class="login-content">
             <form action="index.html" class="form-login">
                 <img src="https://i.ibb.co/H4f3Hkv/profile.png">
                 <h2 class="title">Welcome</h2>
                 <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Userame</h5>
                        <input type="text" class="input">
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" class="input">
                    </div>
                 </div>
                 <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                   <input type="submit" class="btn" value="Register">
             </form>
         </div>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/auth/register.blade.php ENDPATH**/ ?>