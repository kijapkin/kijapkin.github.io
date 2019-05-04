@extends('layout.app')
@section('title', CRUDBooster::getSetting('drilling_name')) {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('drilling_keywords'))
@section('description', CRUDBooster::getSetting('drilling_description'))
@section('image', '/images/page-heating.png')
@section('content')
<div class="wrapper heating">
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
					<div class="li-block" style="background-image: url('{{ asset('/images/page-conditioning.png') }}')">
						<div class="li-wrap">
							<div class="li-title">
								<span>Кондиціонування</span>
							</div>
							<div class="li-linck-wrap">
								<a href="/our_services/" class="hover-line">Детальніше</a>
							</div>
						</div>
						<a href="/our_services/" class="linck-page"></a>
					</div>
					<div class="li-block" style="background-image: url('{{ asset('/images/page-ventilation.png') }}')">
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
					<div class="li-block" style="background-image: url('{{ asset('/images/page-heating.png') }}')">
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
					<div class="li-block active" style="background-image: url('{{ asset('/images/page-diamond-drilling.png') }}')">
						<div class="li-wrap">
							<div class="li-title">
								<span>Алмазне <br>свердління</span>
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
							<div class="title">{{ CRUDBooster::getSetting('drilling_name') }}</div>
							<div class="file">
								<i class="far fa-file-pdf"></i>
								<a class="hover-line" href="{{ CRUDBooster::getSetting('drilling_price') }}">Розцінки</a>
							</div>
						</div>
						<div class="text">
							{!! CRUDBooster::getSetting('drilling_text') !!}
						</div>
					</section>
					<section class="section-title-round-list">
						<div class="title">Чому алмазне свердління від Аероплюс</div>
						<ul>
							@php $i = 1; @endphp
							@foreach(explode("\n", CRUDBooster::getSetting('drilling_our_advantages')) as $item)
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
					<section class="section-feedback-horizon">
						<span class="title">Скористайтеся перевагами алмазного свердління за доступною ціною. Звертайтеся до нас</span>
						<form action="/our_services/ventilation" method="POST" id="feedback-horizon">
							{{ csrf_field() }}
							<div class="input-name-phone">
								<div class="input">
									<input id="username" name="username" type="text" placeholder="Ваше ім'я" data-error="Введіть ваше ім’я." data-minlenght="Ваше ім'я закоротке.">
									<label class="error" for="username"></label>
								</div>
								<div class="input">
									<input id="phone" name="phone" type="number" placeholder="Номер телефону" data-error="Введіть ваш номер." data-minlenght="Не вірний номер.">
									<label class="error" for="phone"></label>
								</div>
							</div>
							<div class="button-block">
								<button>Залишити заявку</button>
								<div class="feedback-server-text">
									<span>Ваш запит прийнятий</span>
								</div>
							</div>
						</form>
					</section>
				</article>

		</div>
	</main>
</div>
@endsection