@extends('layout.app')
@section('title', CRUDBooster::getSetting('conditioning_name')) {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('conditioning_keywords'))
@section('description', CRUDBooster::getSetting('conditioning_description'))
@section('image', 'images/page-conditioning.png')
@section('content')
	<div class="wrapper air-conditioning">
		<main class="page-main-wrap">
			<div class="container">
				<aside class="page-aside-wrap">
					<div class="aside-title">
						<h2>Наші послуги</h2>
						<div class="current-count">
							<span class="current">1</span> / <span class="count">4</span>
						</div>
					</div>
					<div class="list-services" data-speed="4000">
						<div class="li-block active" style="background-image: url('{{ asset('/images/page-conditioning.png') }}')">
							<div class="li-wrap">
								<div class="li-title">
									<span>Кондиціонування</span>
								</div>
							</div>
							<a href="#" class="linck-page"></a>
						</div>
						<div class="li-block" style="background-image: url('../images/page-ventilation.png')">
							<div class="li-wrap">
								<div class="li-title">
									<span>Вентиляція</span>
								</div>
								<div class="li-linck-wrap">
									<a href="/our_services/ventilation" class="hover-line">Детальніше</a>
								</div>
							</div>
							<a href="/our_services/ventilation" class="linck-page"></a>
						</div>
						<div class="li-block" style="background-image: url('../images/page-heating.png')">
							<div class="li-wrap">
								<div class="li-title">
									<span>Опалення</span>
								</div>
								<div class="li-linck-wrap">
									<a href="/our_services/heating" class="hover-line">Детальніше</a>
								</div>
							</div>
							<a href="/our_services/heating" class="linck-page"></a>
						</div>
						<div class="li-block" style="background-image: url('../images/page-diamond-drilling.png')">
							<div class="li-wrap">
								<div class="li-title">
									<span>Алмазне <br>свердління</span>
								</div>
								<div class="li-linck-wrap">
									<a href="/our_services/diamond_drilling" class="hover-line">Детальніше</a>
								</div>
							</div>
							<a href="/our_services/diamond_drilling" class="linck-page"></a>
						</div>
					</div>
					<div class="aside-text-link-blok">
						<a class="hover-line" href="{{ CRUDBooster::getSetting('services_garantia') }}">Сервісне та гарантійне обслуговування</a>
					</div>
				</aside>
				<article class="page-article-wrap">
					<section class="section-title-file-text">
						<div class="title-file">
							<div class="title">{{ CRUDBooster::getSetting('conditioning_name') }}</div>
							<div class="file">
								<a class="hover-line" href="{{ CRUDBooster::getSetting('conditioning_gallery') }}">Галарея</a>
							</div>
						</div>
						<div class="text">
							{!! CRUDBooster::getSetting('conditioning_text') !!}
						</div>
						<div class="button-line-blue">
							<a href="{{ CRUDBooster::getSetting('conditioning_items') }}">Перейти до каталогу</a>
						</div>
					</section>
					<section class="section-title-round-list">
						<div class="title">Наші переваги</div>
						<ul>
							@php $i = 1; @endphp
							@foreach(explode("\n", CRUDBooster::getSetting('conditioning_our_advantages')) as $item)
							<li>
								<span>{{ $i }}</span>
								<div class="li-text">
									<p>{{ $item }}</p>
								</div>
							</li>
							@php $i += 1; @endphp
							@endforeach
						</ul>
					</section>

					<section class="services-calculator-catalog">
						<ul>
							<li>
								<a class="hover-line" href="{{ CRUDBooster::getSetting('conditioning_services') }}">
									<i class="far fa-file-pdf"></i> Послуги монтажу / демонтажу</a>
							</li>
							<!-- <li>
								<a class="hover-line calculator" id="linck-calculator" href="#modal-calculator" data-fancybox>
									<i class="fas fa-calculator"></i> Калькулятор потужністі
								</a>								
							</li> -->
							@foreach($pdf as $key => $obj)
							<li>
								<a class="hover-line btn-hover" href="{{ asset($obj->uri) }}">
									@if($name_pdf[$key])
									<i class="far fa-file-pdf"></i> {{ $name_pdf[$key] }}
									@else
									<i class="far fa-file-pdf"></i> PDF
									@endif
								</a>
							</li>
							@endforeach
						</ul>
					</section>
				</article>
			</div>
		</main>
	</div>

	<!-- <div class="modal-calculator" id="modal-calculator" style="display: none;">
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
	</div> -->
@endsection