@extends('layout.app')
@section('title', 'Новини') {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('description'))
@section('image', CRUDBooster::getSetting('logo'))
@section('content')
	<div class="wrapper news">
		<section class="section-col-3-list">
			<div class="signature-two-block">
				<div class="container">
					<div class="section-signature">
						<div class="left">
							<span>Новини</span>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<ul class="col-3-list-wrap">
					@foreach($News as $item)
					<li>
						<a href="/news/{{ $item->slug }}">
							<div class="li-block">
								<div class="image-block">
									@if($item->image)
										<img src="/{{ $item->image }}" alt="{{ $item->title }}">
									@endif
								</div>
								<div class="li-title-text">
									<div class="li-title">
										<h2>{{ $item->title }}</h2>
									</div>
									<div class="li-text">
										<p>{{ $item->description }}</p>
									</div>
								</div>
							</div>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
		</section>
		{{ $News->links() }}
@endsection