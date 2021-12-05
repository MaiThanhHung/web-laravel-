@extends('welcome')
@section('content')

<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="{{URL::to('/')}}">Trang chủ</a>
							<span><i class="fa fa-caret-right"></i></span>
							<span>Thực đơn</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<!-- PRODUCT-LEFT-SIDEBAR START -->
						<div class="product-left-sidebar">
							<h2 class="left-title pro-g-page-title">Catalog</h2>
							
							
							
							
							<!-- SINGLE SIDEBAR CATEGORIES START -->
							<div class="product-single-sidebar">
								<span class="sidebar-title">Danh mục</span>
								<ul>
									@foreach($category as $key => $value)
									<li>
										
										<a onclick="category({{$value->category_id}})" href="javascript:">{{($value->category_name)}}</a>
									</li>
									@endforeach
								</ul>
							</div>
							<!-- SINGLE SIDEBAR CATEGORIES END -->
						</div>
						<!-- PRODUCT-LEFT-SIDEBAR END -->
						
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="category">
						@yield('product')
					</div>
				</div>
			</div>

@endsection