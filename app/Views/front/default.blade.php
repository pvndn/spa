@extends('front._master')

@section('js-init')
<script>
	$(document).ready(function() {
		var Background = $('.slider .event').attr('background');
		$('.slider .event').css({
			'background': 'url('+ Background +') no-repeat',
			'position': 'relative',
			'height': '38%',
		    'width': '99.8%',
		    'margin': '0 auto',
		});
	});
		
</script>
@endsection

@section('css')
	
@stop

@section('content')
<section class="slider">
	<div class="container-fluid">
		<div class="banner">
			<div id="home-slideshow" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#home-slideshow" data-slide-to="0" class="active"></li>
					<li data-target="#home-slideshow" data-slide-to="1"></li>
					<li data-target="#home-slideshow" data-slide-to="2"></li>
					<li data-target="#home-slideshow" data-slide-to="3"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href=""><img class="image" src="{{asset('home/images/slider1.png')}}" alt="bla bka kba"></a>
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">
						<a href=""><img class="image" src="{{asset('home/images/slider2.jpg')}}" alt="bla bka kba"></a>
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">
						<a href=""><img class="image" src="{{asset('home/images/slider3.jpg')}}" alt="bla bka kba"></a>
						<div class="carousel-caption">
						</div>
					</div>
					<div class="item">
						<a href=""><img class="image" src="{{asset('home/images/slider4.png')}}" alt="bla bka kba"></a>
						<div class="carousel-caption">
						</div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#home-slideshow" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#home-slideshow" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="stores">
			<div class="event" background="https://cdn3.dmx.vn/dmx2016/Content/images/openstore.png"></div>
			<a href="" target="_blank">
				<address>Khối 4, thị trấn Thanh Chương, huyện Thanh Chương, tỉnh Nghệ An</address>
				<small>Khai trương Thứ Sáu ngày 28/10</small>
			</a>
			<a href="" target="_blank">
				<address>Khối 4, thị trấn Thanh Chương, huyện Thanh Chương, tỉnh Nghệ An</address>
				<small>Khai trương Thứ Sáu ngày 28/10</small>
			</a>
			<a href="" target="_blank">
				<address>Khối 4, thị trấn Thanh Chương, huyện Thanh Chương, tỉnh Nghệ An</address>
				<small>Khai trương Thứ Sáu ngày 28/10</small>
			</a>
			<a href="" target="_blank">
				<address>Khối 4, thị trấn Thanh Chương, huyện Thanh Chương, tỉnh Nghệ An</address>
				<small>Khai trương Thứ Sáu ngày 28/10</small>
			</a>
			<a href="" target="_blank">
				<address>Khối 4, thị trấn Thanh Chương, huyện Thanh Chương, tỉnh Nghệ An</address>
				<small>Khai trương Thứ Sáu ngày 28/10</small>
			</a>
			<a href="" target="_blank">
				<address>Khối 4, thị trấn Thanh Chương, huyện Thanh Chương, tỉnh Nghệ An</address>
				<small>Khai trương Thứ Sáu ngày 28/10</small>
			</a>
		</div>
	</div>
</section>

