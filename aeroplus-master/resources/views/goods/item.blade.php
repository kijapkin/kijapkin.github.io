@extends('layout.app')
@section('title', $Goods_items->title) {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('description'))
@if($Goods_items->getimages()[0])
@section('image', $Goods_items->getimages()[0]->image)
@else
@section('image', CRUDBooster::getSetting('logo'))
@endif
@section('content')
	<div class="wrapper description-goods">
		<section class="section-bread-crumbs">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a class="hover-line" href="/goods/">Товари</a></li>
					<li><a class="hover-line" href="/goods/{{ $Parent->slug }}">{{ $Parent->title }}</a></li>
					<li><a class="active" href="/goods/{{ $Parent->slug }}/{{ $Goods_items->id }}">{{ $Goods_items->title }}</a></li>
				</ul>
			</div>
		</section>
		<section class="section-brief-description-card">
			<div class="container">
				<div class="brief-description-card">
					<div class="pictures-card-block">
						<div class="pictures-mini-full">
							<div class="pictures-mini-wrap">
								@foreach($Goods_items->getimages() as $item)
								@if($item == $Goods_items->getimages()[0])
								<div class="picture-mini active" data-choice="{{ $item->id }}">
								@else
								<div class="picture-mini" data-choice="{{ $item->id }}">
								@endif
									<div class="image">
										<img src="/{{ $item->image }}" alt="">
									</div>
								</div>
								@endforeach
							</div>
							<div class="full-picture-wrap">
								@foreach($Goods_items->getimages() as $item)
								@if($item == $Goods_items->getimages()[0])
								<a href="/{{ $item->image }}" class="full-picture active" data-select="{{ $item->id }}">
								@else
								<a href="/{{ $item->image }}" class="full-picture" data-select="{{ $item->id }}">
								@endif
									<img src="/{{ $item->image }}" width="100" height="100" alt="" />
								</a>
								@endforeach
							</div>
						</div>
					</div>

					<div class="description-card">
						<div class="description-title">
							<h1>{{ $Goods_items->title }}</h1>
						</div>

						<div class="description-price">
							@if($Goods_items->latest_price > 0)
								<span><strike>{{ $Goods_items->price }} грн.</strike> {{ $Goods_items->latest_price }} грн.</span>
							@else
								<span>{{ $Goods_items->price }} грн.</span>
							@endif
						</div>

						<div class="button-line-blue">
							<a data-fancybox="order" data-src="#order" href="#order">Оформити замовлення</a>
						</div>

						<ul class="description-list">
							@php $i = 0; @endphp
							@foreach($Goods_items->getLabels() as $label)
							@if($i == 4) @php break; @endphp @endif
							<li>
								<div class="text">{{ $label->label }}</div>
								<div class="description">{{ $label->content }}</div>
							</li>
							@php $i++ @endphp
							@endforeach
							
						</ul>
						<div class="button-linck-blue scrol-page">
							<a href="#characteristic" class="hover-line" data-characteristic="1">Всі характеристики</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-full-description-card" id="characteristic">
			<div class="container">
				<div class="full-description-car-wrap">
					<div class="description-car-filter-list">
						<div class="description-car-filter-block active" data-filter="0">
							<span>Опис кондиціонера</span>
						</div>
						<div class="description-car-filter-block" data-filter="1">
							<span>Характеристики</span>
						</div>
						@if($Goods_items->video != '-' && !is_null($Goods_items->video))
						<div class="description-car-filter-block" data-filter="2">
							<span>Відео</span>
						</div>
						@endif
					</div>
					<div class="full-description-car-list">
						<ul class="description-car-selected-block active" data-selected="0">
							@foreach($Goods_items->getDescription() as $label)
							<li>
								<div class="selected-block-title">
									<span>{{ $label->descriptions }}</span>
								</div>
								<div class="selected-block-text">
									<p>{{ $label->content }}</p>
								</div>
							</li>
							@endforeach
						</ul>
						<ul class="description-car-selected-block" data-selected="1">
							@foreach($Goods_items->getLabels() as $label)
							<li>
								<div class="characteristic-title">
									<span>{{ $label->label }}</span>
								</div>
								<div class="characteristic-text">
									<span>{{ $label->content }}</span>
								</div>
							</li>
							@endforeach
						</ul>
						@if($Goods_items->video != '-' && !is_null($Goods_items->video))
						<div class="description-car-selected-block video-block" data-selected="2">
							<div class="video-wrap">
								<div class="embed-container">
									<iframe width="962" height="541" src="{{ $Goods_items->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>
		</section>

	</div>

	<div class="makingo_order" id="order" style="display: none; opacity: 1">
		<div class="order-top">
			<div class="order-top-title">Оформлення замовлення</div>
		</div>
		<div class="order-container">
			<div class="order-container-title">
				<span>Для оформлення замовлення <br>заповніть форму нище.</span>
			</div>
			<div class="error-wrap">
				<div class="error"></div>
			</div>
			<!-- <form id="formx" class="form-order" action="javascript:void(null)" method="POST" action="/goods/order" onsubmit="call()"> -->
			<form id="formx" class="form-order" action="/goods/order" method="POST">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $Goods_items->id }}" hidden="true">
				<div class="input">
					<input name="user" title="Введіть ваше ім'я (не менше трьох літер)" required="" minlength="3" aria-required="true" placeholder="Ваше ім'я">
				</div>
				<div class="input">
					<input id="phone" title="Не вірний телейон" name="phone" required="" type="number" rangelength="[2,12]" aria-required="true" placeholder="Ваш номер телефону">
				</div>
				<div class="input">
					<input id="email" title="Невірно введений Email" name="email" required="" type="email" aria-required="true" placeholder="E-mail">
				</div>
				<div class="button-line-blue">
					<button>Залишити заявку</button>
				</div>
			</form>
		</div>
	</div>
	<div class="shipped_order" id="shipped_order" style="display: none;">
		<div class="order-top-title">Оформлення замовлення</div>
		<div class="order-container">
			<div class="order-container-title">
				<span>Ваше замовлення успішно відправлинне.<br>Наш менеджер зателефонуває вам.</span>
			</div>
		</div>
	</div>
@endsection


