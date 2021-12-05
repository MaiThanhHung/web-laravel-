@if(Session::has('cart') !=null)
	@foreach(Session::get('cart')->items as $product)
	<div class="shipping-item">
		<span class="cross-icon"><i class="fa fa-times-circle" data-id="{{($product['item']->product_id)}}"></i></span>
		<div class="shipping-item-image">
			<a href="#"><img style="width: 80px;" src="{{URL::to('public/uploads/product/'.$product['item']->product_image)}}" alt="shopping image" /></a>
		</div>
		<div class="shipping-item-text">
			<span>{{($product['qty'])}} <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">{{($product['item']->product_name)}}</a></span>
			<span class="pro-quality"><a href="#">{{($product['item']->product_name)}}</a></span>
			<p>{{($product['item']->product_price)}}</p>
		</div>
	</div>
	@endforeach


<div class="shipping-total-bill">
	<div class="cart-prices">
		<span class="shipping-cost">Free</span>
		<span>Shipping</span>
	</div>
	<div class="total-shipping-prices">
		<span class="shipping-total">{{($newCart->totalPrice)}}</span>
		<span>Total</span>
	</div>										
</div>
<div class="shipping-checkout-btn">
	@if(Session::has('customer_id'))
	<a href="{{URL::to('/checkout')}}" class="procedtocheckout">Đặt hàng<i class="fa fa-chevron-right"></i></a>
	@else 
	<a href="{{URL::to('/login')}}" class="procedtocheckout">Đặt hàng<i class="fa fa-chevron-right"></i></a>
	@endif
</div>

@endif