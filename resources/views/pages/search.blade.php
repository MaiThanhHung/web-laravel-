@extends('welcome')
@section('content')
<div class="container">

<div class="row">
    <div class="center-title-area">
        <h2 class="center-title">Kết quả tìm kiếm </h2>
    </div>
    
        <ul class="gategory-product">
            @foreach($search_product as $key => $product)
            <!-- SINGLE ITEM START -->
            <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="product-image" /></a>
                        <a href="#" class="new-mark-box">new</a>
                        <div class="overlay-content">
                            <ul>
                            <li><a href="{{URL::to('/chi-tiet/'.$product->product_id)}}" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a onclick="AddCart({{$product->product_id}})" href="javascript:" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="customar-comments-box">
                            <div class="rating-box">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </div>
                            <div class="review-box">
                                <span>1 Review(s)</span>
                            </div>
                        </div>
                        <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">{{$product->product_name}}</a>
                        <div class="price-box">
                            <span class="price">{{number_format($product->product_price)}} VND</span>
                        </div>
                    </div>
                </div>									
            </li>
            <!-- SINGLE ITEM END -->
            @endforeach								
        </ul>
        
    </div>

</div>
@endsection