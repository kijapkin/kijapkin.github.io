@extends('layout.app')
@section('title', 'Товари') {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('keywords'))
@section('description', CRUDBooster::getSetting('description'))
@section('image', CRUDBooster::getSetting('logo'))
@section('content')
	<div class="wrapper products test">
		<main>
			<article>
				
				@if($Parent)
				<section class="section-bread-crumbs">
					<div class="container">
						<ul class="breadcrumbs">
							<li><a class="hover-line" href="/goods/">Товари</a></li>
							<li><a class="active" href="/goods/{{ $Parent->slug }}">{{ $Parent->title }}</a></li>
						</ul>
					</div>
				</section>
				@endif

				<section class="section-filter-wrap">
					<div class="container">
						<div class="section-filter">
							<form action="/goods/filter" method="POST" class="filter" id="form_serach_ajax">
								<input class = "offset-filter" name="offset" type="hidden" value="0">
								{{ csrf_field() }}
								<ul class="choice-products">
									@if($Parent)
										@foreach($Goods_category as $item)
											@if($item->id == $Parent->id)
												<li class="active" data-number="{{ $item->id }}">{{ $item->title }}</li>
											@else
												<li data-number="{{ $item->id }}">{{ $item->title }}</li>
											@endif
										@endforeach
									@else
										@foreach($Goods_category as $item)
											@if($item == $Goods_category[0])
												<li class="active" data-number="{{ $item->id }}">{{ $item->title }}</li>
											@else
												<li data-number="{{ $item->id }}">{{ $item->title }}</li>
											@endif
										@endforeach
									@endif
								</ul>
								<div class="filter-calculator">
									<a class="hover-line calculator" id="linck-calculator" href="#modal-calculator" data-fancybox>
										<i class="fas fa-calculator"></i> Калькулятор потужності
									</a>
								</div>
								<div class="select-wrap">
									<select name="sort" id="select-options">
										<option value="money_min">Від дешевих до дорогих</option>
										<option value="money_max">Від дорогих до дешевих</option>
										<option value="date_created">Новинки</option>
										<option value="sales">Акційні</option>
									</select>
								</div>
								<div class="filter-wrap" id="filter-choice">
									<div class="span-title">
										<span class="text">Фільтр</span>
										<div class="filter-remive">
											<span class="filter-icon" style = "opacity: 1"></span> <!-- remove -->
											<span class="remove-blue-icon" style = "opacity: 0"></span>
										</div>
					
										<div class="price-slider-choice">
											<div class="price-slider">
												<div class="title-price">Ціна (грн)</div>
												<div class="slider">
													<div id="slider-range" data-min="0" data-max="{{ $max + 10000 }}" data-defaultmin="{{ $min }}" data-defaultmax="{{ $max }}"></div>
													<input type="text" name="min" id="amount-min" maxlength='6' onkeyup="this.value=this.value.replace(/[^0-9]+/g,'')">
													<div class="hyphen">-</div>
													<input type="text" name="max" id="amount-max" maxlength='6' onkeyup="this.value=this.value.replace(/[^0-9]+/g,'')">
												</div>
											</div>
											<div class="ul-producer-list">
												<div class="producer-title">Виробник</div>
												<ul>
													@foreach($Producer as $item)
													<li>
														<input type="checkbox" id="producer_{{ $item->id }}" name="producer[]" value="{{ $item->id }}">
														<label for="producer_{{ $item->id }}">{{ $item->name }}</label>
													</li>
													@endforeach
												</ul>
											</div>
											<div class="ul-type-list">
												<div class="producer-title">Тип</div>
												<ul>
													@foreach($Type as $item)
													<li>
														<input type="checkbox" id="type_{{ $item->id }}" name="type[]" value="{{ $item->id }}">
														<label for="type_{{ $item->id }}">{{ $item->name }}</label>
													</li>
													@endforeach
												</ul>
											</div>
											<div class="ul-type-block-insert-list">
												<div class="producer-title">Тип встановлення внутрішнього блоку</div>
												<ul>
													@foreach($Type_installation as $item)
													<li>
														<input type="checkbox" id="type_installation_{{ $item->id }}" name="type_installation[]" value="{{ $item->id }}">
														<label for="type_installation_{{ $item->id }}">Спліт система настінного типу</label>
													</li>
													@endforeach
												</ul>
											</div>
											<div class="form-button">
												<button>Застосувати фільтр</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>
				@foreach($Goods_category as $item)
				@if($Parent)
					@if($item->id == $Parent->id)
						<section class="section-col-4-list active" data-choice="$item->id">
					@else
						<section class="section-col-4-list" data-choice="$item->id">
					@endif
				@else
					@if($item == $Goods_category[0])
						<section class="section-col-4-list active" data-choice="$item->id">
					@else
						<section class="section-col-4-list" data-choice="$item->id">
					@endif
				@endif
					<div class="container">
						<div class="col-4-list-wrap">
							<div class="col-4-row-wrap">
								
								<ul class="list-col-4">
									@php $count = 0; @endphp
									@foreach($item->getItems() as $shop)
									<li>
										<div class="li-block">
											<div class="block">
												<div class="top-li-block">
													<span class="span-left">Код: {{ $shop->artikle }}</span>
													<span class="span-right laved" data-id="{{ $shop->id }}">
													<i class="far fa-heart"></i>
												</span>
												</div>
												<a href="/goods/{{ $item->slug }}/{{ $shop->id }}">
													<div class="li-image">
														@if($shop->getimage())
															<img src="/{{ $shop->getimage()->image }}" alt="">
														@endif
													</div>
													<div class="li-title">
														<h2>{{ $shop->title }}</h2>
													</div>
													<div class="li-price">
														@if($shop->latest_price > 0)
															<span><strike>{{ $shop->price }} грн.</strike> {{ $shop->latest_price }} грн.</span>
														@else
															<span>{{ $shop->price }} грн.</span>
														@endif
													</div>
												</a>
											</div>
										</div>
									</li>
									@php $count += 1; @endphp
									@endforeach
								</ul>
								<div class="empty-products">
									<h2>За вашими параметрами даного товару не існує</h2>
								</div>
							</div>
							@if($count >= 12)
							<div class="button-border-blue-wrap" data-count="{{ $count }}">
								<div class="container">
									<div class="button-border-blue">
										<span>Показати ще</span>
									</div>
								</div>
							</div>
							@endif
						</div>
						<div class = "price-slider-choice-right">
							<form action="/goods/filter" method="POST" class="filter-right" > <!--  id="form_serach_ajax" -->
								<input class = "offset-filter" name="offset" type="hidden" value="0">
								{{ csrf_field() }}
								<div class="price-slider">
									<div class="title-price">Ціна (грн)</div>
									<div class="slider">
										<div id="slider-range-right" data-min="0" data-max="{{ $max + 10000 }}" data-defaultmin="{{ $min }}" data-defaultmax="{{ $max }}"></div>
										<input type="text" name="min" id="amount-min-right" maxlength='6' onkeyup="this.value=this.value.replace(/[^0-9]+/g,'')">
										<div class="hyphen">-</div>
										<input type="text" name="max" id="amount-max-right" maxlength='6' onkeyup="this.value=this.value.replace(/[^0-9]+/g,'')">
									</div>
								</div>
								<div class="ul-producer-list">
									<div class="producer-title">Виробник</div>
									<ul>
										@foreach($Producer as $item)
										<li>
											<input type="checkbox" id="right_block_producer_{{ $item->id }}" name="producer[]" value="{{ $item->id }}">
											<label for="right_block_producer_{{ $item->id }}">{{ $item->name }}</label>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="ul-type-list">
									<div class="producer-title">Тип</div>
									<ul>
										@foreach($Type as $item)
										<li>
											<input type="checkbox" id="right_block_type_{{ $item->id }}" name="type[]" value="{{ $item->id }}">
											<label for="right_block_type_{{ $item->id }}">{{ $item->name }}</label>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="ul-type-block-insert-list">
									<div class="producer-title">Тип встановлення внутрішнього блоку</div>
									<ul>
										@foreach($Type_installation as $item)
										<li>
											<input type="checkbox" id="right_block_type_installation_{{ $item->id }}" name="type_installation[]" value="{{ $item->id }}">
											<label for="right_block_type_installation_{{ $item->id }}">Спліт система настінного типу</label>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="form-button">
									<button>Застосувати фільтр</button>
								</div>
							</form>
						</div>
						
					</div>
				</section>
				@endforeach
				@if($Parent)
				<section class="section-products-text">
					<div class="container">
						<div class="products-text">
							{!! $Parent->description !!}
						</div>
					</div>
				</section>
				@endif
			</article>
		</main>
	</div>

	<div class="modal-calculator" id="modal-calculator" style="display: none;">
		<div class="modal-window">
			<div class="title">Калькулятор потужності
				<span class="close"></span>
			</div>

			<form action="#" method="GET" class="calculation-form" id="calculation-form">
				<div class="input-row">
					<div class="input">
						<div class="left">
							<span>Площа кімнати (м2)</span>
							<input type="number" name="area" id="area" required data-area="Не вірна площа">
							<label class="error" for="area"></label>
						</div>
						<div class="right">
							<span>Висота стелі</span>
							<input type="number" name="height" id="height" data-height="Не вірна висота">
							<label class="error" for="height"></label>
						</div>
					</div>
				</div>
				<div class="input-select">
					<span>Інсоляція (ступінь освітленості сонячними променями):</span>
					<select name="location" id="location">
						<option selected value="30">Слабка</option>
            <option value="35">Середня</option>
            <option value="40">Сильна</option>
					</select>
				</div>
				<div class="button-span-blue">
					<button class="button-calculation">Розрахувати</button>
				</div>
				<div class="modal-result" style = "opacity: 0;">
					<div class="title-bottom">Необхідна потужність</div>
					<div class="result">2.91 кВт</div>
					<div class="a-linck">
						<a class="hover-line" href="#">Переглянути кондиціонери</a>
					</div>
				</div>
			</form>
		</div>
	</div>

@endsection