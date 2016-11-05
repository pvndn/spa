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
	<style>
		.infoleft{
			margin-right: 0px;
    		margin-left: 0px;
		}
	</style>
@stop

@section('content')
<section class="detail-product">
    <div class="container-fluid">
        <div class="row infoleft">
        	<div class="col-md-12">
            <div class="col-md-5">
                <img class="image" src="{{asset('home/images/fridge1.jpg')}}">
                <div class="row infomation">
                    <div class="cell col-md-3">Công suất <h5><strong >1HP</strong></h5></div>
                    <div class="cell col-md-3">Loại máy <h5><strong>Máy lạnh thường</strong></h5></div>
                    <div class="cell col-md-3">Tiết kiệm điện <h5><strong>2 sao</strong></h5></div>
                    <div class="cell col-md-3">Gas sử dụng <h5><strong>R-22</strong></h5></div>
                </div>
                <div class="row">
                    <div> - Chế độ Turbo làm lạnh nhanh.</div>
                    <div> - Bộ lọc HD giúp lọc sạch không khí...</div>
                    <div> - Chế độ tự làm sạch giúp hạn chế việc phải vệ sinh máy thường xuyên.</div>
                </div>
            </div>
            <div class="col-md-7">
                  <h2>Máy lạnh Electrolux 1 HP ESM09CRF-D4</h2>
                  <div>
                      <div class="price">Giá: <strong>5.790.000₫</strong></div>
                      <div class="instock">Còn hàng</div>
                      <div class="promotions">
                          <span>
                              + Ưu đãi: <br>
                              - Tặng 50% chi phí ống đồng. <br>
                              - Bao 100% công lắp đặt. <br>
                              - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.  (còn 11 ngày) <br>
                          </span>
                      </div>    
                      <div class="sales-buttons">
                          <a class="btn btn-primary" href="dathang.html"><strong>THÊM VÀO GIỎ HÀNG</strong> <h6>Giao hàng tận nơi hoặc đến siêu thị xem hàng</h6></a>
                          <a href="" class="btn btn-danger"><strong>MUA TRẢ GÓP</strong> <h6>Trả trước 0đ</h6></a>  
                      </div>   
                      <div class="buycall">
                          <span>Gọi mua: </span><span class="glyphicon glyphicon-earphone"></span><span class=""> 1800.1061 (7:30 - 22:00)</span>
                      </div>
                  </div>
                  <div class="infoproduct">
                      <span> - Thùng máy lạnh có: <b>Sách hướng dẫn, Remote, Phiếu bảo hành</b></span>
                      <span> - Bảo hành chính hãng <b>máy lạnh 2 năm, cục nóng 2 năm</b></span>
                      <span> - Nếu dùng cho hoạt động kinh doanh (giặt ủi, nhà hàng, khách sạn...) chỉ bảo hành 6 tháng.</span>
                      <span> - Miễn phí công lắp đặt, chỉ tính tiền vật tư phát sinh</span>
                  </div>
            </div>
            </div>
        </div>
        <div class="row same">
            <h4>SẢN PHẨM TƯƠNG TỰ</h4>
            <div class="col-md-2 col-sm-4">
                <a href=""><img class="image" src="{{asset('home/images/fridge3.jpg')}}"></a>
                <div class="pro-info">
                    <a href="">
                        <h3>Electrolux 
                        <sup>1 HP</sup><span>(ESM09CRF-D4)</span></h3> 
                    </a>
                    <div class="quickinfo">
                    <span>- Công suất: 1 HP</span>
                    <span>- Máy lạnh thường</span>
                    <span>- Làm lạnh: Dưới 15 m2</span>
                    <span>- Tiết kiệm điện: 2 sao</span>
                    <span>- Sản xuất tại: Trung Quốc</span></div>
                </div>
                <div class="sell">
                    <strong class="price-color">5.790.000₫</strong>
                </div>
                <div class="promo">
                      <p>ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href=""><img class="image" src="{{asset('home/images/fridge3.jpg')}}"></a>
                <div class="pro-info">
                    <a href="">
                        <h3>Electrolux 
                        <sup>1 HP</sup><span>(ESM09CRF-D4)</span></h3> 
                    </a>
                    <div class="quickinfo">
                    <span>- Công suất: 1 HP</span>
                    <span>- Máy lạnh thường</span>
                    <span>- Làm lạnh: Dưới 15 m2</span>
                    <span>- Tiết kiệm điện: 2 sao</span>
                    <span>- Sản xuất tại: Trung Quốc</span></div>
                </div>
                <div class="sell">
                    <strong class="price-color">5.790.000₫</strong>
                </div>
                <div class="promo">
                      <p>ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href=""><img class="image" src="{{asset('home/images/fridge3.jpg')}}"></a>
                <div class="pro-info">
                    <a href="">
                        <h3>Electrolux 
                        <sup>1 HP</sup><span>(ESM09CRF-D4)</span></h3> 
                    </a>
                    <div class="quickinfo">
                    <span>- Công suất: 1 HP</span>
                    <span>- Máy lạnh thường</span>
                    <span>- Làm lạnh: Dưới 15 m2</span>
                    <span>- Tiết kiệm điện: 2 sao</span>
                    <span>- Sản xuất tại: Trung Quốc</span></div>
                </div>
                <div class="sell">
                    <strong class="price-color">5.790.000₫</strong>
                </div>
                <div class="promo">
                      <p>ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href=""><img class="image" src="{{asset('home/images/fridge3.jpg')}}"></a>
                <div class="pro-info">
                    <a href="">
                        <h3>Electrolux 
                        <sup>1 HP</sup><span>(ESM09CRF-D4)</span></h3> 
                    </a>
                    <div class="quickinfo">
                    <span>- Công suất: 1 HP</span>
                    <span>- Máy lạnh thường</span>
                    <span>- Làm lạnh: Dưới 15 m2</span>
                    <span>- Tiết kiệm điện: 2 sao</span>
                    <span>- Sản xuất tại: Trung Quốc</span></div>
                </div>
                <div class="sell">
                    <strong class="price-color">5.790.000₫</strong>
                </div>
                <div class="promo">
                      <p>ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href=""><img class="image" src="{{asset('home/images/fridge3.jpg')}}"></a>
                <div class="pro-info">
                    <a href="">
                        <h3>Electrolux 
                        <sup>1 HP</sup><span>(ESM09CRF-D4)</span></h3> 
                    </a>
                    <div class="quickinfo">
                    <span>- Công suất: 1 HP</span>
                    <span>- Máy lạnh thường</span>
                    <span>- Làm lạnh: Dưới 15 m2</span>
                    <span>- Tiết kiệm điện: 2 sao</span>
                    <span>- Sản xuất tại: Trung Quốc</span></div>
                </div>
                <div class="sell">
                    <strong class="price-color">5.790.000₫</strong>
                </div>
                <div class="promo">
                      <p>ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <a href=""><img class="image" src="{{asset('home/images/fridge3.jpg')}}"></a>
                <div class="pro-info">
                    <a href="">
                        <h3>Electrolux 
                        <sup>1 HP</sup><span>(ESM09CRF-D4)</span></h3> 
                    </a>
                    <div class="quickinfo">
                    <span>- Công suất: 1 HP</span>
                    <span>- Máy lạnh thường</span>
                    <span>- Làm lạnh: Dưới 15 m2</span>
                    <span>- Tiết kiệm điện: 2 sao</span>
                    <span>- Sản xuất tại: Trung Quốc</span></div>
                </div>
                <div class="sell">
                    <strong class="price-color">5.790.000₫</strong>
                </div>
                <div class="promo">
                      <p>ƯU ĐÃI: - Tặng 50% chi phí ống đồng. - Bao 100% công lắp đặt. - Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.</p>
                </div>
            </div>
        </div>
        <div class="row specs">
          <div class="col-md-6">
            <h4>Thông số kỹ thuật</h4>
            <div class="specs-item" style="display:block;">
                <div class="grp">
                    <h4><strong>Tổng quan</strong></h4>
                </div>
                <div class="item">
                    <span class="specname">Công suất làm lạnh: </span>
                    <span class="specval">1 HP - 9.000 BTU</span>
                </div>
                <div class="item">
                    <span class="specname">Công suất sưởi ấm: </span>
                    <span class="specval">Không có sưởi ấm</span>
                </div>
                <div class="item">
                    <span class="specname">Phạm vi làm lạnh hiệu quả: </span>
                    <span class="specval">Từ 15 - 20 m2 (từ 40 đến 60 m3)</span>
                </div>
                <div class="item">
                    <span class="specname">Công suất tiêu thụ điện tối đa: </span>
                    <span class="specval">1 kW/h</span>
                </div>
                <div class="item">
                    <span class="specname">Nhãn năng lượng tiết kiệm điện: </span>
                    <span class="specval">5 sao (Hiệu suất năng lượng 4.97)</span>
                </div>
            </div>
            <div class="specs-item">
              <div class="grp">
                  <h4><strong>Tính năng</strong></h4>
              </div>
              <div class="item">
                  <span class="specname">Tiện ích: </span>
                  <span class="specval">Tự khởi động lại khi có điện, Hẹn giờ bật tắt máy, Có tự điều chỉnh nhiệt độ (chế độ ngủ đêm), Chế độ dành cho trẻ em</span>
              </div>
              <div class="item">
                  <span class="specname">Chế độ tiết kiệm điện: </span>
                  <span class="specval">Chế độ Comfort Eco</span>
              </div>
              <div class="item">
                  <span class="specname">Chế độ làm lạnh nhanh: </span>
                  <span class="specval">Công nghệ Powerful Jet</span>
              </div>
              <div class="item">
                  <span class="specname">Chế độ gió: </span>
                  <span class="specval">Tuỳ chỉnh điều khiển lên xuống</span>
              </div>
            </div>
            <div class="specs-item">
              <div class="grp">
                  <h4><strong>Thông tin chung</strong></h4>
              </div>
              <div class="item">
                  <span class="specname">Thông tin cục lạnh: </span>
                  <span class="specval">Dài 87.7 cm - Cao 29.2 cm - Dày 22.2 cm - Nặng 9 kg</span>
              </div>
              <div class="item">
                  <span class="specname">Thông tin cục nóng: </span>
                  <span class="specval">Dài 73 cm - Cao 54 cm - Dày 25 cm - Nặng 28 kg</span>
              </div>
              <div class="item">
                  <span class="specname">Nơi sản xuất: </span>
                  <span class="specval">Thái Lan</span>
              </div>
              <div class="item">
                  <span class="specname">Năm sản xuất: </span>
                  <span class="specval">2014</span>
              </div>
            </div>
            <div id="more" class="read-more">Xem đầy đủ bảng thông số kỹ thuật</div>
          </div>
        </div>
    </div>
