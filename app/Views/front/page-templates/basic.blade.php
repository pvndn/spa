@extends('front._master')
@section('js-init')
@endsection
@section('css')

@stop
@section('content')
	<div class="main-content">
		{!! $object->content !!}
	</div>
@stop
@section('js')
@stop