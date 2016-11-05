@extends('front._master')

@section('css')
	<style>
	</style>
@endsection

@section('js')

@endsection

@section('js-init')

@endsection

@section('content')
	<div class="content service">
		<div class="service-section">
			<div class="container">
				<h2>CÁC {{ $object->title or '' }} TẠI DANANG SKIN SPA</h2>
				<div class="service-rows">
					<div class="row">
						@if(isset($posts) && $posts->count() > 0)
							@foreach($posts as $post)
							<?php $row = $post->postContent[0]; ?>
							<div class="col-md-4 service-grid">
								<a href="{{ _getPostLink($row, $currentLanguageCode) }}">
									<div class="thumb">
										<img src="{{ asset($row->thumbnail) }}" class="img-responsive" alt="{{ $row->title }}"/>
										<h4>{{ $row->title }}</h4>
									</div>
									<div class="desc">
										<p>{!! $row->description !!}</p>
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