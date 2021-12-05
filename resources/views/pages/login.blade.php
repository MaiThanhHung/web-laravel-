@extends('welcome')
@section('content')

			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="{{URL::to('/')}}">Trang chủ</a>
							<span><i class="fa fa-caret-right"></i></span>
							<span>Đăng nhập / Đăng kí</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title">Vui lòng đăng nhập để mua hàng</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- CREATE-NEW-ACCOUNT START -->
						<div class="create-new-account">
							<form class="new-account-box primari-box" id="create-new-account" method="post" action="#">
								<h3 class="box-subheading">Đăng kí</h3>
								<div class="form-content">
									
									<div class="submit-button">
										<a href="{{URL::to('/regis')}}" id="SubmitCreate" class="btn main-btn">
											<span>
												<i class="fa fa-user submit-icon"></i>
												Tạo tài khoản
											</span>											
										</a>
									</div>
								</div>
							</form>							
						</div>
						<!-- CREATE-NEW-ACCOUNT END -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- REGISTERED-ACCOUNT START -->
						<div class="primari-box registered-account">
							<form class="new-account-box" id="accountLogin" method="post" action="{{URL::to('/login-customer')}}">
                            {{ csrf_field() }}
								<h3 class="box-subheading">Đăng nhập</h3>
								<div class="form-content">
									<div class="form-group primary-form-group">
										<label for="loginemail">Địa chỉ email</label>
										<input type="text" value="" name="email" id="loginemail" class="form-control input-feild">
									</div>
									<div class="form-group primary-form-group">
										<label for="password">Mật khẩu</label>
										<input type="password" value="" name="password" id="password" class="form-control input-feild">
									</div>
									<div class="forget-password">
										<p><a href="#">Quên mật khẩu</a></p>
									</div>
									<div class="submit-button">
										<button class="btn main-btn" name="submit">ĐĂNG NHẬP</button>
										
									</div>
								</div>
							</form>							
						</div>
						<!-- REGISTERED-ACCOUNT END -->
					</div>
				</div>
			</div>
		
@endsection