@extends('front._master')

@section('js-init')
@endsection

@section('css')
@stop

@section('content')
	<div class="content">
		<div class="i-rows">
			<div class="container">
				<div class="row">
					{!! $contentItem or '' !!}
				</div>
			</div>
		</div>
	</div>
@stop

@section('js')
@stop