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

			<div class="register-req">
				<p>Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Điền thông tin gửi hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST" class="primari-box personal-info-box">
								{{ csrf_field() }}
                                <div class="form-group primary-form-group p-info-group">
									<input type="text" name="shipping_email" class="shipping_email" placeholder="Điền email">
                                </div>
                                <div class="form-group primary-form-group p-info-group">
                                	<input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và tên người gửi">
                                </div>
                                <div class="form-group primary-form-group p-info-group">	
                                    <input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ gửi hàng">
                                </div>
                                <div class="form-group primary-form-group p-info-group">
                                    <input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại">
                                </div>	
									
									

									
									
									
									
									<button class="btn main-btn">Đặt hàng</button>
								</form>
								

							</div>
							
						</div>
					</div>
					<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    
                    <span>giỏ hàng</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
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
    </div>

@endsection