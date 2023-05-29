@extends('user.layouts.userprofiletemplate')
@section('profile-content')
<h2>Pending order</h2>
<table class="table-product-final">
        <thead class="thead-product-final">
          <tr border-bottom:0.5 solid black; class="tr-product-final">
            
          <th class="th-product-final">Name</th>
            <th class="th-product-final">Price</th>
            <!-- Ajoutez plus de colonnes au besoin -->
          </tr>
        </thead>
        <tbody class="tbody-product-final">
        @foreach($pending_orders as $order)
        @php 
        $product_name = App\Models\Product::where('id',$order->product_id)->value('product_name');
        @endphp 
          <tr style="border-bottom:0.5 solid black;" class="tr-product-final">
          <td class="td-product-final" data-label="Name">{{$product_name}}</td>
            <td class="td-product-final" data-label="Price">${{$order->total_price}}</td>
            <!-- Ajoutez plus de lignes au besoin -->
          </tr>
        @endforeach
            
        </tbody>
      </table>
@endsection