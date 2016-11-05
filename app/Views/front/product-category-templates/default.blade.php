@extends('front._master')

@section('css')
@endsection

@section('js')
@endsection

@section('js-init')

@endsection

@section('content')
  <div class="content products">
    <div class="service-section">
      <div class="container">
        <h2>CÁC SẢN PHẨM TẠI DANANG SKIN SPA</h2>
        <div class="service-rows">
          <div class="row">
            @if(isset($products) && $products->count() > 0)
              @foreach($products as $product)
              <?php $row = $product->productContent[0]; ?>
                <div class="col-md-3 service-grid">
                  <a href="{{ _getProductLink($row, $currentLanguageCode) }}">
                    <div class="thumb">
                      <img src="{{ asset($row->thumbnail) }}" class="img-responsive" alt="{{ $row->title }}"/>
                    </div>
                    <div class="desc">
                      <p>{{ $row->title }}</p>
                    </div>
                    <div class="price">
                      <ins>Giá:</ins> <span>{{ number_format($row->price) }}</span><sup>đ</sup>
                    </div>
                  </a>
                </div>
              @endforeach
            @else
              <div class="col-md-12">
                <span style="color: #fff">{{ $object->title or '' }} đang được cập nhật. Xin vui lòng quay lại sau.</span>
              </div>
            @endif
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection