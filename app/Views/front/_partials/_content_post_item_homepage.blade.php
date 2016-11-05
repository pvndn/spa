@if(isset($items))
	@foreach($items as $item)
		<?php $row = $item->postContent[0]; ?>
		<div class="col-md-3 service-grid">
			<div class="welcome-grid1">
				<a href="{{ _getPostLink($row, $currentLanguageCode) }}">
					<img src="{{ asset($row->thumbnail) }}" class="img-responsive" alt="{{ $row->title }}"/>
					<h4>{{ $row->title }}</h4>
				</a>
			</div>
		</div>
	@endforeach
@endif