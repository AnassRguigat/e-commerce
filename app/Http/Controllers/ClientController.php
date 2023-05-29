<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ShippingInfo;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class ClientController extends Controller
{
    public function CategoryPage($id){
        $subcategorysingle = Subcategory::findOrFail($id);
        $product = Product::where('product_subcategory_id',$id)->latest()->get();
        return view('user.menufilter',compact('subcategorysingle','product'));
    }
    public function SingleProduct($id){
        $product = Product::findOrFail($id);
        return view('user.singleproduct',compact('product'));
    }
    public function AddToCart(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();
        return view('user.addtocart',compact('cart_items'));
    }
    public function AddProductToCart(Request $request){
        $product_price = $request->price;
        $quantity = $request->quantity;
        $price = $product_price * $quantity;
        Cart::insert([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity,
            'price' => $price
        ]);
        return redirect()->back()->with('message','Product added in cart successfully');
    }
    public function Checkout(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();
        $shipping_address = ShippingInfo::where('user_id',$userid)->first();
        return view('user.checkout',compact('cart_items','shipping_address'));
    }
    public function UserProfile(){
        return view('user.userprofile');
    }
    public function PendingOrders(){
        $userid = Auth::id();
        $pending_orders = Order::where('status','pending')->where('userid',$userid )->latest()->get();
        return view('user.pendingorders',compact('pending_orders'));
    }
    public function History(){
        return view('user.history');
    }
    public function DeleteToCart($id){
        Cart::findOrFail($id)->delete();
        return redirect()->route('addtocart')->with('message','your product deleted successfully');
    }
    public function GetShippingAddress(){
        return view('user.shippingaddress');
    }
    public function AddShippingAddress(Request $request){
        ShippingInfo::insert([
            'user_id'=> Auth::id(),
            'phone_number' => $request->phone_number,
            'city_name' =>$request->city_name,
            'postal_code' => $request->postal_code,
        ]);
        return redirect()->route('checkout')->with('message','Shipping address Send correctly');
    }
    public function PlaceOrder(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id',$userid)->get();
        $shipping_address = ShippingInfo::where('user_id',$userid)->first();
        foreach($cart_items as $item){
            Order::insert([
                'userid' => $userid,
                'shipping_phoneNumber' => $shipping_address->phone_number,
                'shipping_city' => $shipping_address->city_name,
                'shipping_postalcode' => $shipping_address->postal_code,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'total_price' => $item->price,
            ]);
            $id = $item->id;
            Cart::findOrFail($id)->delete();
        }
        ShippingInfo::where('user_id',$userid)->first()->delete();
        
        return redirect()->route('pendingorders')->with('message','your Order has been placeed Successfully');
    }
    public function CancelOrder()
{
    $userid = Auth::id();
    ShippingInfo::where('user_id', $userid)->delete();
    return redirect()->route('addtocart')->with('message', 'Your order has been canceled successfully');
}
}

