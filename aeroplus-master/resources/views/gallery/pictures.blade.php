@extends('layout.app')
@section('title', $Gallery_category->title) {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('description'))
@if(!$Gallery_category->getImage())
	@section('image', CRUDBooster::getSetting('logo'))
@else
	@section('image', $Gallery_category->getImage()->image)
@endif
@section('content')
	<div class="wrapper gallery">

		<section class="section-text-one-gallery">
			<div class="container">
				<div class="text-one-gallery">
					<div class="linck">
						<a href="/gallery/" class="title hover-line">Повернутися до галареї</a>
					</div>
					<div class="one-gallery test" data-speed="5000" dir="rtl">  <!-- dir="rtl" -->
						<!--data-count - вказати кількість зображень -->
						@if($Gallery_category->getImages()[0])
							@php $i = 0; @endphp
							@foreach($Gallery_category->getImages() as $item)
							<div class="image" data-number="{{ $i }}">
								<img src="/{{ $item->image }}" alt="{{ $item->title }}">
							</div>
							@php $i++; @endphp
							@endforeach
						@else
						<div class="image" data-number="0">
							<img src="{{ asset('/images/no-image-available-grid.jpg') }}" alt="No image available">
						</div>
						@endif
					</div>
					<div class="one-gallery-settings">
						<div class="count">
							<span class="current">01</span> /
							<span class="total-number">00</span>
						</div>
						<div class="position">
							<span class="line"></span>
						</div>
						<div class="control">
							<span class="prev-icon"></span>
							<span class="next-icon"></span>
						</div>
					</div>
					<div class="name-image-active">
						@if($Gallery_category->getImages()[0])
							<span data-text = "{{ $Gallery_category->getImages()[0]->title }}"></span>
						@else
							<span>No image available</span>
						@endif
					</div>
				</div>
			</div>
		</section>

	</div>
@endsection