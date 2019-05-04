@extends('layout.app')
@section('title', 'Улюблені') {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('description'))
@section('image', CRUDBooster::getSetting('logo'))
@section('content')
<article class="list-favorite">
	<section class="section-col-4-list">
		<div class="container">
			<div class="col-4-list-wrap">
				<div class="col-4-row-wrap">
					<ul class="list-col-4">
						@foreach($Goods_items as $item)
						<li>
							<div class="li-block">
								<div class="block">
									<div class="top-li-block">
										<span class="span-left">Код: {{ $item->artikle }}</span>
										<span class="span-right laved" data-id="{{ $item->id }}">
											<i class="far fa-heart fas"></i>
										</span>
									</div>
									<a href="/goods/{{ $item->slug }}/{{ $item->id }}">
										<div class="li-image">
											@if(!$item->getimage())

											@else
												<img src="{{ $item->getimage()->image }}" alt="">
											@endif
										</div>
										<div class="li-title">
											<h2>{{ $item->title }}</h2>
										</div>
										<div class="li-price">
											<span>{{ $item->price }} грн</span>
										</div>
									</a>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>
</article>
@endsection