<section class="products">
	<div class="container-fluid" style="border-bottom: 4px solid #f1f1f1;">
		<div class="lists-products container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html"><img src="{{asset('home/images/product.jpg')}}" class="image-tivi" style="">
						<div style="margin-left:28px;">
							<div class="row">
								<div class="col-md-4">
									<img src="{{asset('home/images/Samsung-s.png')}}">
								</div>
								<div class="col-md-8">
									<span class="hot">
										<b>43"</b>
										<b>Smart TV</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								Cơ hội trúng 1 trong 60 chỉ vàng(click xem chi tiết)
								Trả góp 0% (chỉ nhận hồ sơ Online đến 15h ngày 30/9/2016),  (click xem chi tiết)
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html"><img src="{{asset('home/images/product.jpg')}}" class="image-tivi" style="">
						<div style="margin-left:28px;">
							<div class="row">
								<div class="col-md-4">
									<img src="{{asset('home/images/Samsung-s.png')}}">
								</div>
								<div class="col-md-8">
									<span class="hot">
										<b>43"</b>
										<b>Smart TV</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								Cơ hội trúng 1 trong 60 chỉ vàng(click xem chi tiết)
								Trả góp 0% (chỉ nhận hồ sơ Online đến 15h ngày 30/9/2016),  (click xem chi tiết)
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html"><img src="{{asset('home/images/product.jpg')}}" class="image-tivi" style="">
						<div style="margin-left:28px;">
							<div class="row">
								<div class="col-md-4">
									<img src="{{asset('home/images/Samsung-s.png')}}">
								</div>
								<div class="col-md-8">
									<span class="hot">
										<b>43"</b>
										<b>Smart TV</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								Cơ hội trúng 1 trong 60 chỉ vàng(click xem chi tiết)
								Trả góp 0% (chỉ nhận hồ sơ Online đến 15h ngày 30/9/2016),  (click xem chi tiết)
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom:5px;">
			<div class="col-md-10">
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-2 col-sm-2">
				<a href="" class="btn btn-info">Xem thêm</a>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="border-bottom: 4px solid #f1f1f1;">
		<div class="lists-products  container-fluid" style="margin-bottom:15px;">
			<a href=""><h3>MÁY LẠNH - TỦ LẠNH - MÁY GIẶT</h3></a>
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html" class="large ml">
						<img class="image" src="{{asset('home/images/fridge1.jpg')}}">
						<div class="">
							<div class="row">
								<div class="col-md-6" style="margin-bottom:5px;">
									<img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
								</div>
								<div class="col-md-6">
									<span class="hot">
										<b>1 HP</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html" class="large ml">
						<img class="image" src="{{asset('home/images/fridge1.jpg')}}">
						<div class="">
							<div class="row">
								<div class="col-md-6" style="margin-bottom:5px;">
									<img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
								</div>
								<div class="col-md-6">
									<span class="hot">
										<b>1 HP</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html" class="large ml">
						<img class="image" src="{{asset('home/images/fridge1.jpg')}}">
						<div class="">
							<div class="row">
								<div class="col-md-6" style="margin-bottom:5px;">
									<img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
								</div>
								<div class="col-md-6">
									<span class="hot">
										<b>1 HP</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html" class="large ml">
						<img class="image" src="{{asset('home/images/fridge1.jpg')}}">
						<div class="">
							<div class="row">
								<div class="col-md-6" style="margin-bottom:5px;">
									<img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
								</div>
								<div class="col-md-6">
									<span class="hot">
										<b>1 HP</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html" class="large ml">
						<img class="image" src="{{asset('home/images/fridge1.jpg')}}">
						<div class="">
							<div class="row">
								<div class="col-md-6" style="margin-bottom:5px;">
									<img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
								</div>
								<div class="col-md-6">
									<span class="hot">
										<b>1 HP</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-4 col-sm-6 electron">
					<a href="detail.html" class="large ml">
						<img class="image" src="{{asset('home/images/fridge1.jpg')}}">
						<div class="">
							<div class="row">
								<div class="col-md-6" style="margin-bottom:5px;">
									<img src="{{asset('home/images/Mitsubishi-heavy-s.png')}}">
								</div>
								<div class="col-md-6">
									<span class="hot">
										<b>1 HP</b>
									</span>
								</div>
							</div>
							<div class="price">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
							<div class="promo">
								3 ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.
							</div>
						</div>
					</a>
				</div>
			</div>

		</div>
		<div class="row" style="margin-bottom:5px;">
			<div class="col-md-10">
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-2 col-sm-2">
				<a href="#" class="btn btn-info">Xem thêm</a>
			</div>
		</div>
	</div>
	<div class="container-fluid"  style="border-bottom: 4px solid #f1f1f1;">
		<div class="lists-products container-fluid" style="margin-bottom:15px;">
			<a href=""><h3>ĐIỆN THOẠI - MÁY TÍNH BẢNG - LAPTOP</h3></a>
			<div class="row">
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{ asset('home/images/Samsung-s.png') }}" class="brand-image">
						<img src="{{ asset('home/images/phone.jpg') }}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{asset('home/images/Samsung-s.png')}}" class="brand-image">
						<img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{asset('home/images/Samsung-s.png')}}" class="brand-image">
						<img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{asset('home/images/Samsung-s.png')}}" class="brand-image">
						<img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{asset('home/images/Samsung-s.png')}}" class="brand-image">
						<img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;font-size:20px;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{ asset('home/images/Samsung-s.png') }}" class="brand-image">
						<img src="{{ asset('home/images/phone.jpg') }}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{asset('home/images/Samsung-s.png')}}" class="brand-image">
						<img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{asset('home/images/Samsung-s.png')}}" class="brand-image">
						<img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{asset('home/images/Samsung-s.png')}}" class="brand-image">
						<img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
				<div class="col-20 electron">
					<a href="detail.html" class="other">
						<img src="{{asset('home/images/Samsung-s.png')}}" class="brand-image">
						<img src="{{asset('home/images/phone.jpg')}}" class="image" style="margin-bottom:10px;">
						<div class="">
							<span>
								<span class="" style="margin-left:70px;"><h5><b>Samsung Galaxy A5 2016</b></h5></span>
							</span>
							<div class="price" style="font-weight: bold;font-size:20px;">
								<strong>11.000.000 <span>VND</span></strong>
							</div>
						</div>
					</a>
				</div>
			</div>
			
		</div>

		<div class="row"  style="margin-bottom:5px;">
			<div class="col-md-10">
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi Sony</a>
				</div>
				<div class="col-xs-12 col-md-1 col-sm-2">
					<a href="#">Tivi</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-2 col-sm-2">
				<a href="#" class="btn btn-info">Xem thêm</a>
			</div>
		</div>
	</div>
</section>
@stop

@section('js')
	<script src="{{asset('home/js/jquery-3.1.0.min.js')}}"></script>
	<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
	<!-- response menu -->
	<script type="text/javascript" src="{{asset('home/responsemenu/js/jquery.smartmenus.js')}}"></script>
	<script type="text/javascript" src="{{asset('home/responsemenu/js/jquery.smartmenus.bootstrap.js')}}"></script>
	<!-- end response menu -->
@stop