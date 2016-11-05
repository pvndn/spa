<div class="header">
    <div class="container">
        <div class="header-top">
            <h1 class="logo">
            <a href="/">
                <img src="{{ asset('images/logo/logo.png') }}" alt="">
            </a>
            </h1>
            <div class="public">
                <div class="spt">
                    <div class="contact-address text-right">
                        <address>
                            <ins>Add:</ins>
                            <span>06 Nguyễn Hữu Thuật, Hải Châu, Đà Nẵng</span>
                        </address>
                        <address>
                            <ins>Tel:</ins>
                            <span>+84-511-3832036</span>/
                            <span>+84-914-082039</span> -
                            <ins>Email:</ins>
                            <span>danangskinspa@gmail.com</span>
                        </address>
                    </div>
                    <div class="language text-right">
                        <ul class="list-unstyled list-inline">
                            @foreach($activatedLanguages as $key => $row)
                                <li class="">
                                    <a class="" href="/{{ $row->language_code or '' }}" title="{{ $row->language_name or '' }}">
                                        <img src="{{ asset('images/flags') }}/{{ $row->language_code or 'en' }}.png" alt="{{ $row->language_name or '' }}" class="img-responsive">
                                    </a>
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="clearfix"></div>
                {!! $CMSMenuHtml or '' !!}
            </div>
        </div>
        <div class="booking-form col-md-8 col-md-offset-2">
            <h3 class="text-center">Chất lượng phục vụ luôn được đặt lên hàng đầu</h3>
            <form action="">
                <ul class="list-unstyled">
                    <li>
                        <select name="" id="">
                            <option value="" disabled="" selected="">Chọn dịch vụ</option>
                        </select>
                    </li>
                    <li class="i-icon">
                        <input type="text" placeholder="Đặt giờ" name="time">
                    </li>
                    <li class="i-icon">
                        <input type="text" placeholder="Đặt ngày" name="date">
                    </li>
                    <li>
                        <input type="text" placeholder="Tên" class="name">
                    </li>
                    <li>
                        <input type="text" placeholder="E-mail" class="email">
                    </li>
                    <li>
                        <input type="text" placeholder="Điện thoại" class="phone">
                    </li>
                </ul>
                <button class="btn btn-customs">Booking Spa</button>
            </form>
        </div>
    </div>
</div>