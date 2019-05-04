@extends('layout.app')
@section('title', 'Галарея') {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('description'))
@section('image', CRUDBooster::getSetting('logo'))
@section('content')
	<div class="wrapper list-gallery-page">
		<section class="section-signature-one-block">
			<div class="container">
				<div class="signature-one">
					<div class="title">
						<span>Галарея</span>
					</div>
				</div>
			</div>
		</section>
		<section class="section-main-gallery">
			<div class="container">
				<div class="main-gallery-wrap">
					<ul class="list-gallery">
						@foreach($Gallery_category as $item)
						<li>
							<div class="gallery-linck">
								@if(!$item->getImage())
								<div class="gallery" style="background-image: url('{{ asset('/images/no-image-available-grid.jpg') }}')"></div>
								@else
								<div class="gallery" style="background-image: url('/{{ $item->getImage()->image }}')"></div>
								@endif
								<a href="/gallery/{{ $item->slug }}">
									<span>{{ $item->title }}</span>
								</a>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</section>
	</div>
@endsection