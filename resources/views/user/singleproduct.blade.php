<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
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
        <a href="{{route('Home')}}" class="logo"><span >WeSellVapes</span></a>
        <ul class="navbar">
            <li><a href="{{route('Home')}}" class="active">Home</a></li>
            <li><a href="{{route('Home')}} #aboutUs" >About Us</a></li>
            <li><a href="{{route('Home')}} #Reservation" >Contac Us</a></li>
            <li><a href="{{route('Menu')}}">Product</a></li>
        </ul>
        <div class="main">
        @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/user-profile') }}" >Dashboard</a>
                    @else 
                        <a href="{{ route('login') }}" class="user">Sign In</a>
                        <a href="{{ route('register') }}">Register</a>
                        
                    @endauth
            @endif
            @php
                use Illuminate\Support\Facades\Auth; // Import the Auth facade

                $count = 0; // Set default count to 0
                if (Auth::check()) {
                    // Check if user is authenticated
                    $count = App\Models\Cart::where('user_id', Auth::user()->id)->count();
                }

            @endphp
            <a href="{{route('addtocart')}}"><i class="fa-solid fa-cart-shopping"></i><small>{{$count}}</small></a>
            <i  class="fa-solid fa-bars" id="menu-icon"></i>
        </div>
    </header>
    <!-- End Header -->
    <!-- Slider Section -->
    <main>
        <div class="left" style="color:black;">
            <img style="height:500px" src="{{asset($product->product_img)}}" alt="">
        </div>
        <div class="right">
            <div class="title">
                <h3>{{$product->product_name}}</h3>
            </div>
            <div class="content">
               <p>{{$product->product_short_des}}</p>
                <p>Category : {{$product->product_subcategory_name}}</p> 
                <p>Price :{{$product->price}} MAD</p> 
                <p>Available Quantity : {{$product->quantity}}</p> 
                <form action="{{route('addproducttocart')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="product_id" />
                    <input type="hidden" value="{{$product->id}}" name="product_id" />
                    <input type="hidden" value="{{$product->price}}" name="price" />
                    <label style="color:white;" for="quantity">How Many : </label>
                    <input type="number" min='1' value="1"  name="quantity"required /><br>
                    <input  class="add-to-cart" type="submit" value="Add To Cart" >
                </form>
            </div>
            
        </div>
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
                <a href="#">Contact Us</a>
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
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".home-slider", {
      spaceBetween: 15,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      loop:true,
    });
  </script>
    <script src="./assets/app.js"></script>
</body>
</html>