@extends('front._master')

@section('js-init')
@endsection

@section('css')
@stop

@section('content')
	<div class="content products">
    <div class="service-section">
      <div class="container">
        <h2>{{ $object->title }}</h2>
        <div class="service-rows">
          <div class="row">
              <div class="col-md-12">
                {!! $object->content !!}
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('js')
@stop