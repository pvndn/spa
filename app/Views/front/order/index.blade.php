@extends('front._master')

@section('css')

@endsection

@section('js')

@endsection

@section('js-init')

@endsection

@section('content')
	<section class="main-wrapper">
    <div class="container order" style="">
            <h4>THÔNG TIN ĐẶT HÀNG</h4>
            <form>
                <div class="row item">
                  <div class="info-order">
                    <div class="col-xs-3 col-md-2">
                        <img class="image" src="images/fridge2.png" style="">
                    </div>
                    <div class="col-xs-12 col-md-6 ">
                        <a href="">Máy lạnh Sharp 1.5 HP AH-X12SEW</a>
                        <div class="price">
                            <span class="price-color"><strong style="">10.890.000₫</strong></span>
                        </div>
                        <lable style="cursor: pointer;color:#999;"><span class="promotion">Khuyến mãi</span><i class="glyphicon glyphicon-menu-down"></i></lable>
                           
                        <div class="dropdown" style="display:none;">
                            - <span>Tặng 50% chi phí ống đồng.</span><br>
                            - <span>Bao 100% công lắp đặt.</span><br>
                            - <span>Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.</span><br>
                        </div>
                    </div>
                     <button type="button" class="close" data-dismiss="modal" style="margin-right: 10px;">&times;</button>
                    <div class="col-xs-5 col-md-4 promotions ">
                        <div class="row">
                            <div class="col-md-6">Số lượng</div> 
                            <div class="col-md-">
                            <select class="form-control" style="width:57px;">
                               <option value="0">1</option>
                               <option value="1">2</option>
                               <option value="2">3</option>
                               <option value="3">4</option>
                               <option value="4">5</option>
                            </select></div>
                        </div>
                    </div>

                  </div>
                </div>
                <div class="row item">
                  <div class="info-order">
                    <div class="col-xs-3 col-md-2">
                        <img class="image" src="images/fridge2.png">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <a href="">Máy lạnh Sharp 1.5 HP AH-X12SEW</a>
                        <div class="price">
                            <span class="price-color"><strong>10.890.000₫</strong></span>
                        </div>
                        <lable style="cursor: pointer;color:#999;"><span class="promotion">Khuyến mãi</span><i class="glyphicon glyphicon-menu-down"></i></lable>
                        <div class="dropdown" style="display:none;">
                            - <span>Tặng 50% chi phí ống đồng.</span><br>
                            - <span>Bao 100% công lắp đặt.</span><br>
                            - <span>Chính sách 1 đổi 1 trong 1 tháng cho sản phẩm lỗi.</span><br>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" style="margin-right: 10px;">&times;</button>
                    <div class="col-xs-5 col-md-4 promotions ">
                        <div class="row">
                            <div class="col-md-6">Số lượng</div> 
                            <div class="col-md-">
                            <select class="form-control" style="width:57px;">
                               <option value="0">1</option>
                               <option value="1">2</option>
                               <option value="2">3</option>
                               <option value="3">4</option>
                               <option value="4">5</option>
                            </select></div>
                        </div>
                    </div>
                  </div>
                </div>
                  <div class="row sum">
                    <div class="col-md-3"><strong>Tổng cộng: </strong></div>
                    <div class="col-md-5"><strong class="price-sum">19.380.000₫</strong></div>
                  </div>

                  <div class="row" style="margin-bottom:20px;">
                    <div class="col-md-12 step-head">
                          <div class="row" style="width:95%;margin-left:15px;">
                           <div style="margin-bottom:10px;">1. Chọn cách nhận hàng:</div>
                              <ul class="nav nav-tabs">
                                  <li><a href="#home" active="true" data-toggle="tab"><strong>GIAO TẬN NƠI</strong></a></li>
                                  <li><a href="#info" data-toggle="tab"><strong>ĐẾN SIÊU THỊ NHẬN</strong></a></li>
                              </ul>
                              <div class="tab-content" style="background:#fff;padding:20px 10px;">
                                  <div class="tab-pane" id="home">
                                    <div class="row" style="margin-bottom:10px;">
                                      <div class="form-group">
                                          <label for="State" class="col-sm-4 control-label">Địa chỉ giao hàng: </label>
                                          <div class="col-sm-8">
                                            <select class="form-control">
                                               <option value="0">Quảng Nam</option>
                                               <option value="1">Hà Nội</option>
                                               <option value="1">TP Hồ Chí Minh</option>
                                               <option value="1">Quãng Ngãi</option>
                                            </select>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                         <div class="form-group col-md-6" style="padding:0;">
                                            <div class="col-sm-12 col-md-12">
                                              <select class="form-control">
                                                 <option value="0">Chon quận/huyện</option>
                                              </select>
                                            </div>
                                        </div>
                                         <div class="form-group col-md-6" style="padding:0;">
                                          <div class="col-sm-12 col-md-12">
                                            <select class="form-control">
                                               <option value="0">Chọn phường/xã</option>
                                            </select>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                         <div class="form-group col-md-12" style="padding:0;">
                                            <div class="col-sm-12 col-md-12">
                                                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Số nhà, tên đường">
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="info">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="State" class="col-sm-4 control-label">Tỉnh thành: </label>
                                                <div class="col-sm-8">
                                                    Quảng nam
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="State" class="col-sm-4 control-label">Quận huyện: </label>
                                                <div class="col-sm-8">
                                                  Tp. Tam kỳ
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                16 Nguyễn Tất Thành, Khối Tân Hòa, Phường Tân An, Thành Phố Hội An, Tỉnh Quảng Nam 
                                            </div>
                                        </div>
                                  </div>
                              </div>
                          </div>
                        <div class="row" style="width:95%;margin-left:15px;">
                          <div class="">
                              <p>2. Nhập thông tin của bạn:</p>
                              <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Anh
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Chị
                              </label>
                          </div>
                          <div class="row">
                            <div class="form-group col-md-6">
                                <div class="col-sm-12 col-md-12">
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Họ và tên">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-12 col-md-12">
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại">
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="row" style="width:95%;margin-left:15px;">
                            <div class="">
                                3. Chọn hình thức thanh toán:
                            </div>
                            <div class="col-md-12" id="pay">
                              <div class="radio">
                                <label>
                                  <input type="radio" checked="true" name="pay" id="blankRadio1" value="cash" aria-label="...">Thanh toán tiền mặt
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="pay" id="blankRadio1" value="online" aria-label="...">Thanh toán trực tuyến ATM, VISA, Master Card
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                 <textarea class="form-control" rows="3" placeholder="Ghi chú thêm của bạn nếu có"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom:10px;">
                  <div class="col-xs-12 col-md-12">
                    <button type="submit" class="btn btn-danger dropdown-toggle" style="width:90%;margin-left:30px;">Đặt hàng</button>
                  </div>
                </div>
                <div class="row" style="margin-left:5px;margin-bottom:20px; ">
                    <div class="col-md-12">
                        <a href="" style="color: #4a90e2;    font-weight: bold;">< Tiếp tục mua hàng</a>
                    </div>
                </div>
                <div class="row" style="margin: 0 10px;">
                    <div class="col-xs-12 col-md-12" style="font-size:12px;">
                        Tổng đài hỗ trợ <span>(7:30 - 22:00)</span>: <strong>1800.1061</strong> (gọi miễn phí)
                    </div>
                    <div class="col-xs-12 col-md-12" style="font-size:12px;">
                        Bằng cách đặt hàng, bạn đồng ý với <a href=""> Chính sách bảo mật và Điều khoản sử dụng </a> của Điện máy XANH.
                    </div>
                </div>
            </form>
    </div>
</section>
@endsection