</section>
<section style="margin-bottom:50px;">
     <div class="container-fluid">
          <div class="row">
              <div class="col-xs-12 col-md-12">
                <div class="">
                  <h2>Máy lạnh có thiết kế hiện đại, sang trọng và dễ sử dụng</h2>
                  <div>Với những đường nét sắc sảo, hiện đại trong thiết kế, máy lạnh Sharp AH-X12SEW sẽ giúp làm đẹp cho không gian sống của bạn. Kiểu dáng gọn nhẹ, dễ di chuyển, có thể lắp đặt ở nhiều không gian khác nhau. Hơn nữa, bề mặt trơn láng, hạn chế trầy xước, bám bẩn, dễ vệ sinh.</div>
                  <img src="{{asset('home/images/detail1.jpg')}}" style="width:80%;max-height:500px;">
                  <h2>Công suất làm lạnh 1.5 HP</h2>
                  <div>Máy lạnh Sharp AH-X12SEW có công suất làm lạnh 1.5 HP, giúp làm lạnh hiệu quả những không gian có diện tích từ 15 đến 20 m2. Do đó, máy lạnh phù hợp để lắp đặt ở nhiều dạng không gian như phòng khách, phòng ngủ.</div>
                  <img src="{{asset('home/images/detail2.jpg')}}" style="width:80%;max-height:500px;">
                  <h2>Lưới lọc polypropylene giúp kháng khử mùi</h2>
                  <div>Không gian sống của bạn sẽ luôn thật trong lành, mát mẻ nhờ bộ lọc khử mùi, kháng khuẩn bằng lưới polypropylene. Nấm mốc, vi khuẩn gây hại hay những mùi hôi khó chịu sẽ được lọc sạch, tạo cảm giác thoải mái nhất cho người dùng. Hơn nữa, bộ lọc khí này có thể tháo rời để giặt một cách dễ dàng, rất tiện cho việc vệ sinh.</div>
                  <img src="{{asset('home/images/detail3.jpg')}}" style="width:80%;max-height:500px;">
                  <h2>Làm lạnh nhanh</h2>
                  <div>Công nghệ làm lạnh nhanh Powerful Jet sẽ giúp căn phòng của bạn nhanh chóng giảm 5oC trong vòng 5 phút và nhanh chóng đạt nhiệt độ như mong muốn. Mang đến cho bạn không gian mát mẻ ngay tức thì khi vừa về nhà, vô cùng thuận tiện và hữu ích.</div>
                  <img src="{{asset('home/images/detail4.jpg')}}" style="width:80%;max-height:500px;">
                  <h2>Chế độ Baby Sleep nhẹ nhàng yên tĩnh giúp bé ngủ ngon</h2>
                  <div>Baby Sleep là một chế độ đặc biệt dành cho trẻ em, người có sức khỏe yếu hoặc những người lớn tuổi không chịu được không khí quá lạnh. Làn gió nhẹ nhàng, dễ chịu, không hướng thẳng xuống đất mà hướng lên trần nhà, giúp trẻ có được giấc ngủ ngon.</div>
                  <img src="{{asset('home/images/detail4.jpg')}}" style="width:80%;max-height:500px;">
                  <h2>Chế độ Comfort</h2>
                  <div>Chế độ Comfort của máy lạnh sẽ giúp bạn có một giấc ngủ thật ngon giấc mà không bị đánh thức giữa chừng vì quá lạnh, cộng thêm tác động gió thoang thoảng, mang lại cảm giác thoải mái suốt cả ngày.</div>
                  <img src="{{asset('home/images/detail4.jpg')}}" style="width:80%;max-height:500px;">
                  <h2>Hẹn giờ thông minh cùng chức năng tự khởi động lại</h2>
                  <div>Máy lạnh Sharp AH-X12SEW 1.5 HP được trang bị tính năng hẹn giờ thông minh, cho phép người dùng chủ động cài đặt thời gian bật tắt máy lạnh theo ý muốn. Chế độ này sẽ giúp bạn ngủ ngon vào ban đêm, tránh tình trạng quá lạnh, đồng thời tiết kiệm điện năng đáng kể, không gây lãng phí.</div>
                  <img src="{{asset('home/images/detail7.jpg')}}" style="width:80%;max-height:500px;">
                </div>
              </div>
              <!-- <div class="col-md-4">
                  
              </div> -->
          </div>
        </div>
