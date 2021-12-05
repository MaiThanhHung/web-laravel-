@extends('welcome')
@section('content')

<<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="{{URL::to('/')}}">Trang chủ</a>
							<span><i class="fa fa-caret-right	"></i></span>
							<span>Đăng kí</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title">Tạo tài khoản</h2>
					</div>	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- PERSONAL-INFOMATION START -->
						<div class="personal-infomation">
							<form class="primari-box personal-info-box" id="personalinfo" method="post" action="{{URL::to('/add-customer')}}">
                            {{ csrf_field() }}
								<h3 class="box-subheading">Thông tin đăng kí</h3>
								<div class="personal-info-content">
									
									<div class="form-group primary-form-group p-info-group">
										<label for="firstname">Họ tên <sup>*</sup></label>
										<input type="text" value="" name="name" id="name"  class="form-control input-feild">
										
										@if($errors->has('name'))
										<span><p class="text-danger">
											{{$errors->first('name')}}
										</p></span>
										@endif
										</span>
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="lastname">Điện thoại <sup>*</sup></label>
										<input type="text" value="" name="phone"  class="form-control input-feild">
										@if($errors->has('phone'))
										<span><p class="text-danger">
											{{$errors->first('phone')}}
										</p></span>
										@endif
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="email">Email<sup>*</sup></label>
										<input type="email" value="" name="email" id="email" class="form-control input-feild">
										@if($errors->has('email'))
										<span><p class="text-danger">
											{{$errors->first('email')}}
										</p></span>
										@endif
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="password">Mật khẩu <sup>*</sup></label>
										<input type="password" value="" name="password" id="password" class="form-control input-feild">
										@if($errors->has('password'))
										<span><p class="text-danger">
											{{$errors->first('password')}}
										</p></span>
										@endif
										
									</div>
									
									
									<div class="submit-button p-info-submit-button">
                                    <button class="btn main-btn">Đăng kí
												<i class="fa fa-chevron-right"></i>
                                                </button>
										<span class="required-field"><sup>*</sup>Required field</span>
									</div>
								</div>
							</form>							
						</div>
						<!-- PERSONAL-INFOMATION END -->
					</div>
				</div>
			</div>
				
@endsection