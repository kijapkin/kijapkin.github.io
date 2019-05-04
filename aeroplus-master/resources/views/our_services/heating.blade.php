@extends('layout.app')
@section('title', CRUDBooster::getSetting('heating_name')) {{-- SEO --}}
@section('keywords', CRUDBooster::getSetting('heating_keywords'))
@section('description', CRUDBooster::getSetting('heating_description'))
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
					<div class="li-block active" style="background-image: url('{{ asset('/images/page-heating.png') }}')">
						<div class="li-wrap">
							<div class="li-title">
								<span>Опалення</span>
							</div>
						</div>
						<a href="/our_services/heating" class="linck-page"></a>
					</div>
					<div class="li-block" style="background-image: url('{{ asset('/images/page-diamond-drilling.png') }}')">
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
						<div class="title">{{ CRUDBooster::getSetting('heating_name') }}</div>
					</div>
					<div class="text">
						{!! CRUDBooster::getSetting('heating_text') !!}
					</div>
				</section>
				<section class="section-title-round-list">
						<div class="title">Чому обрати саме нас</div>
						<ul>
							@php $i = 1; @endphp
							@foreach(explode("\n", CRUDBooster::getSetting('nashi_perevagi')) as $item)
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
				@if($Gallery_images[0])
				<section class="section-text-one-gallery">
					<div class="container">
						<div class="text-one-gallery">
							<div class="one-gallery" data-speed="5000" dir="rtl">
								@foreach($Gallery_images as $image)
								<div class="image">
									<img src="/{{ $image->image }}" alt="{{ $image->title }}" style="height: 500px;">
								</div>
								@endforeach
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
								<span>{{ $Gallery_images[0]->title }}</span>
							</div>
						</div>
					</div>
				</section>
				@endif
			</article>
		</div>
	</main>
</div>
@endsection