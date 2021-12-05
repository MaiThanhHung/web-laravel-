@extends('welcome')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div>

			
			<div class="review-payment">
				<h2>Xem lại giỏ hàng</h2>
			</div>
			<div class="row">
            	
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="list-cart">
                <!-- SHOPING-CART-MENU START -->
                @if(Session::has('cart') !=null)
                <div class="table-responsive">
                    <!-- TABLE START -->
                    <table class="table table-bordered" id="cart-summary">
                        <!-- TABLE HEADER START -->
                        <thead>
                            <tr>
                            <th class="cart-product">Hinh ảnh</th>
                                <th class="cart-description">Mô tả</th>
                                
                                <th class="cart-unit text-right">Giá</th>
                                <th class="cart_quantity text-center">Qty</th>
                                
                                <th class="cart-total text-right">tổng</th>
                            </tr>
                        </thead>
                        <!-- TABLE HEADER END -->
                        <!-- TABLE BODY START -->
                        <tbody>	
                            <!-- SINGLE CART_ITEM START -->
                            
	                        @foreach(Session::get('cart')->items as $product)
                            <tr>
                                <td class="cart-product">
                                    <a href="#"><img alt="Blouse" src="{{URL::to('public/uploads/product/'.$product['item']->product_image)}}"></a>
                                </td>
                                <td class="cart-description">
                                    <p class="product-name"><a href="#">{{($product['item']->product_name)}}</a></p>
                                    
                                </td>
                                
                                <td class="cart-unit">
                                    <ul class="price text-right">
                                        <li class="price">{{number_format($product['item']->product_price)}} VND</li>
                                    </ul>
                                </td>
                                <td class="cart_quantity text-center">
                                    
                                    <span class="price">
                                    {{($product['qty'])}}
                                    </span>
                                    
                                </td>
                                
                                <td class="cart-total">
                                    <span class="price">{{number_format(($product['item']->product_price )*($product['qty']))}} VND</span>
                                </td>
                            </tr>
                            <!-- SINGLE CART_ITEM END -->
                            @endforeach
                            
                        </tbody>
                        <!-- TABLE BODY END -->
                        <!-- TABLE FOOTER START -->
                        <tfoot>										
                            
                            <tr>
                                <td class="total-price-container text-right" colspan="3">
                                    <span>Tổng thanh toán</span>
                                </td>
                                <td id="total-price-container" class="price" colspan="2">
                                    <span id="total-price">{{number_format(Session::get('cart')->totalPrice)}} VND</span>
                                </td>
                            </tr>
                        </tfoot>
                        		
                        <!-- TABLE FOOTER END -->									
                    </table>
                    <!-- TABLE END -->
                </div>
            
            
                

            @endif
        </div>
			<h4 style="margin:40px 0;font-size: 20px;">Chọn hình thức thanh toán</h4>
			<form method="POST" action="{{URL::to('/order-place')}}">
				{{ csrf_field() }}
			<div class="payment-options">
					<span>
						<label><input name="payment_option" value="1" type="checkbox"> Trả bằng thẻ ATM</label>
					</span>
					<span>
						<label><input name="payment_option" value="2" type="checkbox"> Nhận tiền mặt</label>
					</span>
					<span>
						<label><input name="payment_option" value="3" type="checkbox"> Thanh toán thẻ ghi nợ</label>
					</span>
					<input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm">
			</div>
			</form>
		</div>
	</section> <!--/#cart_items-->

@endsection