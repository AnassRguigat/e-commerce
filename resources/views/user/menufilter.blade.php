@extends('user.menu')
@section('menu')
    

    @foreach($product as $product)
    
<div style="max-width:450px;" class="box">
                <span class="price">MAD {{$product->price}}</span>
                <img src="{{asset($product->product_img)}}" alt="">
                <h3 style="font-size: 36px;font-family: Helvetica, Arial, sans-serif;font-weight: 600;text-align: center; color: #000000;">{{$product->product_name}}</h3>
                <a href="{{route('singleproduct',[$product->id,$product->slug])}}" class="btn-seemore">See more</a>
                <form action="{{route('addproducttocart')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$product->id}}" name="product_id" />
                    <input type="hidden" value="{{$product->price}}" name="price" />
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
@endforeach
@endsection