</section>
<section id="comment">
       <div class="container-fluid">
          <div class="row">
              <div class="col-md-7" style="margin-bottom:20px;">
                  <div class="infocomment">
                      <div class="comment_ask ">
                          <i class="icon_user">T</i>
                          <Strong>Tuan</Strong>
                          <div class="infocomment_ask">
                              Cho e hoi may cua em moi mua duoc 3 thang sao cuc nong va cai may no chay on va kieu nua ko biet la co bi gi ko
                          </div>
                          <div class="relate_infocom">
                              <span class="reply">Trả lời</span>
                          </div>
                      </div>
                      <div class="comment_reply">
                          <i class="arrow_box"></i>
                          <div class="comment_ask">
                              <img src="{{asset('home/images/28020213.jpg')}}">
                              <strong>Lê Sang</strong>
                              <b class="qtv">Quản trị viên</b>
                              <div class="infocom_ask">
                                <div class="conticon">
                                    <div class="content_s">Chào anh.<br>Dàn nóng phát ra tiếng kêu do lá cây rơi vào, cánh quạt quay tạo ra tiếng kêu, chân đế làm bằng cao su đã bị chai, hoặc do côn trùng rơi vào và chết trong đó. Ngoài ra còn có thể do ốc bắt đề bị lỏng nên khả năng giảm chấn động tiếng ồn không còn tốt nữa... Trường hợp này anh có thể liên hệ<a target="_blank" rel="nofollow" href="https://www.dienmayxanh.com/bao-hanh/sharp?key=M%C3%A1y l%E1%BA%A1nh"> trung tâm bảo hành của hãng </a>để được hỗ trợ thêm nhé. <br>Chúc anh có giấc ngủ ngon.</div>
                                </div>
                                <div>
                                    <span class="btnreply">Trả lời </span>
                                    <span><b class="dot" style="font-weight: bold;font-size:12px;">●</b> 4 ngày trước</span>
                                </div>
                              </div>

                          </div>
                          <div class="comment_ask">
                              <img src="{{asset('home/images/28020213.jpg')}}">
                              <strong>Lê Sang</strong>
                              <b class="qtv">Quản trị viên</b>
                              <div class="infocom_ask">
                                <div class="conticon">
                                    <div class="content_s">Chào anh.<br>Dàn nóng phát ra tiếng kêu do lá cây rơi vào, cánh quạt quay tạo ra tiếng kêu, chân đế làm bằng cao su đã bị chai, hoặc do côn trùng rơi vào và chết trong đó. Ngoài ra còn có thể do ốc bắt đề bị lỏng nên khả năng giảm chấn động tiếng ồn không còn tốt nữa... Trường hợp này anh có thể liên hệ<a target="_blank" rel="nofollow" href="https://www.dienmayxanh.com/bao-hanh/sharp?key=M%C3%A1y l%E1%BA%A1nh"> trung tâm bảo hành của hãng </a>để được hỗ trợ thêm nhé. <br>Chúc anh có giấc ngủ ngon.</div>
                                </div>
                                <div>
                                    <span class="btnreply">Trả lời </span>
                                    <span><b class="dot" style="font-weight: bold;font-size:12px;">●</b> 4 ngày trước</span>
                                </div>
                              </div>
                              
                          </div>
                          <div class="comment_ask">
                              <img src="{{asset('home/images/28020213.jpg')}}">
                              <strong>Lê Sang</strong>
                              <b class="qtv">Quản trị viên</b>
                              <div class="infocom_ask">
                                <div class="conticon">
                                    <div class="content_s">Chào anh.<br>Dàn nóng phát ra tiếng kêu do lá cây rơi vào, cánh quạt quay tạo ra tiếng kêu, chân đế làm bằng cao su đã bị chai, hoặc do côn trùng rơi vào và chết trong đó. Ngoài ra còn có thể do ốc bắt đề bị lỏng nên khả năng giảm chấn động tiếng ồn không còn tốt nữa... Trường hợp này anh có thể liên hệ<a target="_blank" rel="nofollow" href="https://www.dienmayxanh.com/bao-hanh/sharp?key=M%C3%A1y l%E1%BA%A1nh"> trung tâm bảo hành của hãng </a>để được hỗ trợ thêm nhé. <br>Chúc anh có giấc ngủ ngon.</div>
                                </div>
                                <div>
                                    <span class="btnreply">Trả lời </span>
                                    <span><b class="dot" style="font-weight: bold;font-size:12px;">●</b> 4 ngày trước</span>
                                </div>
                              </div>
                              
                          </div>
                      </div>

                  </div>
              </div>
              <div class="col-md-7" style="margin-bottom:20px;">
                  <div class="infocomment">
                      <div class="comment_ask ">
                          <i class="icon_user">T</i>
                          <Strong>Tuan</Strong>
                          <div class="infocomment_ask">
                              Cho e hoi may cua em moi mua duoc 3 thang sao cuc nong va cai may no chay on va kieu nua ko biet la co bi gi ko
                          </div>
                          <div class="relate_infocom">
                              <span class="reply">Trả lời</span>
                          </div>
                      </div>
                      <div class="comment_reply">
                          <i class="arrow_box"></i>
                          <div class="comment_ask">
                              <img src="{{asset('home/images/28020213.jpg')}}">
                              <strong>Lê Sang</strong>
                              <b class="qtv">Quản trị viên</b>
                              <div class="infocom_ask">
                                <div class="conticon">
                                    <div class="content_s">Chào anh.<br>Dàn nóng phát ra tiếng kêu do lá cây rơi vào, cánh quạt quay tạo ra tiếng kêu, chân đế làm bằng cao su đã bị chai, hoặc do côn trùng rơi vào và chết trong đó. Ngoài ra còn có thể do ốc bắt đề bị lỏng nên khả năng giảm chấn động tiếng ồn không còn tốt nữa... Trường hợp này anh có thể liên hệ<a target="_blank" rel="nofollow" href="https://www.dienmayxanh.com/bao-hanh/sharp?key=M%C3%A1y l%E1%BA%A1nh"> trung tâm bảo hành của hãng </a>để được hỗ trợ thêm nhé. <br>Chúc anh có giấc ngủ ngon.</div>
                                </div>
                                <div>
                                    <span class="btnreply">Trả lời </span>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-7" style="margin-bottom:20px;">
                  <div class="infocomment">
                      <div class="comment_ask ">
                          <i class="icon_user">T</i>
                          <Strong>Tuan</Strong>
                          <div class="infocomment_ask">
                              Cho e hoi may cua em moi mua duoc 3 thang sao cuc nong va cai may no chay on va kieu nua ko biet la co bi gi ko
                          </div>
                          <div class="relate_infocom">
                              <span class="reply">Trả lời</span>
                          </div>
                      </div>
                      <div class="comment_reply">
                          <i class="arrow_box"></i>
                          <div class="comment_ask">
                              <img src="{{asset('home/images/28020213.jpg')}}">
                              <strong>Lê Sang</strong>
                              <b class="qtv">Quản trị viên</b>
                              <div class="infocom_ask">
                                <div class="conticon">
                                    <div class="content_s">Chào anh.<br>Dàn nóng phát ra tiếng kêu do lá cây rơi vào, cánh quạt quay tạo ra tiếng kêu, chân đế làm bằng cao su đã bị chai, hoặc do côn trùng rơi vào và chết trong đó. Ngoài ra còn có thể do ốc bắt đề bị lỏng nên khả năng giảm chấn động tiếng ồn không còn tốt nữa... Trường hợp này anh có thể liên hệ<a target="_blank" rel="nofollow" href="https://www.dienmayxanh.com/bao-hanh/sharp?key=M%C3%A1y l%E1%BA%A1nh"> trung tâm bảo hành của hãng </a>để được hỗ trợ thêm nhé. <br>Chúc anh có giấc ngủ ngon.</div>
                                </div>
                                <div>
                                    <span class="btnreply">Trả lời </span>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-5">
                  
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