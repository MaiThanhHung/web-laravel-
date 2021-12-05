@extends('welcome')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- BSTORE-BREADCRUMB START -->
                <div class="bstore-breadcrumb">
                    <a href="{{URL::to('/')}}">Trang chú</a>
                    <span><i class="fa fa-caret-right	"></i></span>
                    <span>Giỏ hàng của bạn</span>
                </div>
                <!-- BSTORE-BREADCRUMB END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- SHOPPING-CART SUMMARY START -->
                <h2 class="page-title">Giỏ hàng </h2>
                <!-- SHOPPING-CART SUMMARY END -->
            </div>	
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="list-cart">
                
                <!-- CART TABLE_BLOCK START -->
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
                                <th class="cart-delete">&nbsp;</th>
                                <th class="cart-delete">&nbsp;</th>
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
                                <form action="{{URL::to('/update-cart-qty')}}" method="POST">
                                {{ csrf_field() }}
                                <td class="cart_quantity text-center">
                                    <div class="cart-plus-minus-button">
                                    
                                    <input class="cart-plus-minus" type="number" name="qtybutton" value="{{($product['qty'])}}">
                                    </div>
                                </td>
                                <td class="cart-delete text-center">
                                    <span>
                                    <input type="hidden" value="{{$product['item']->product_id}}" name="rowId_cart" class="form-control">
                                    <input type="submit" value="Cập nhật" name="update_qty" class="check_out btn btn-default btn-sm">
                                    </span>
                                </td>
                                </form>
                                <td class="cart-delete text-center">
                                    <span>
                                        <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')"  href="{{URL::to('/delete-item-list-cart/'.$product['item']->product_id)}}" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
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
                                <td id="total-price-container" class="price" colspan="4">
                                    <span id="total-price">{{number_format(Session::get('cart')->totalPrice)}} VND</span>
                                </td>
                            </tr>
                        </tfoot>
                        		
                        <!-- TABLE FOOTER END -->									
                    </table>
                    <!-- TABLE END -->
                </div>
                
                <!-- CART TABLE_BLOCK END -->
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- RETURNE-CONTINUE-SHOP START -->
                <div class="returne-continue-shop">
                    <a href="{{URL::to('/thuc-don')}}" class="continueshoping"><i class="fa fa-chevron-left"></i>Tiếp tục mua hàng</a>
                    @if(Session::has('customer_id'))
                    <a href="{{URL::to('/checkout')}}" class="procedtocheckout">Đặt hàng<i class="fa fa-chevron-right"></i></a>
                    @else 
                    <a href="{{URL::to('/login')}}" class="procedtocheckout">Đặt hàng<i class="fa fa-chevron-right"></i></a>
                    @endif
                    
                </div>	
                <!-- RETURNE-CONTINUE-SHOP END -->						
            </div>
            @else
            <h1>
            @php 
                echo 'Bạn chưa có sản phẩm trong giỏ hàng';
            @endphp
            </h1>
                

            @endif
        </div>
    </div>

@endsection